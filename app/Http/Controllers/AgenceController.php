<?php

namespace App\Http\Controllers;


use App\Models\Agence;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Agence::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($agence) {

                    $edit = '<a href="' . route('Agence.edit', $agence->id) . '"> <i class="now-ui-icons ui-2_settings-90"></i>  </a>';

                    $delete = '&nbsp;&nbsp;&nbsp;
                    <form action="' . route('Agence.destroy', $agence->id) . '"method="post">  ' . csrf_field() . '
                    ' . method_field("DELETE") . '
                    <button type="submit">
                    <i class="now-ui-icons ui-1_simple-remove"></i>                    </button>

                </form>';

                    $btn = $edit . $delete;
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('admin.agence.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agence.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Agence' => 'required|alpha',
            'ChefAgence' => 'required|alpha',
            'Adresse' => 'required',
            'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],

        ]);
        $data = $request->all();
        Agence::create($data);
        return redirect()->back()->with('message', 'Créé avec succès ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agence = Agence::find($id);
        return view('admin.agence.edit', compact('agence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ChefAgence' => 'required|alpha',
            'Adresse' => 'required',
            'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
        ]);
        $data = $request->all();
        $agence = Agence::find($id);
        $agence->update($data);
        return redirect()->route('Agence.index')->with('message', 'Mises à jour réussie ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $agence = Agence::find($id);
        $agence->delete();
        return redirect()->route('Agence.index')->with('message', 'Supprimé avec succès ');
    }
}
