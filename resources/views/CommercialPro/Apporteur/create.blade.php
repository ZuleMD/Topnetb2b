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
                    <h4 class="card-title">Ajouter un apporteur d'affaires</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{route('Apporteur.store')}}" method="post" enctype="multipart/form-data">@csrf
                            <div class="row">



                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Code client</label>
                                        <input type="text" class="form-control @error('CodeClient') is-invalid @enderror" placeholder="Code Client" name="CodeClient">
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
                                        <input type="text" class="form-control @error('RaisonSociale') is-invalid @enderror" placeholder="Raison Sociale" name="RaisonSociale">
                                        @error('RaisonSociale')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Matricule fiscal</label>
                                        <input type="text" class="form-control @error('MatriculeFiscal') is-invalid @enderror" placeholder="Matricule Fiscal" name="MatriculeFiscal">
                                        @error('MatriculeFiscal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Registre Commerce</label>
                                        <input type="text" class="form-control @error('RegistreCommerce') is-invalid @enderror" placeholder="Registre Commerce" name="RegistreCommerce">
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
                                    <a href="{{route('Apporteur.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
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