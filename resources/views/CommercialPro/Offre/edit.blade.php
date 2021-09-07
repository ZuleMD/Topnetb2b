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
                        <div class="alert bg-success alert-success text-white " role="alert">
                            {{Session::get('message')}}
                        </div>
                        @elseif(Session::has('exists'))
                        <div class="alert bg-danger alert-danger text-white" role="alert">
                            {{Session::get('exists')}}
                        </div>
                        @endif
                        <div class="card card-upgrade">
                            <div class="card-header text-center">
                                <h4 class="card-title">Modifier Pack/Offre Commission</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('Offre.store')}}" method="post" enctype="multipart/form-data">@csrf
                                    <div class="form-body">
                                        <div class="row">


                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Référence offre </label>
                                                    <input type="text" class="form-control @error('RefOffre') is-invalid @enderror" value="{{$offre->RefOffre}}" name="RefOffre">
                                                    @error('RefOffre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Référence produit</label>
                                                    <input type="text" class="form-control @error('RefProduit') is-invalid @enderror" value="{{$offre->RefProduit}}" name="RefProduit">
                                                    @error('RefProduit')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Montant commission</label>
                                                    <input type="text" class="form-control @error('MontantCommission') is-invalid @enderror" value="{{$offre->MontantCommission}}" name="MontantCommission">
                                                    @error('MontantCommission')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                                <a href="{{route('Offre.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
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