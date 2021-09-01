<?php

namespace App\Models;



use Illuminate\Support\Facades\Session;
use Illuminate\Notifications\Notifiable;

use OwenIt\Auditing\Contracts\Auditable;
use LdapRecord\Laravel\Auth\LdapAuthenticatable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use LdapRecord\Laravel\Auth\AuthenticatesWithLdap;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Auditable, LdapAuthenticatable
{
    use HasFactory, Notifiable, AuthenticatesWithLdap;
    use AuditableTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom',
        'MatriculeFiscal',
        'CodeClient',
        'RaisonSociale',
        'RegistreCommerce',
        'Prenom',
        'email',
        'password',
        'Role_id',
        'Adresse',
        'Tel',
        'CinPasseport',
        'Matricule',
        'Agence',
        'Image'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }


    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'Role_id');
    }

    public function userAvatar($request)
    {
        $Image = $request->file('Image');
        $name = $Image->hashName();
        $destination = public_path('/images');
        $Image->move($destination, $name);
        return $name;
    }
}
