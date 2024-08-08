<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- Styles -->
    <title>Document</title>
</head>
<body>
           <!-- Navbar Start -->
           <div class="container-fluid mb-2 mt-3">
            <div class="row border-bottom  px-xl-5">
                <div class="col-lg-3 d-none d-lg-block fade-in">
                    {{-- <button class="btn rounded-0 shadow-none d-flex align-items-center justify-content-between  text-white w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-vertical" aria-expanded="false" aria-controls="collapseWidthExample" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                        {{-- <h6 class="m-0">Categories</h6> --}}
                        {{-- <i class="fa fa-angle-down text-dark"></i>
                    </button> --}}
                    <nav class="collapse show navbar navbar-vertical navbar-light align-items-start border bg-white rounded-4" id="navbar-vertical">
                        <div class="navbar-nav w-100 overflow-hidden ps-2" >
                            {{--   <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                                <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                    <a href="" class="dropdown-item">Men's Dresses</a>
                                    <a href="" class="dropdown-item">Women's Dresses</a>
                                    <a href="" class="dropdown-item">Baby's Dresses</a>
                                </div>
                            </div> --}}
                            <a href="" class="nav-item  nav-link">CÂBLE ET CONDUCTEUR</a>
                            <a href="" class="nav-item  nav-link">LUMINAIRE</a>
                            <a href="" class="nav-item  nav-link">OUTILLAGE</a>
                            <a href="" class="nav-item  nav-link">AUTOMATISME - GESTION DE L'ENERGIE</a>
                            <a href="" class="nav-item  nav-link">ASCENSEUR-MONTE-CHARGE</a>
                            <a href="" class="nav-item  nav-link">CARRELAGE</a>
                            <a href="" class="nav-item  nav-link">APPAREILS ELECTROMENAGERS</a>
                            <a href="" class="nav-item  nav-link">VIDEO SURVEILLANCE</a>
                            <a href="" class="nav-item  nav-link">MATERIELS INFORMATIQUES</a>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide bg-white" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 410px;">
                                <img src={{ asset('img/w.jfif') }} class="w-100" alt="...">
                                <div class="carousel-caption d-none d-m rounded-5">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px;">
                                <img src={{ asset('img/s.jfif') }} class="w-100" alt="...">
                                <div class="carousel-caption d-none d-m">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px;">
                                <img src={{ asset('img/q.jfif') }} class="w-100" alt="...">
                                <div class="carousel-caption d-none d-m">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="container-fluid" style="height: 300px;">
                        <div class="row d-none d-lg-block" >
                            <img class="img-fluid" src={{ asset('img/c.jfif') }} alt="">
                        </div><br>
                        <div class="row">
                            <div class="card border-0 shadow-sm bg-success fs-5 text-white opacity-75">
                                <span>Heures d'ouverture</span>
                                <span>Lun - Ven : 9h - 18h</span>
                                <samp>Sam : 9h - 13h</samp>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Featured Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4 rounded-3 bg-indigo" style="padding: 30px;">
                        <h1 class="fa fa-check text-white m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0 text-white">Produits de qualité</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4 rounded-3 bg-indigo" style="padding: 30px;">
                        <h1 class="fa fa-shipping-fast text-white m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0 text-white">Livraison rapide</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4 rounded-3 bg-indigo" style="padding: 30px;">
                        <h1 class="fas fa-exchange-alt text-white m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0 text-white">Service impécable</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4 rounded-3 bg-indigo" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-white m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0 text-white">Ouvert 6 jours / 7</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured End -->

        {{-- Multi-carousel --}}
        {{-- <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3">Multi Item Carousel cards</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary mb-3 mr-1" 
                        href="#carouselExampleIndicators2"
                        role="button"
                            data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-primary mb-3"
                        href="#carouselExampleIndicators2"
                        role="button"
                        data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" 
                            class="carousel slide"
                            data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" 
                                                    alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240122184958/images2.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                    Special title treatment</h4>
                                                    <p class="card-text">With supporting text
                                                                        below as a natural lead-in
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" 
                                                    alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240122184958/images2.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title
                                                                            treatment</h4>
                                                    <p class="card-text">With supporting 
                                                                        text below as a natural
                                                                        lead-in to additional 
                                                                        content.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" 
                                                    alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20230407154213/gfg-bag.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below
                                                                        as a natural lead-in to
                                                                        additional content.</p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" 
                                                    alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011854/reading-925589_640.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below 
                                                                        as a natural lead-in to
                                                                        additional content.</p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240122182422/images1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below 
                                                                        as a natural lead-in to
                                                                            additional content.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011854/reading-925589_640.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below 
                                                                        as a natural lead-in to
                                                                        additional content.</p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" 
                                                    alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011815/sutterlin-1362879_640-(1).jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below 
                                                                        as a natural lead-in to
                                                                        additional content.</p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011929/glasses-1052010_640.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below
                                                                        as a natural lead-in to 
                                                                            additional content.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" 
                                                    alt="100%x280"
                                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011929/glasses-1052010_640.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below 
                                                                        as a natural lead-in to
                                                                        additional content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- Multi-carousel End--}}
        
        <!-- slide Start -->
        <div class="container-fluid pt-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row px-xl-5" >
                            <div class="col-2" >
                                <img src={{ asset('img/q.jfif') }} class="d-block w-100" alt="Image 1" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/s.jfif') }} class="d-block w-100" alt="Image 2" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/w.jfif') }} class="d-block w-100" alt="Image 3" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/s.jfif') }} class="d-block w-100" alt="Image 4" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/q.jfif') }} class="d-block w-100" alt="Image 5" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/q.jfif') }} class="d-block w-100" alt="Image 5" >
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                        <div class="col-2" >
                            <img src={{ asset('img/q.jfif') }} class="d-block w-100 carousel-image" alt="Image 7" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/w.jfif') }} class="d-block w-100 carousel-image" alt="Image 8" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/s.jfif') }} class="d-block w-100 carousel-image" alt="Image 9" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/s.jfif') }} class="d-block w-100 carousel-image" alt="Image 4" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/q.jfif') }} class="d-block w-100 carousel-image" alt="Image 5" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/q.jfif') }} class="d-block w-100 carousel-image" alt="Image 5" >
                        </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <div class="row">
                        <div class="col-2" >
                            <img src={{ asset('img/q.jfif') }} class="img-responsive" alt="Image 10" >
                        </div>
                        </div>
                    </div> --}}
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="left: 0">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden bg-primary">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="right: 0">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
          <!-- slide End -->


        <div class="container-fluid pt-5">
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
            </div>
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0 text-center ">
                            <img class="img-fluid w-75" src={{ asset('img/11.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/1.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/17.jpg') }} alt=""  >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/2.webp') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/16.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/image1.webp') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/8.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/9.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/d.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/13.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/14.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/12.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>