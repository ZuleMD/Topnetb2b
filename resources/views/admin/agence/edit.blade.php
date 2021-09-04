@extends('admin.layouts.master')

@section('content')

<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-12">
            @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Modifier une agence</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('Agence.update',[$agence->id])}}" method="post">@csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="">Nom d'agence</label>
                                            <input type="text" class="form-control @error('Agence') is-invalid @enderror" value="{{$agence->Agence}}" name="Agence" disabled>
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
                                            <input type="text" class="form-control @error('ChefAgence') is-invalid @enderror" value="{{$agence->ChefAgence}}" name="ChefAgence">
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
                                            <input type="text" class="form-control @error('Adresse') is-invalid @enderror" value="{{$agence->Adresse}}" name="Adresse">
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
                                            <input type="text" class="form-control @error('Tel') is-invalid @enderror" value="{{$agence->Tel}}" name="Tel">
                                            @error('Tel')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Modifier</button>
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
</section>

@endsection

<style>
    footer {

        bottom: 0;
        position: fixed;

    }
</style>