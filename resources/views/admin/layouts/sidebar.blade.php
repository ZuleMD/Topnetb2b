<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">

            <div class="logo">
                <a href="{{url('dashboard')}}" class="simple-text logo-normal">
                    <img src="https://www.topnetschool.tn/wp-content/uploads/2020/10/logo-topnet-2.png" alt="logo">
                </a>
                <a href="#" class="simple-text logo-normal">
                    {{ Auth::user()->role->Nom }}
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="{{url('dashboard')}}">
                            <i class="now-ui-icons design_app"></i>
                            <p>Tableau de bord</p>
                        </a>
                    </li>
                    <!--Admin-->
                    @if(auth()->check()&& auth()->user()->role->Nom === 'Admin')
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#"><i class="now-ui-icons business_briefcase-24"></i>
                            Gestion agence</a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="{{route('Agence.create')}}">Ajouter</a></li>
                            <li><a class="nav-link" href="{{route('Agence.index')}}">Consulter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-submenu">

                        <a class="nav-link" href="#">
                            <i class="now-ui-icons users_single-02"></i>Gestion utilisateur</a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="{{route('CommercialPro.create')}}">Ajouter</a></li>
                            <li><a class="nav-link" href="{{route('CommercialPro.index')}}">Consulter</a></li>
                        </ul>
                    </li>

                    @endif
                    <!--CommercialPro-->
                    @if(auth()->check()&& auth()->user()->role->Nom === 'CommercialPro')
                    <li class="nav-item has-submenu">

                        <a class="nav-link" href="#">
                            <i class="now-ui-icons users_single-02"></i>Gestion apporteur d'affaires</a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="{{route('Apporteur.create')}}">Ajouter</a></li>
                            <li><a class="nav-link" href="{{route('Apporteur.index')}}">Consulter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-submenu">

                        <a class="nav-link" href="#">
                            <i class="now-ui-icons business_money-coins"></i>Gestion Pack/Offre Commission</a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="{{route('Offre.create')}}">Ajouter</a></li>
                            <li><a class="nav-link" href="{{route('Offre.index')}}">Consulter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-submenu">

                        <a class="nav-link" href="#">
                            <i class="now-ui-icons gestures_tap-01"></i>Consulter opprtunité</a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="{{route('Opportunite.index')}}">Consulter</a></li>
                        </ul>
                    </li>
                    @endif
                    <!--Admin && CommercialPro-->
                    @if(auth()->check()&& auth()->user()->role->Nom === 'Admin' or auth()->check()&& auth()->user()->role->Nom === 'CommercialPro')

                    <li class="nav-item">

                        <a class="nav-link" href="{{route('Historique.index')}}">
                            <i class="now-ui-icons education_glasses"></i>Historique</a>
                    </li>
                    @endif
                    <!--ApporteurAffaire-->
                    @if(auth()->check()&& auth()->user()->role->Nom === 'ApporteurAffaire')
                    <li class="nav-item has-submenu">

                        <a class="nav-link" href="#">
                            <i class="now-ui-icons business_badge"></i>Gérer demandes des opportunités</a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="{{route('Opportunite.create')}}">Ajouter</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>


        <script>
            document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

                element.addEventListener('click', function(e) {

                    let nextEl = element.nextElementSibling;
                    let parentEl = element.parentElement;

                    if (nextEl) {
                        e.preventDefault();
                        let mycollapse = new bootstrap.Collapse(nextEl);

                        if (nextEl.classList.contains('show')) {
                            mycollapse.hide();
                        } else {
                            mycollapse.show();
                            // find other submenus with class=show
                            var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                            // if it exists, then close all of them
                            if (opened_submenu) {
                                new bootstrap.Collapse(opened_submenu);
                            }
                        }
                    }
                }); // addEventListener
            }) // forEach

            // 
        </script>