@extends('template')

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->

    <div class="main" id="top">

        <div class="pb-11 bg-light-gradient border-bottom border-white border-5">
            <div class="bg-holder overlay overlay-light"
                style="background-image:url(assets/img/gallery/header-bg.png);background-size:cover;">
            </div>
            <!--/.bg-holder-->


            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

            <div class="container-fluid !direction !spacing  ">
                <h3 class="fs-1 fs-lg-5 lh-sm mt-5 centrado titulos">Busca tus prendas</h3>
                <div class="hero-section">
                    <div class="carta-grid">
                        @foreach (\App\Models\Category::all() as $category)
                            <a class="carta" href="armario/category/{{ $category->name }}">
                                <div class="carta__background"
                                    style="background-image:url(assets/img/gallery/{{ $category->image }})"></div>
                                <div class="carta__content">
                                    <p class="carta__category letra">Categoría</p>
                                    <h3 class="carta__heading letra">Encuentra tus {{ $category->name }}</h3>
                                </div>
                            </a>
                        @endforeach
                        </a>
                        <div>
                        </div>
                    </div>
            </div>
        </div>
        <h3 class="fs-1 fs-lg-5 lh-sm mb-5 centrado titulos">Añadir prendas generales</h3>
        <div class="d-flex justify-content-center align-items-center">
            <div id="carouselExampleControls" class="carousel slide w-50" data-bs-ride="carousel">
              <div class="carousel-inner">
                @php $count = 0; @endphp
                @foreach ($clothes->chunk(3) as $chunk)
                  @php $active = ($count == 0) ? 'active' : ''; @endphp
                  <div class="carousel-item {{ $active }}">
                    <div class="row justify-content-center">
                      @foreach ($chunk as $clo)
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0">
                          <div class="card rounded text-white">
                            <img class="card-img-top" src="assets/img/gallery/{{$clo->image}}" alt="...">
                            <div class="card-body text-center">
                              <h5 class="card-title fw-bold text-truncate text-center">{{$clo->name}}</h5>
                              <a href="{{ route('wardrobe.addArticle', [$clo->id, 1]) }}" class="btn-sm button mt-2 text-center justify-center text-decoration-none">
                                Añadir al armario
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                    class="bi bi-chevron-left"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                    class="fa-solid fa-chevron-right"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm">
                                    <a href="{{ route('importGeneral') }}"
                                        class="btn-sm button mt-2 text-center justify-center text-decoration-none botonImportar">Importar
                                        todas las prendas</a>
                                </div>
                                <div class="col-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <section> close ============================-->
                <!-- ============================================-->
                <h3 class="fs-1 fs-lg-5 lh-sm mt-5 centrado titulos">Blog de modas</h3>
                <article class="col-md-12 e">
                    <!-- Modern - Bootstrap Cards -->
                    <header>
                    </header>
                    <div class="cards-2 ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-blog">
                                        <div class="card-image">
                                            <a href="#"> <img class="img img-raised"
                                                    src="https://images.pexels.com/photos/842811/pexels-photo-842811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                            </a>
                                            <div class="ripple-cont"></div>
                                        </div>
                                        <div class="table">
                                            <h6 class="category text-info">Masculinea</h6>
                                            <h4 class="card-caption">
                                                <a href="https://masculinea.com/">Ha sido considerado uno de los mejores
                                                    blogs de moda masculina este año.</a>
                                            </h4>
                                            <p class="card-description"> ¿Te has cansado de que tu estilo de vestir
                                                siempre sea el mismo? ¿Tienes mucha ropa en tu armario, pero no sabes
                                                que ponerte? ¿Quieres aprender a vestir de manera más minimalista, pero
                                                darle un toque más personalizado a tu estilo? Pues bien, todas las
                                                respuestas las puedes encontrar en Masculinea.com. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-blog">
                                        <div class="card-image">
                                            <a href="#"> <img class="img img-raised"
                                                    src="https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                            </a>
                                        </div>
                                        <div class="table">
                                            <h6 class="category text-danger">Mr.Boy</h6>
                                            <h4 class="card-caption">
                                                <a href="">Karlmond Tang ha sido conocido como uno de los
                                                    ego-blogs más sofisticados de Reino Unido.</a>
                                            </h4>
                                            <p class="card-description">No nos parece extraño que en cada semana de la
                                                moda masculina en Londres sea uno de los influencers más cotizados.

                                                Lo que encontraremos en su blog es un portafolio completo de Street
                                                Style con las últimas tendencias en moda masculina.</p><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-blog">
                                        <div class="card-image">
                                            <a href="#"> <img class="img img-raised"
                                                    src="https://images.pexels.com/photos/1300550/pexels-photo-1300550.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                            </a>
                                        </div>
                                        <div class="table">
                                            <h6 class="category text-success">Mariano Di Vaio</h6>
                                            <h4 class="card-caption">
                                                <a href="http://www.avm1959.it/es/brands/mariano_di_vaio-23.html">Mariano
                                                    Di Vaio es el referente del público masculino.</a>
                                            </h4>
                                            <p class="card-description">¡Cuenta con más de cinco millones de seguidores
                                                en sus redes sociales!
                                                En su blog podremos encontrar las siguientes temáticas:
                                                Últimas tendencias en la moda masculina, con especial mención a la moda
                                                italiana y sobre todo pasarelas de Milán y Roma.</p><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PROFILE CARDS 1 -->
                    <h3 class="fs-1 fs-lg-5 lh-sm mt-5 centrado titulos">Creadores</h3>
                    <div class="cards-5 ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-profile">
                                        <div class="card-avatar">
                                            <a href="#"> <img class="img"
                                                    src="https://images.pexels.com/photos/3190334/pexels-photo-3190334.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                            </a>
                                        </div>
                                        <div class="table">
                                            <h4 class="card-caption">Pedro Martín</h4>
                                            <h6 class="category text-muted">Desarrollador Web</h6>
                                            <p class="card-description">Permítanme presentarles a Pedro, un destacado y
                                                competente desarrollador web que se distingue por su habilidad técnica y
                                                su enfoque meticuloso en cada proyecto. Con una pasión incansable por la
                                                programación y una sólida experiencia en el campo del desarrollo web,
                                                Pedro se ha ganado una reputación envidiable en la industria.</p>
                                            <div class="ftr"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-profile">
                                        <div class="card-avatar">
                                            <a href="#"> <img class="img"
                                                    src="https://images.pexels.com/photos/3370021/pexels-photo-3370021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                            </a>
                                        </div>
                                        <div class="table">
                                            <h4 class="card-caption">Andrés Repiso</h4>
                                            <h6 class="category text-muted">Desarrollador Web</h6>
                                            <p class="card-description"> Andrés es un destacado profesional en el campo
                                                del desarrollo web, con una amplia experiencia y un enfoque
                                                excepcionalmente metódico en su trabajo. Su dedicación y pasión por la
                                                programación se reflejan en la calidad y eficiencia de sus proyectos.
                                            </p>
                                            <div class="ftr"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-profile">
                                        <div class="card-avatar">
                                            <a href="#"> <img class="img"
                                                    src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                            </a>
                                        </div>
                                        <div class="table">
                                            <h4 class="card-caption">Óscar Povea</h4>
                                            <h6 class="category text-muted">Desarrollador Web</h6>
                                            <p class="card-description"> Es un placer presentar a Óscar, un talentoso y
                                                experimentado desarrollador web que ha establecido un sólido
                                                reconocimiento en la industria. Su enfoque perfeccionista y su pasión
                                                por la creación de soluciones digitales innovadoras lo convierten en un
                                                profesional altamente valorado en el campo del desarrollo web.</p>
                                            <div class="ftr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            @extends('layout/footer')
        </div>
    </div>
</body>
