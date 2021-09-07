<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;

class ApporteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('role_id', '=', '3');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($apporteur) {
                    $view = '<a href="#" data-toggle="modal" data-target="#default' . $apporteur->id . '"> <i class="now-ui-icons education_glasses"></i></a>';
                    $edit = '&nbsp;&nbsp;&nbsp; <a href="' . route('Apporteur.edit', $apporteur->id) . '"><i class="now-ui-icons ui-2_settings-90"></i></a>';
                    $act = '&nbsp;&nbsp;&nbsp; <a href="' . route('update.statusapporteur', $apporteur->id) . '"> <button class="btn btn-success"> Activé </button></a>';
                    $des = '&nbsp;&nbsp;&nbsp; <a href="' . route('update.statusapporteur', $apporteur->id) . '"> <button class="btn btn-danger"> Désactivé </button></a>';
                    $btn = $view . $edit;
                    if ($apporteur->Etat == 1) {
                        return $btn . $act;
                    } else {
                        return $btn . $des;
                    }
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $apporteurs = User::get();
        return view('CommercialPro.Apporteur.index', compact('apporteurs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CommercialPro.Apporteur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateStore($request);
        $data = $request->all();

        $name = (new User)->userAvatar($request);

        $data['Image'] = $name;
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect()->back()->with('message', 'Ajouté avec succès!');
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

        $apporteur = User::find($id);
        return view('CommercialPro.Apporteur.edit', compact('apporteur'));
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
        $this->validateUpdate($request, $id);
        $data = $request->all();
        $apporteur = User::find($id);

        $imageName = $apporteur->Image;

        if ($request->hasFile('Image')) {
            $imageName = (new User)->userAvatar($request);
        }

        $data['Image'] = $imageName;
        $apporteur->update($data);
        return redirect()->route('Apporteur.index')->with('message', 'mises à jour réussie 
        !');
    }

    public function validateUpdate($request, $id)
    {
        return $this->validate($request, [
            'email' => 'required|unique:users,email,' . $id,
            'RaisonSociale' => 'required',
            'Adresse' => 'required',
            'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
            'Image' => 'required|mimes:jpeg,jpg,png',


        ]);
    }


    public function validateStore($request)
    {
        return $this->validate($request, [
            'MatriculeFiscal' => 'required|unique:users',
            'CodeClient' => 'required|unique:users',
            'RaisonSociale' => 'required',
            'RegistreCommerce' => 'required|unique:users',
            'email' => 'required|unique:users',
            'Adresse' => 'required',
            'password' => 'required|min:6|max:25',
            'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
            'Image' => 'required|mimes:jpeg,jpg,png',

        ]);
    }


    public function toggleStatus($id)
    {
        $apporteur  = User::find($id);
        $apporteur->Etat = !$apporteur->Etat;
        $apporteur->save();
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
