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
            <a href="{{ route('register') }}"><input type="submit" style="width: 80%;" name="" value="Créer mon compte" /></a><br />
        </div>

        <div class="col-md-9 register-right">


            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Déjà inscrit ?</h3>

                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="current-password">
                                </div>
                                @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <input type="submit" class="btnRegister" value="Se connecter" />


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