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
                                <h4 class="card-title">Modifier un apporteur d'affaires</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('Apporteur.update',[$apporteur->id])}}" method="post" enctype="multipart/form-data">@csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">Matricule fiscal</label>
                                                <input type="text" class="form-control @error('MatriculeFiscal') is-invalid @enderror" name="MatriculeFiscal" value="{{$apporteur->MatriculeFiscal}}" disabled>
                                                @error('MatriculeFiscal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">Code client</label>
                                                <input type="text" class="form-control @error('CodeClient') is-invalid @enderror" name="CodeClient" value="{{$apporteur->CodeClient}}" disabled>
                                                @error('CodeClient')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">Raison sociale</label>
                                                <input type="text" class="form-control @error('RaisonSociale') is-invalid @enderror" name="RaisonSociale" value="{{$apporteur->RaisonSociale}}">
                                                @error('RaisonSociale')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">Registre Commerce</label>
                                                <input type="text" class="form-control @error('RegistreCommerce') is-invalid @enderror" name="RegistreCommerce" value="{{$apporteur->RegistreCommerce}}" disabled>
                                                @error('RegistreCommerce')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$apporteur->Email}}">
                                                @error('email')
                                                <span class=" invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">Mot de passe</label>
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{$apporteur->password}}" disabled>
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
                                                <input type="text" class="form-control @error('Adresse') is-invalid @enderror" name="Adresse" value="{{$apporteur->Adresse}}">
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
                                                <input type="text" name="Tel" class="form-control @error('Tel') is-invalid @enderror" value="{{$apporteur->Tel}}">
                                                @error('Tel')
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
                                            <a href="{{route('Apporteur.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
                                        </div>
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