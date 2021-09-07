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
                                <h4 class="card-title">Publier une opportunité</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('Opportunite.store')}}" method="post" enctype="multipart/form-data">@csrf
                                    <div class="form-body">
                                        <div class="row">

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for=""><strong>Profil du client final</strong></label><br>
                                                    <input type="radio" name="radio" value="new" id="new" onclick="yesnoCheck()">&nbsp;<label for="">Nouveau client</label> &nbsp;&nbsp;&nbsp;
                                                    <input type="radio" name="radio" value="old" id="old" onclick="yesnoCheck()" checked>&nbsp;<label for="">Ancien client</label>

                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Raison sociale</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="RaisonSociale" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Raison Sociale</label>
                                                    </div>
                                                    @error('RaisonSociale')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <!--old client-->

                                        <span id="ifNo">
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
                                                        <label for="">Offre</label>
                                                        <input type="text" class="form-control @error('Offre') is-invalid @enderror" placeholder="Offre" name="Offre">
                                                        @error('Offre')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </span>


                                        <!--new client-->
                                        <span id="ifYes" style="display:none;">
                                            <div class="row">


                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>MatriculeFiscal</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="MatriculeFiscal" aria-describedby="inputGroupFileAddon01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Matricule Fiscal</label>
                                                        </div>
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
                                                        <label>CIN gérant</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="CinGerant" aria-describedby="inputGroupFileAddon01">
                                                            <label class="custom-file-label" for="inputGroupFile01">CIN gérant</label>
                                                        </div>
                                                        @error('CinGerant')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </span>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                            <a href="{{route('Apporteur.index')}}" class="btn btn-light-secondary me-1 mb-1" role="button">Annuler</a>
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


    <script>
        function yesnoCheck() {
            if (document.getElementById('new').checked)
                document.getElementById('ifYes').style.display = "block";
            else
                document.getElementById('ifYes').style.display = "none";
            if (document.getElementById('old').checked)
                document.getElementById('ifNo').style.display = "block";
            else
                document.getElementById('ifNo').style.display = "none";
            return;
        }
    </script>
    @endsection