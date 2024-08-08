

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- Styles -->

        <style>
        @media (min-width: 992px) {
            .nav-center {
                display: flex;
                justify-content: center;
            }
        }
        .bg-orange {
            background-color: rgb(176, 117, 68)
        }
        .bg-blue {
            background-color: #4b0ed9
        }
        .bg-indigo {
            background-color: #8672f7
        }
        .carousel-item img {
                object-fit: contain;
                width: 100%;
                height: 100%;
            }
            .navbar-collapse .navbar-nav .nav-item {
                margin-right: 2rem !important; /* Espace entre les éléments de la navbar */
            }

            .navbar-collapse .navbar-nav .nav-link {
                color: white !important; /* Couleur blanche pour les liens de la navbar */
            }
            
            .carousel-image {
                height: 500px; /* Définissez la hauteur souhaitée */
                object-fit: cover; /* Permet de conserver les proportions de l'image tout en remplissant l'espace */
            }

    </style>

<!-- Topbar Start -->
<div class="container-fluid bg-primary">
     
    
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 col-6 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h2 class="m-0 font-weight-semi-bold text-white"><span class="text-white font-weight-bold border px-3 mr-1">E</span> 2ncorporate</h2>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recherche..." aria-label="recherche..." aria-describedby="basic-addon1">
                    <span class="input-group-text bg-transparent text-" id="basic-addon1"><i class="fa fa-search"></i></span>
                </div>
            </form>
        </div>
        <div class="col-lg-1 col-2 text-right">
            <a  class="btn border position-relative">
                <i class="fas fa-shopping-cart text-"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                </span>
            </a>
        </div>{{-- 
        <div class="col-lg-1">
                
        </div> --}}
        @guest
        <div class="col-lg-1 col-1 text-right  border-end">
                <a  class=" text-decoration-none text-white d-inline" href="{{route('login')}}"><i class="fa fa-user"></i><span class="d-none d-lg-block">Se connecter</span> </a>
        </div>
        <div class="col-lg-1 col-2 text-right">
            <a  class=" text-decoration-none text-white d-inline" href="{{route('signin')}}"><i class="fa fa-user"></i><span class="d-none d-lg-block">S'inscrire</span></a>
        </div>
        @endguest

        @Auth
        <div class="col-lg-1 col-1 text-right  border-end">
                <a  class=" text-decoration-none text-white d-inline" href=""><i class="fa fa-user"></i><span class="d-none d-lg-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</span> </a>
        </div> <div class="col-lg-1 col-1 text-right  border-end">
            <form action="{{route('logout')}}" method="post">
                @method("delete")
                @csrf 
                <a  class=" text-decoration-none text-white d-inline" href="#"><i class="fa fa-user"></i><span class="d-none d-lg-block">  <button type="submit" style="all: unset;">logout</button> </span> </a>
            </form>
        </div>
        @endAuth
    </div>
    <div class="row">
        <div class="col-lg-3">
            <button class="btn  rounded-5 m-0 border-white text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa fa-bars"> </i> Toutes nos catégories de produits</button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header bg-danger text-white ">
                    <h5 class="offcanvas-title text-center" id="offcanvasWithBothOptionsLabel">Nos Catégories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="nav justify-content-center text-white ">
                        <a href="" class="nav-item  text-secondary">CÂBLE ET CONDUCTEUR</a>
                        <a href="" class="nav-item  text-secondary">LUMINAIRE</a>
                        <a href="" class="nav-item  text-secondary">OUTILLAGE</a>
                        <a href="" class="nav-item  text-secondary">AUTOMATISME - GESTION DE L'ENERGIE</a>
                        <a href="" class="nav-item  text-secondary">ASCENSEUR-MONTE-CHARGE</a>
                        <a href="" class="nav-item  text-secondary">CARRELAGE</a>
                        <a href="" class="nav-item  text-secondary">APPAREILS ELECTROMENAGERS</a>
                        <a href="" class="nav-item  text-secondary">VIDEO SURVEILLANCE</a>
                        <a href="" class="nav-item  text-secondary">MATERIELS INFORMATIQUES</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
                <nav class="navbar sticky-top navbar-expand-lg text-white ">
                    <a href="" class="text-decoration-none d-lg-none text-white ">
                        <h2 class="ms-0 display-5 font-weight-semi-bold"><span class="text-white font-weight-bold border px-3 mr-1">E</span> 2NCORPORATE</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                        <div class="navbar-nav  py-0"  >
                            <a href="/" class="nav-item nav-link active fs-5 font-monospace rounded-5 " style="background-color: #d4af37;"><i class="fa fa-home"></i> Accueil </a>
                            <a href="shop.html" class="nav-item nav-link fs-5 font-monospace rounded-5 " style="background-color: #d4af37;"><i class="fa fa-shopping-cart"></i> Shop</a>
                            <a href="" class="nav-item nav-link fs-5 font-monospace rounded-5 " style="background-color: #d4af37;"><i class="fa fa-key"></i> Admin</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5 font-monospace rounded-5 " style="background-color: #d4af37;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-shipping-fast"></i> Catégories
                                </a>
                                <div class="dropdown-menu rounded-2 m-0">
                                    <a href="" class="dropdown-item  text-secondary">CÂBLE ET CONDUCTEUR</a>
                                    <a href="" class="dropdown-item  text-secondary">LUMINAIRE</a>
                                    <a href="" class="dropdown-item  text-secondary">OUTILLAGE</a>
                                    <a href="" class="dropdown-item  text-secondary">AUTOMATISME - GESTION DE L'ENERGIE</a>
                                    <a href="" class="dropdown-item  text-secondary">ASCENSEUR-MONTE-CHARGE</a>
                                    <a href="" class="dropdown-item  text-secondary">CARRELAGE</a>
                                    <a href="" class="dropdown-item  text-secondary">APPAREILS ELECTROMENAGERS</a>
                                    <a href="" class="dropdown-item  text-secondary">VIDEO SURVEILLANCE</a>
                                    <a href="" class="dropdown-item  text-secondary">MATERIELS INFORMATIQUES</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link fs-5 font-monospace rounded-5 " style="background-color: #d4af37;"><i class="fa fa-phone-alt"></i> Contact</a>
                        </div>
                    </div>
                </nav>
        </div>
       
        
    </div>
