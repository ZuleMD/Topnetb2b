@extends('admin.layouts.master')

@section('content')

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">

            @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white " role="alert">
                {{Session::get('message')}}
            </div>
            @endif

            @if(Session::has('existe'))
            <div class="alert bg-danger alert-danger text-white " role="alert">
                {{Session::get('existe')}}
            </div>
            @endif


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ajouter Pack/Offre Commission</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                        <form class="form" action="{{route('Offre.store')}}" method="post" enctype="multipart/form-data">@csrf
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




                                <div class="col-12 d-flex justify-content-end">

                                    <button type="submit" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                    <a href="{{route('Offre.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
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