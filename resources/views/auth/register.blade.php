<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<title>TopnetB2B </title>
<link href="https://www.topnet.tn/assets/img/favicon.ico" rel="icon">
<link href="https://www.topnet.tn/assets/img/favicon.ico" rel="apple-touch-icon">

<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">


            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Bienvenue</h3>
            <p>Vous êtes à 30 secondes de gagner votre propre argent ! </p>
        </div>

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="col-md-9 register-right">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Inscription</h3>
                        <div class="row register-form">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input id="Nom" type="text" class="form-control @error('Nom') is-invalid @enderror" placeholder="Nom" name="Nom" value="{{ old('Nom') }}" required autocomplete="Nom" autofocus>

                                    @error('Nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="CinPasseport" type="text" class="form-control @error('CinPasseport') is-invalid @enderror" placeholder="Cin/Passeport" name="CinPasseport" value="{{ old('CinPasseport') }}" required autocomplete="CinPasseport">

                                    @error('CinPasseport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmez le mot de passe" required autocomplete="new-password">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input id="Prenom" type="text" class="form-control @error('Prenom') is-invalid @enderror" placeholder="Prénom" name="Prenom" value="{{ old('Prenom') }}" required autocomplete="Prenom">

                                    @error('Prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="Matricule" type="text" class="form-control @error('Matricule') is-invalid @enderror" placeholder="Matricule" name="Matricule" value="{{ old('Matricule') }}" required autocomplete="Matricule">

                                    @error('Matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <input type="submit" class="btnRegister" value="Créer mon compte" />
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>
<style>
    body {
        background-color:
            #0c2646;
    }

    .register {
        background: -webkit-linear-gradient(left, #0c2646, #ff9800);
        margin-top: 3%;
        padding: 5%;
    }

    .register-left {
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }

    .register-left input {
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }

    .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }

    .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    @keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    .register-left p {
        font-weight: lighter;

        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {
        padding: 10%;
        margin-top: 10%;
    }

    .btnRegister {
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #47b2e4;
        color: #fff;
        font-weight: 600;
        width: 70%;
        cursor: pointer;
    }

    .register .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }

    .register .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .register .nav-tabs .nav-link.active {
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
</style>