@extends('admin.layouts.master')

@section('content')

<body class="">
    <div class="wrapper ">

        <div class="main-panel" id="main-panel">

            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        @if(Session::has('message'))
                        <div class="alert bg-success alert-success text-white" role="alert">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <div class="card card-upgrade">
                            <div class="card-header text-center">
                                <h4 class="card-title">Ajouter un utilisateur</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('CommercialPro.store')}}" method="post" enctype="multipart/form-data">@csrf <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Matricule</label>
                                                    <input type="text" class="form-control @error('Matricule') is-invalid @enderror" placeholder="Matricule" name="Matricule" value="{{old('Matricule')}}">
                                                    @error('Matricule')
                                                    <span class=" invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Nom</label>
                                                    <input type="text" class="form-control @error('Nom') is-invalid @enderror" placeholder="Nom" name="Nom" value="{{old('Nom')}}">
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
                                                    <input type="text" class="form-control @error('Prenom') is-invalid @enderror" placeholder="Prénom" name="Prenom" value="{{old('Prenom')}}">
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
                                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" value="{{old('email')}}">
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
                                                    <input type="text" class="form-control @error('Adresse') is-invalid @enderror" placeholder="Adresse" name="Adresse" value="{{old('Adresse')}}">
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
                                                    <input type="text" name="Tel" class="form-control @error('Tel') is-invalid @enderror" placeholder="Téléphone" value="{{old('Tel')}}">
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
                                                    <input type="text" name="CinPasseport" class="form-control @error('CinPasseport') is-invalid @enderror" placeholder="N°cin/N°passeport" value="{{old('CinPassport')}}">
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
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="Image" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Télécharger une image</label>
                                                    </div>
                                                    @error('Image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                                <a href="{{route('CommercialPro.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endsection