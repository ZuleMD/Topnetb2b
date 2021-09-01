@extends('admin.layouts.master')

@section('content')

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">

            @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ajouter un utilisateur</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{route('CommercialPro.store')}}" method="post" enctype="multipart/form-data">@csrf
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Matricule</label>
                                        <input type="text" class="form-control @error('Matricule') is-invalid @enderror" placeholder="Matricule" name="Matricule">
                                        @error('Matricule')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Nom</label>
                                        <input type="text" class="form-control @error('Nom') is-invalid @enderror" placeholder="Nom" name="Nom">
                                        @error('Nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Prénom</label>
                                        <input type="text" class="form-control @error('Prenom') is-invalid @enderror" placeholder="Prénom" name="Prenom">
                                        @error('Prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" value="                   {{old('email')}}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Mot de passe</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe ">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Adresse</label>
                                        <input type="text" class="form-control @error('Adresse') is-invalid @enderror" placeholder="Adresse" name="Adresse">
                                        @error('Adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Téléphone</label>
                                        <input type="text" name="Tel" class="form-control @error('Tel') is-invalid @enderror" placeholder="Téléphone">
                                        @error('Tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="">Agence</label>
                                            <select name="Agence" class="form-control @error('Agence') is-invalid @enderror">
                                                <option value="">Veuillez sélectionner une agence </option>

                                                @foreach(App\Models\Agence::all() as $a)
                                                <option value="{{$a->Agence}}">{{$a->Agence}}</option>
                                                @endforeach
                                            </select>
                                            @error('Agence')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>




                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">N°cin/N°passeport</label>
                                        <input type="text" name="CinPasseport" class="form-control @error('CinPasseport') is-invalid @enderror" placeholder="N°cin/N°passeport">
                                        @error('CinPasseport')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Rôle </label>
                                        <select name="Role_id" class="form-control @error('Role_id') is-invalid @enderror">
                                            <option value="">Veuillez sélectionner un rôle </option>
                                            @foreach(App\Models\Role::where('Nom','!=','ApporteurAffaire')->get() as $role)
                                            <option value="{{$role->id}}">{{$role->Nom}}</option>
                                            @endforeach
                                        </select>
                                        @error('Role_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control file-upload-info @error('Image') is-invalid @enderror" placeholder="Télécharger une image" name="Image">
                                        <span class="input-group-append">

                                        </span>
                                        @error('Image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                    <a href="{{route('CommercialPro.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

<style>
    footer {

        bottom: 0;
        position: fixed;

    }
</style>