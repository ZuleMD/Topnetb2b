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
                                <h4 class="card-title">Ajouter une agence</h3>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{route('Agence.store')}}" method="post">@csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Nom d'agence</label>
                                                    <input type="text" class="form-control @error('Agence') is-invalid @enderror" placeholder="Nom d'agence" name="Agence">
                                                    @error('Agence')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Chef d'agence</label>
                                                    <input type="text" class="form-control @error('ChefAgence') is-invalid @enderror" placeholder="Chef d'agence" name="ChefAgence">
                                                    @error('ChefAgence')
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
                                                    <input type="text" class="form-control @error('Tel') is-invalid @enderror" placeholder="Téléphone" name="Tel">
                                                    @error('Tel')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                                <a href="{{route('Agence.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
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


        @endsection