</div>
<!-- Topbar End -->
<div class="row bg-danger">
    <div class="col-lg-12 " style="background-color: #d4af37;">
        {{-- <div class="marquee border-0 text-black fs-4"><p>je vous remercie pour votre confiance</p></div> --}}
        <nav class="nav justify-content-center  navbar-light">
            <a href="" class="nav-item  nav-link text-white">CÂBLE ET CONDUCTEUR</a>
            <a href="" class="nav-item  nav-link text-white">LUMINAIRE</a>
            <a href="" class="nav-item  nav-link text-white">OUTILLAGE</a>
            <a href="" class="nav-item  nav-link text-white">AUTOMATISME - GESTION DE L'ENERGIE</a>
            <a href="" class="nav-item  nav-link text-white">ASCENSEUR-MONTE-CHARGE</a>
            <a href="" class="nav-item  nav-link text-white">CARRELAGE</a>
            <a href="" class="nav-item  nav-link text-white">APPAREILS ELECTROMENAGERS</a>
            <a href="" class="nav-item  nav-link text-white">VIDEO SURVEILLANCE</a>
        </nav>
    </div>
    {{-- <div class="col-lg-1 text-center ">
        <div id="carouselExampleSlidesOnly1" class="carousel slide p-0 m-0" data-bs-ride="carousel">
            <div class="carousel-inner p-0 m-0">
                <div class="carousel-item active">
                    <span class="fs-3 text-white">High Quality</span>
                </div>
                <div class="carousel-item">
                    <span class="fs-3 text-white">good Quality</span>
                </div>
                <div class="carousel-item">
                    <span class="fs-3 text-white">wonderful Quality</span>
                </div>
            </div>
        </div>
    </div> --}}
    
</div>
