<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\Datatables;

class OffreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Offre::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($offre) {
                    $view = '<a href="#" data-toggle="modal" data-target="#default' . $offre->id . '"> <i class="now-ui-icons education_glasses"></i></a>';
                    $edit = '&nbsp;&nbsp;&nbsp; <a href="' . route('Offre.edit', $offre->id) . '"><i class="now-ui-icons ui-2_settings-90"></i></a>';
                    $acti = '&nbsp;&nbsp;&nbsp; <span class="badge badge-success"> Activé </span>';
                    $des = '&nbsp;&nbsp;&nbsp; <span class="badge badge-danger"> Désactivé </span>';
                    $act = $view . $edit;
                    if ($offre->Etat == 1) {
                        return $act . $acti;
                    } else {
                        return $act . $des;
                    }
                    return $act;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $offres = Offre::get();
        return view('CommercialPro.offre.index', compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CommercialPro.Offre.create');
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

        $data = [
            'RefOffre' => $request->RefOffre,
            'RefProduit' => $request->RefProduit

        ];


        $mnt = ['MontantCommission' => $request->MontantCommission];

        $Offres = Offre::where($data);
        $existOffres = Offre::where($data)->exists();

        $existMnt = Offre::where($mnt)->exists();

        $record = $request->all();

        if ($existOffres && !$existMnt) {
            Offre::create($record);

            foreach ($Offres->get() as $offre) {
                Offre::where('id', '=', $offre->id)->update(['Etat' => 0]);
            }
            Offre::get()->last()->update(['Etat' => 1]);

            Session::flash('message', 'Offre modifié avec succès!');
        } else if ($existOffres && $existMnt) {

            Session::flash('exists', "L'offre existe déjà avec le même montant commission  ! !");
        } else if (!$existOffres) {
            Offre::create($record);

            Session::flash('message', 'Offre ajouté avec succès!');
        }

        return Redirect::back();
    }



    public function validateStore($request)
    {
        return $this->validate($request, [
            'RefOffre' => 'required',
            'RefProduit' => 'required',
            'MontantCommission' => 'required|numeric',

        ]);
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
        $offre = Offre::find($id);
        return view('CommercialPro.Offre.edit', compact('offre'));
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
