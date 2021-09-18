<?php

namespace App\Http\Controllers;

use App\Models\Opportunite;
use App\Models\Publish;
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
            $model = Publish::with('apporteur', 'opportunite');
            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('action', function ($publish) {
                    $view = '<a href="#" data-toggle="modal" data-target="#default' . $publish->opportunite->id . '"> <i class="now-ui-icons education_glasses"></i></a>';
                    $new = '&nbsp;&nbsp; <a href="' . route('update.statusopportunite', $publish->opportunite->id) . '"> <button class="btn btn-primary"> Nouvellement créé </button></a>';
                    $pending = '&nbsp;&nbsp; <a href="' . route('update.statusopportunite', $publish->opportunite->id) . '"> <button class="btn btn-info"> En cours de traiter </button></a>';
                    $checked = '&nbsp;&nbsp; <a href="' . route('update.statusopportunite', $publish->opportunite->id) . '"> <button class="btn btn-success"> Traité </button></a>';

                    if ($publish->Etat == 0) {
                        return $view . $new;
                    } elseif ($publish->Etat == 1) {
                        return $view . $pending;
                    } elseif ($publish->Etat == 2) {
                        return $view . $checked;
                    }
                    return $view;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $publishes = Publish::get();
        return view('ApporteurAffaire.Opportunite.index', compact('publishes'));
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


            $data = $request->only('RaisonSociale', 'CodeClient', 'Offre');

            $name1 = (new Opportunite)->raisonSociale($request);
            $data['RaisonSociale'] = $name1;


            $id = Opportunite::create($data);

            Publish::create([
                'apporteur_id' => auth()->user()->id,
                'opportunite_id' => $id->id,

            ]);

            return redirect()->back()->with('message', 'Ajouté avec succès!');
        } else {

            $this->validate($request, [
                'RefMatriculeFiscal' => 'required',
                'MatriculeFiscal' => 'required|mimes:jpeg,jpg,png',
                'RaisonSociale' => 'required|mimes:jpeg,jpg,png',
                'RefRegistreCommerce' => 'required',
                'RegistreCommerce' => 'required|mimes:jpeg,jpg,png',
                'Adresse' => 'required',
                'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
                'Nom' => 'required|regex:/^[\pL\s\-]+$/u',
                'Prenom' => 'required|regex:/^[\pL\s\-]+$/u',
                'CinGerant' => 'required|mimes:jpeg,jpg,png',
                'Offre' => 'required|regex:/^[\pL\s\-]+$/u',


            ]);
            $data = $request->except('radio', 'CodeClient');

            $name1 = (new Opportunite)->raisonSociale($request);

            $data['RaisonSociale'] = $name1;

            $name2 = (new Opportunite)->MatriculeFiscal($request);

            $data['MatriculeFiscal'] = $name2;

            $name3 = (new Opportunite)->RegistreCommerce($request);

            $data['RegistreCommerce'] = $name3;

            $name4 = (new Opportunite)->cinGerant($request);

            $data['CinGerant'] = $name4;

            $id = Opportunite::create($data);

            Publish::create([
                'apporteur_id' => auth()->user()->id,
                'opportunite_id' => $id->id,

            ]);
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
            'RefMatriculeFiscal' => 'required',
            'MatriculeFiscal' => 'required|mimes:jpeg,jpg,png',
            'RaisonSociale' => 'required|mimes:jpeg,jpg,png',
            'RefRegistreCommerce' => 'required',
            'RegistreCommerce' => 'required|mimes:jpeg,jpg,png',
            'Adresse' => 'required',
            'Tel' => ['required', 'regex:/^[2459]\d{7}$/'],
            'Nom' => 'required|regex:/^[\pL\s\-]+$/u',
            'Prenom' => 'required|regex:/^[\pL\s\-]+$/u',
            'CinGerant' => 'required|mimes:jpeg,jpg,png',
            'Offre' => 'required|regex:/^[\pL\s\-]+$/u',



        ]);
    }

    public function toggleStatus($id)
    {
        $opporuunite  = Opportunite::find($id);
        if ($opporuunite->Etat != 2) {
            $opporuunite->Etat = $opporuunite->Etat + 1;
        }
        $opporuunite->save();
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
