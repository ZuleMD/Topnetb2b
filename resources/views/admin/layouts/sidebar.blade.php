<body>

    <div id="app">

        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-center">
                        <div class=" logo">
                            <img src="{{asset('template2/dist/assets/images/logo/logo.png')}}" alt="Logo" srcset="">
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-title">
                            <div class="ms-3 name">
                                <h6 class="font-bold"> {{ Auth::user()->role->Nom }}</h6>
                            </div>
                        </li>

                        <li class="sidebar-item active ">
                            <a href="{{url('dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-graph-up"></i>
                                <span>Tableau de bord </span>
                            </a>
                        </li>

                        @if(auth()->check()&& auth()->user()->role->Nom === 'Admin')
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-briefcase"></i>
                                <span>Gestion agence</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('Agence.create')}}">Ajouter</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('Agence.index')}}">Consulter</a>
                                </li>

                            </ul>
                        </li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-plus"></i>
                                <span>Gestion utilisateur</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('CommercialPro.create')}}">Ajouter</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('CommercialPro.index')}}">Consulter</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{route('Historique.index')}}" class='sidebar-link'>
                                <i class="bi bi-clock-history"></i>
                                <span>Historique</span>
                            </a>
                        </li>

                        @endif

                        @if(auth()->check()&& auth()->user()->role->Nom === 'CommercialPro')
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-plus"></i>
                                <span>Gestion apporteur d'affaires</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('Apporteur.create')}}">Ajouter</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('Apporteur.index')}}">Consulter</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-gear"></i>
                                <span>Gestion Pack/Offre Commission</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('Offre.create')}}">Ajouter</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('Offre.index')}}">Consulter</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-plus"></i>
                                <span>Consulter opprtunité</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="{{route('Opportunite.index')}}">Consulter</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{route('Historique.index')}}" class='sidebar-link'>
                                <i class="bi bi-clock-history"></i>
                                <span>Historique</span>
                            </a>
                        </li>


                        @endif


                        @if(auth()->check()&& auth()->user()->role->Nom === 'ApporteurAffaire')

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-plus"></i>
                                <span>Gérer demandes des opportunités</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('Opportunite.create')}}">Ajouter</a>
                                </li>

                            </ul>
                        </li>

                        @endif



                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>