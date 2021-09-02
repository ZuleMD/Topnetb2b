@extends('layouts.app')

@section('content')
<div class="box">

    <img src="https://www.first2trade.com/media/cache/home_activity_area_thumb_large/uploads/files/Accueil/poignee-de-main-banniere-homepage-f2t-compressed.jpeg" alt="" class="img-fluid">
    <div class="text">

        <h1>Plateforme de<strong> mise en relation</strong><strong>&nbsp;</strong><strong> d'affaires</strong>&nbsp;<br>pour&nbsp;<strong> Topnet</strong> </h1>
        <p>TopnetB2B libère la circulation des opportunités d'affaires<br>
            et facilite la prospection commerciale des agences topnet!</p>

    </div>
</div>


<br><br><br><br><br>

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">
            <span class="text-muted"><strong>&nbsp;&nbsp;</strong>J'apporte une affaire</span>
        </h2>
        <p class="lead"><strong>&nbsp;&nbsp;&nbsp;</strong>J'ai identifié un client final qui cherche à acheter, louer un produit, un service.
            J'indique ce besoin afin <strong>&nbsp;&nbsp;&nbsp;</strong>que les entreprises recherchant ce type d'opportunités me contactent pour une mise en relation avec <strong>&nbsp;&nbsp;&nbsp;</strong>le client final !</p>
    </div>
    <div class="col-md-4">
        <img src="https://cash-credit.fr/gallery_gen/d52d8965b98bf46e1a96a2b71e43fb92_anim.gif" class="img-fluid" alt="Un savoir-faire Français">
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">
            <span class="text-muted">Je fais connaître mon offre</span>
        </h2>
        <p class="lead">Je suis une entreprise,
            je recherche des clients ou des apporteurs d'affaires.
            Je décris mon offre, TopnetB2B va la valoriser et la promouvoir auprès de mes prospects cibles pour me générer plus d'opportunités !</p>
    </div>
    <div class="col-md-5 order-md-1">
        <img src="https://cash-credit.fr/gallery_gen/4a2a25dcd5cfb7dd8b65a12eaebe61ad_anim.gif" class="img-fluid" alt="Une boutique ouverte toute l'année">
    </div>
</div>
<hr class="featurette-divider">

@endsection
@section('footer')
<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color:#303030; color:#fff;">
        © 2021 Topnet:
        <a href="{{ url('/') }}"> Apporteurs d'affaires pour entreprises en Tunisie</a>
    </div>
    <!-- Copyright -->
</footer>
@endsection



<style>
    a {
        color: #bdbdbd;
    }

    .bg-light {

        position: relative;
        left: 0;
        bottom: 0;
        width: 100%;


    }

    .text strong {
        font-weight: bold;
        color: #d8af09;
    }

    .content-part>.wrapper {
        overflow: visible;
    }

    .content-part-color h2 {
        color: inherit;
    }

    .content-part-color-dark {
        background-color: #2d3142;
    }



    .home-content-key-points-list>ul>li {
        width: 50%;
    }

    .home-content-key-points-list {
        text-align: center;
    }



    .home-content-key-points-list .img {
        margin: 0 0 20px;
    }

    .content-part-color-dark h3 {
        color: #6bb5a2;
    }

    .home-content-key-points-list>ul {
        list-style: none;
        padding: 0;
        margin: 0 -14px;
        font-size: 0;
    }

    .home-content-key-points-list {
        text-align: center;
    }

    .home-content-key-points-list>ul>li {
        font-size: 14px;
        display: inline-block;
        vertical-align: top;
        width: 100%;
        max-width: 368px;
        padding: 0 14px;
        margin: 0 0 20px;
    }

    .content-part {
        padding: 50px 0 30px;
        overflow: hidden;
    }

    .box {
        position: relative;
        display: inline-block;



        /* Make the width of box same as image */
    }

    .text h1 {
        margin-bottom: 27px;
    }

    footer {

        bottom: 0;
        position: fixed;

    }

    .box .text {
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        color: #fff;
        background: rgba(0, 0, 0, 0.5);

        left: 0;
        right: 0;
        top: 40%;
        /* Adjust this value to move the positioned div up and down */
        text-align: center;
        width: auto;
        height: auto;
        /* Set the width of the positioned div */
    }
</style>