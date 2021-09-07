<?php

namespace App\Http\Controllers;

use App\Models\Opportunite;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;

class OpportuniteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Opportunite::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($opportunite) {
                    $view = '<a href="#" data-toggle="modal" data-target="#default' . $opportunite->id . '"> <i class="now-ui-icons education_glasses"></i></a>';

                    return $view;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $opportunites = Opportunite::get();
        return view('ApporteurAffaire.Opportunite.index', compact('opportunites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ApporteurAffaire.Opportunite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request['radio'] == 'old') {

            $this->validate($request, [
                'CodeClient' => 'required',
                'RaisonSociale' => 'required|mimes:jpeg,jpg,png',
                'Offre' => 'required',


            ]);
            //mistake fl 'RaisonSociale' => 'required tokhrej fi ezouz required


            $data = $request->only('RaisonSociale', 'CodeClient', 'Offre');

            $name1 = (new Opportunite)->raisonSociale($request);
            $data['RaisonSociale'] = $name1;

            Opportunite::create($data);

            return redirect()->back()->with('message', 'Ajouté avec succès!');
        } else {

            $this->validate($request, [
                'MatriculeFiscal' => 'required|mimes:jpeg,jpg,png',
                'RaisonSociale' => 'required|mimes:jpeg,jpg,png',
                'RegistreCommerce' => 'required',
                'Adresse' => 'required',
                'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
                'Nom' => 'required|alpha',
                'Prenom' => 'required|alpha',
                'CinGerant' => 'required|mimes:jpeg,jpg,png',

            ]);
            $data = $request->except('radio', 'CodeClient', 'Offre');

            $name1 = (new Opportunite)->raisonSociale($request);

            $data['RaisonSociale'] = $name1;

            $name2 = (new Opportunite)->matriculeFiscal($request);

            $data['MatriculeFiscal'] = $name2;

            $name3 = (new Opportunite)->cinGerant($request);

            $data['CinGerant'] = $name3;

            Opportunite::create($data);

            return redirect()->back()->with('message', 'Ajouté avec succès!');
        }
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
        //
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
        //
    }
    public function validateStore($request)
    {
        return $this->validate($request, [
            'MatriculeFiscal' => 'required|mimes:jpeg,jpg,png',
            'CodeClient' => 'required',
            'RaisonSociale' => 'required|mimes:jpeg,jpg,png',
            'RegistreCommerce' => 'required',
            'Adresse' => 'required',
            'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
            'Nom' => 'required|alpha',
            'Prenom' => 'required|alpha',
            'Offre' => 'required',
            'CinGerant' => 'required|mimes:jpeg,jpg,png',

        ]);
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
