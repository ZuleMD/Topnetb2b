<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\Datatables;


class CommercialProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('role_id', '=', '1')->orWhere('role_id', '=', '2');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($user) {
                    $view = '<a href="#" data-toggle="modal" data-target="#default' . $user->id . '"> <i class="now-ui-icons education_glasses"></i> </a>';
                    $edit = '&nbsp;&nbsp;&nbsp; <a href="' . route('CommercialPro.edit', $user->id) . '"><i class="now-ui-icons ui-2_settings-90"></i> </a>';
                    $act = '&nbsp;&nbsp;&nbsp; <a href="' . route('update.statusagent', $user->id) . '"> <button class="btn btn-success"> Activé </button></a>';
                    $des = '&nbsp;&nbsp;&nbsp; <a href="' . route('update.statusagent', $user->id) . '"> <button class="btn btn-danger"> Désactivé </button></a>';
                    $btn = $view . $edit;
                    if ($user->Etat == 1) {
                        return $btn . $act;
                    } else {
                        return $btn . $des;
                    }
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $users = User::get();
        return view('admin.CommercialPro.index', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CommercialPro.create');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.CommercialPro.edit', compact('user'));
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
        $user = User::find($id);

        $imageName = $user->Image;

        if ($request->hasFile('Image')) {
            $imageName = (new User)->userAvatar($request);
        }
        $data['Image'] = $imageName;

        $user->update($data);
        return redirect()->route('CommercialPro.index')->with('message', 'mises à jour réussie 
        !');
    }
    public function validateUpdate($request, $id)
    {
        return $this->validate($request, [
            'email' => 'required|unique:users,email,' . $id,
            'Adresse' => 'required',
            'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
            'Agence' => 'required',
            'Role_id' => 'required',
            'Image' => 'required|mimes:jpeg,jpg,png',



        ]);
    }

    public function validateStore($request)
    {
        return $this->validate($request, [
            'Matricule' => 'required|unique:users',
            'Nom' => 'required',
            'Prenom' => 'required',
            'email' => 'required|unique:users',

            'Adresse' => 'required',
            'CinPasseport' => 'required|unique:users',
            'password' => 'required|min:6|max:25',
            'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
            'Agence' => 'required',
            'Role_id' => 'required',
            'Image' => 'required|mimes:jpeg,jpg,png',



        ]);
    }

    public function toggleStatus($id)
    {
        $user  = User::find($id);
        $user->Etat = !$user->Etat;
        $user->save();
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
