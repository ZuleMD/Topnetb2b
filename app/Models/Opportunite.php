<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Opportunite extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [


        'CodeClient',
        'RaisonSociale',
        'Offre',
        'MatriculeFiscal',
        'RegistreCommerce',
        'Nom',
        'Prenom',
        'Adresse',
        'Tel',
        'CinGerant',
    ];



    public function raisonSociale($request)
    {
        $RaisonSociale = $request->file('RaisonSociale');
        $name = $RaisonSociale->hashName();
        $destination = public_path('/images');
        $RaisonSociale->move($destination, $name);
        return $name;
    }


    public function matriculeFiscal($request)
    {
        $MatriculeFiscal = $request->file('MatriculeFiscal');
        $name = $MatriculeFiscal->hashName();
        $destination = public_path('/images');
        $MatriculeFiscal->move($destination, $name);
        return $name;
    }

    public function cinGerant($request)
    {
        $CinGerant = $request->file('CinGerant');
        $name = $CinGerant->hashName();
        $destination = public_path('/images');
        $CinGerant->move($destination, $name);
        return $name;
    }
}
