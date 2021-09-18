@extends('admin.layouts.master')

@section('content')

<body class="user-profile">
    <div class="wrapper ">

        <div class="main-panel" id="main-panel">

            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        @if(Session::has('message'))
                        <div class="alert bg-success alert-success text-white" role="alert">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Modifier un utilisateur</h5>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('CommercialPro.update',[$user->id])}}" method="post" enctype="multipart/form-data">@csrf
                                    @method('PUT')
                                    <div class="row">

                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label for="">Matricule</label>
                                                <input type="text" class="form-control @error('Matricule') is-invalid @enderror" name="Matricule" value="{{$user->Matricule}}" disabled>
                                                @error('Matricule')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label for="">Nom</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="Nom" value="{{$user->Nom}}" disabled>
                                                @error('Nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label for="">Prénom</label>
                                                <input type="text" class="form-control @error('Prenom') is-invalid @enderror" name="Prenom" value="{{$user->Prenom}}" disabled>
                                                @error('Prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->Email}}">
                                                @error('email')
                                                <span class=" invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label for="">Mot de passe</label>
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{$user->Password}}" disabled>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label for="">Adresse</label>
                                                <input type="text" class="form-control @error('Adresse') is-invalid @enderror" name="Adresse" value="{{$user->Adresse}}">
                                                @error('Adresse')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label for="">Téléphone</label>
                                                <input type="text" name="Tel" class="form-control @error('Tel') is-invalid @enderror" value="{{$user->Tel}}">
                                                @error('Tel')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="">Agence</label>
                                                <select name="Agence" class="form-control @error('Agence') is-invalid @enderror">
                                                    <option value="">Veuillez sélectionner une agence </option>

                                                    @foreach(App\Models\Agence::all() as $a)
                                                    <option value="{{$a->Agence}}" @if($user->Agence==$a->Agence)selected @endif>{{$a->Agence}}</option>
                                                    @endforeach
                                                </select>
                                                @error('Agence')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="">N°cin/N°passeport</label>
                                                <input type="text" name="CinPasseport" class="form-control @error('CinPasseport') is-invalid @enderror" value="{{$user->CinPasseport}}" disabled>
                                                @error('CinPasseport')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Rôle </label>
                                                <select name="Role_id" class="form-control @error('Role_id') is-invalid @enderror">
                                                    <option value="">Veuillez sélectionner un rôle</option>
                                                    @foreach(App\Models\Role::where('Nom','!=','ApporteurAffaire')->get() as $role)
                                                    <option value="{{$role->id}}" @if($user->Role_id==$role->id)selected @endif>{{$role->Nom}}</option>
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
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="Image" aria-describedby="inputGroupFileAddon01" value="{{$user->Image}}">
                                                    <label class="custom-file-label" for="inputGroupFile01">Télécharger une image</label>
                                                </div>
                                                @error('Image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Modifier</button>
                                        <a href="{{route('CommercialPro.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{asset('dash/img/bg5.jpg')}}" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">

                                    <img class="avatar border-gray" src="{{asset('images')}}/{{ $user->Image}}" alt="...">
                                    <h5 class="title">{{$user->Prenom}}&nbsp;{{$user->Nom}}</h5>

                                    <p class="description">
                                        {{$user->Role->Nom}}
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <style>
        .author .title {
            color: #f96332;
        }
    </style>
    @endsection