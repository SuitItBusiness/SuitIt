<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>SuitIt | Adapta la moda</title>




    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/gallery/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/gallery/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/gallery/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/gallery/logo.png">
    <link rel="manifest" href="assets/img/gallery/logo.png">
    <meta name="msapplication-TileImage" content="assets/img/gallery/logo.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block"
                        src="assets/img/gallery/logo.png" alt="logo" /><span
                        class="text-1000 fs-0 fw-bold ms-2">SUITIT</span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page"
                                href="#categoryWomen">Armario</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#header">Temporadas</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#collection">Colecciones</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#outlet">Looks</a></li>
                    </ul>
                    <form class="d-flex"><a class="text-1000" href="#!">
                            <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg></a><a class="text-1000" href="#!">
                            <svg class="feather feather-search me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></a><a class="text-1000" href="#!">
                            <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg></a><a class="text-1000" href="#!">
                            <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg></a></form>
                </div>
            </div>
        </nav>
        <div class="pb-11 bg-light-gradient border-bottom border-white border-5">
            <div class="bg-holder overlay overlay-light"
                style="background-image:url(assets/img/gallery/header-bg.png);background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
            <script src='https://kenwheeler.github.io/slick/slick/slick.js'></script>


            {{-- FOR EACH DE PANTALONES --}}
            {{-- <div class="product">
                            <div class="product-top">
                              @foreach ($clothes as $clo)
                              <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-1.png" alt="..." />
                                  <div class="card-img-overlay ps-0"> </div>
                                  <div class="card-body ps-0 bg-200">
                                    <h5 class="fw-bold text-1000 text-truncate">{{$clo->name}}</h5>
                                    <div class="fw-bold"><span class="text-primary ">{{$clo->price}}€</span></div>
                                  </div><a class="stretched-link" href="#"></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach --}}

            {{-- FIN FOR EACH PANTALONES --}}

            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

            <div class="container-fluid !direction !spacing  ">
                <h3 class="fs-3 fs-lg-5 lh-sm mt-5 centrado">Busca tus prendas</h3>
                <section class="hero-section">
                    <div class="carta-grid">
                        <a class="carta" href="#">
                            <div class="carta__background"
                                style="background-image:url(assets/img/gallery/fondocamisetas.png)"></div>
                            <div class="carta__content">
                                <p class="carta__category">Categoría</p>
                                <h3 class="carta__heading">Encuentra tus camisetas</h3>
                            </div>
                        </a>
                        <a class="carta" href="#">
                            <div class="carta__background"
                                style="background-image:url(assets/img/gallery/fondopantalones.png)"></div>
                            <div class="carta__content">
                                <p class="carta__category">Categoría</p>
                                <h3 class="carta__heading">Encuentra tus pantalones</h3>
                            </div>
                        </a>
                        <a class="carta" href="#">
                            <div class="carta__background"
                                style="background-image:url(assets/img/gallery/fondocamisas.png)"></div>
                            <div class="carta__content">
                                <p class="carta__category">Categoría</p>
                                <h3 class="carta__heading">Encuentra tus camisas</h3>
                            </div>
                        </a>
                        <a class="carta" href="#">
                            <div class="carta__background"
                                style="background-image:url(assets/img/gallery/fondozapatos.png)"></div>
                            <div class="carta__content">
                                <p class="carta__category">Categoría</p>
                                <h3 class="carta__heading">Encuentra tus zapatos</h3>
                            </div>
                        </a>
                        <div>
                </section>

            </div>
        </div>
        <section>

            <div class="container">
              <h3 class="fs-3 fs-lg-5 lh-sm mt-5 centrado">Crea tu estilo</h3>
                <div class="row h-100 g-0">
                    <div class="col-md-6">
                        <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                            <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Entra al creador de outfits </h1>
                            <p class="mb-5 fs-1">En el creador de outfits podras encontrar un estilo ideal a corde a tus gustos personales</p>
                            <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="#!"
                                    role="button">Entrar ya</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                src="assets/img/gallery/sharp-dress.png" alt="..." /><a class="stretched-link"
                                href="#!"></a></div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
        <h3 class="fs-3 fs-lg-5 lh-sm mt-5 centrado">Blog de modas</h3> 
        <article class="col-md-12 e">
          <!-- Modern - Bootstrap Cards -->
          <header>
            </header>
          <div class="cards-2 section-gray">
              <div class="container">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="card card-blog">
                              <div class="card-image">
                                  <a href="#"> <img class="img img-raised" src="https://images.pexels.com/photos/936722/pexels-photo-936722.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"> </a>
                                  <div class="ripple-cont"></div>
                              </div>
                              <div class="table">
                                  <h6 class="category text-info">Masculinea</h6>
                                  <h4 class="card-caption">
                      <a href="https://masculinea.com/">Ha sido considerado uno de los mejores blogs de moda masculina este año.</a>
                    </h4>
                                  <p class="card-description"> ¿Te has cansado de que tu estilo de vestir siempre sea el mismo? ¿Tienes mucha ropa en tu armario, pero no sabes que ponerte? ¿Quieres aprender a vestir de manera más minimalista, pero darle un toque más personalizado a tu estilo? Pues bien, todas las respuestas las puedes encontrar en Masculinea.com. </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card card-blog">
                              <div class="card-image">
                                  <a href="#"> <img class="img img-raised" src="https://images.pexels.com/photos/2422461/pexels-photo-2422461.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"> </a>
                              </div>
                              <div class="table">
                                  <h6 class="category text-danger">Mr.Boy</h6>
                                  <h4 class="card-caption">
                      <a href="#">Karlmond Tang ha sido conocido como uno de los ego-blogs más sofisticados de Reino Unido.</a>
                    </h4>
                                  <p class="card-description">No nos parece extraño que en cada semana de la moda masculina en Londres sea uno de los influencers más cotizados.

                                    Lo que encontraremos en su blog es un portafolio completo de Street Style con las últimas tendencias en moda masculina.</p><br>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card card-blog">
                              <div class="card-image">
                                  <a href="#"> <img class="img img-raised" src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"> </a>
                              </div>
                              <div class="table">
                                  <h6 class="category text-success">Mariano Di Vaio</h6>
                                  <h4 class="card-caption">
                      <a href="#">Mariano Di Vaio es el referente del público masculino.</a>
                    </h4>
                                  <p class="card-description">¡Cuenta con más de cinco millones de seguidores en sus redes sociales!
                                    En su blog podremos encontrar las siguientes temáticas:
                                    Últimas tendencias en la moda masculina, con especial mención a la moda italiana y sobre todo pasarelas de Milán y Roma.</p><br><br>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- PROFILE CARDS 1 -->
          <h3>Creadores</h3>
          <div class="cards-5 section-gray">
              <div class="container">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="card card-profile">
                              <div class="card-avatar">
                                  <a href="#"> <img class="img" src="https://images.pexels.com/photos/3190334/pexels-photo-3190334.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"> </a>
                              </div>
                              <div class="table">
                                  <h4 class="card-caption">Pedro Martín</h4>
                                  <h6 class="category text-muted">CEO / Co-Founder</h6>
                                  <p class="card-description"> Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is... </p>
                                  <div class="ftr">  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card card-profile">
                              <div class="card-avatar">
                                  <a href="#"> <img class="img" src="https://images.pexels.com/photos/3370021/pexels-photo-3370021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"> </a>
                              </div>
                              <div class="table">
                                  <h4 class="card-caption">Andrés Repiso</h4>
                                  <h6 class="category text-muted">Front End Developer</h6>
                                  <p class="card-description"> Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is... </p>
                                  <div class="ftr"></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card card-profile">
                              <div class="card-avatar">
                                  <a href="#"> <img class="img" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"> </a>
                              </div>
                              <div class="table">
                                  <h4 class="card-caption">Óscar Povea</h4>
                                  <h6 class="category text-muted">Web Designer</h6>
                                  <p class="card-description"> Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is... </p>
                                  <div class="ftr"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        <section class="py-11">
            <div class="bg-holder overlay overlay-0"
                style="background-image:url(assets/img/gallery/cta.png);background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="carousel slide carousel-fade" id="carouseCta" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-12">
                                            <div class="text-light text-center py-2">
                                                <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our
                                                    Outlets in</h5>
                                                <h1 class="display-1 text-white fw-normal mb-8">London</h1><a
                                                    class="btn btn-lg text-light fs-1" href="#!"
                                                    role="button">See Addresses
                                                    <svg class="bi bi-arrow-right-short"
                                                        xmlns="http://www.w3.org/2000/svg" width="23"
                                                        height="23" fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                        </path>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-12">
                                            <div class="text-light text-center py-2">
                                                <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our
                                                    Outlets in</h5>
                                                <h1 class="display-1 text-white fw-normal mb-8">Bristol</h1><a
                                                    class="btn btn-lg text-light fs-1" href="#!"
                                                    role="button">See Addresses
                                                    <svg class="bi bi-arrow-right-short"
                                                        xmlns="http://www.w3.org/2000/svg" width="23"
                                                        height="23" fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                        </path>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-12">
                                            <div class="text-light text-center py-2">
                                                <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our
                                                    Outlets in</h5>
                                                <h1 class="display-1 text-white fw-normal mb-8">Birmingham</h1><a
                                                    class="btn btn-lg text-light fs-1" href="#!"
                                                    role="button">See Addresses
                                                    <svg class="bi bi-arrow-right-short"
                                                        xmlns="http://www.w3.org/2000/svg" width="23"
                                                        height="23" fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                        </path>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouseCta"
                                        data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                            aria-hidden="true"></span><span
                                            class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouseCta"
                                        data-bs-slide="next"><span class="carousel-control-next-icon"
                                            aria-hidden="true"></span><span class="visually-hidden">Next
                                        </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 pt-7">

            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-2 mb-3">
                        <h5 class="lh-lg fw-bold text-1000">Información</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Sobre
                                    nosotros</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Afiliados</a>
                            </li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Blog de
                                    moda</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h5 class="lh-lg fw-bold text-1000">Help &amp; Support</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Shipping
                                    Info</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Refunds</a>
                            </li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">How to
                                    Order</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">How to
                                    Track</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Size
                                    Guides</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h5 class="lh-lg fw-bold text-1000">Customer Care</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Contact Us</a>
                            </li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Payment
                                    Methods</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Bonus
                                    Point</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-auto ms-auto">
                        <h5 class="lh-lg fw-bold text-1000">Signup For The Latest News</h5>
                        <div class="row input-group-icon mb-5">
                            <div class="col-12">
                                <input class="form-control input-box" type="email" placeholder="Enviar email  "
                                    aria-label="email" />
                                <svg class="bi bi-arrow-right-short input-box-icon" xmlns="http://www.w3.org/2000/svg"
                                    width="23" height="23" fill="#424242" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-800">
                            <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg><span class="text-800">+34 764 98 54 27</span>
                        </p>
                        <p class="text-800">
                            <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg><span class="text-800">suitit@gmail.com</span>
                        </p>
                    </div>
                </div>
                <div class="border-bottom border-3"></div>
                <div class="row flex-center my-3">
                    <div class="col-md-6 order-1 order-md-0">
                        <p class="my-2 text-1000 text-center text-md-start"> Hecho por SUITIT</p>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end"><a href="#!"><span class="me-4"
                                    data-feather="facebook"></span></a><a href="#!"> <span class="me-4"
                                    data-feather="instagram"></span></a><a href="#!"> <span class="me-4"
                                    data-feather="youtube"></span></a><a href="#!"> <span class="me-4"
                                    data-feather="twitter"></span></a></div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets/vendors/@popperjs/popper.min.js"></script>
    <script src="assets\js\custom.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="assets/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/vendors/feather-icons/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</body>

</html>
