<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="theme-color" content="#333">
  <title>Centro Acadêmico</title>
  <meta name="description" content="Material Style Theme">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{asset('css/preload.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/plugins.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.bordo.min.css')}}">
  <!--[if lt IE 9]>
        <script src="{{asset('/js/html5shiv.min.js')}}"></script>
        <script src="{{asset('/js/respond.min.js')}}"></script>
      <![endif]-->
    </head>

<body>
  <div id="ms-preload" class="ms-preload">
    <div id="status">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
  </div>
  <div class="ms-site-container ms-nav-fixed">
    <nav class="navbar navbar-expand-md navbar-fixed ms-lead-navbar navbar-mode navbar-mode mb-0" id="navbar-lead">
      <div class="container container-full">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
            <!-- <img src="{{asset('/img/demo/logo-navbar.png" alt=""> -->
            <span class="ms-logo ms-logo-white ms-logo-sm">C. A.</span>
            <span class="ms-title">Centro<strong>Acadêmico</strong></span>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a data-scroll class="nav-link active" href="../index.html">Home</a></li>
            <li class="nav-item"><a data-scroll class="nav-link" href="#services">Serviços</a></li>
            <li class="nav-item"><a data-scroll class="nav-link" href="#portfolio">Portfolio</a></li>
            <!-- <li class="nav-item"><a data-scroll class="nav-link" href="#pricing">Pricing</a></li> -->
            <li class="nav-item"><a data-scroll class="nav-link" href="#about">Sobre Nós</a></li>
            <li class="nav-item"><a data-scroll class="nav-link" href="#team">Equipe</a></li>
            <li class="nav-item dropdown">
              <a href="../index.html" class="nav-link dropdown-toggle animated fadeIn animation-delay-8"
                data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                data-name="portfolio">Engenharias <i class="zmdi zmdi-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item"
                    href="https://universidadedevassouras.edu.br/graduacao/engenhariasoftware"><i
                      class="zmdi zmdi-devices"></i> Engenharia de Software</a></li>
                <li><a class="dropdown-item" href="https://universidadedevassouras.edu.br/graduacao/engenhariacivil"><i
                      class="zmdi zmdi-city-alt"></i>Engenharia Civil</a></li>
                <li><a class="dropdown-item"
                    href="https://universidadedevassouras.edu.br/graduacao/engenhariaproducao"><i
                      class="zmdi zmdi-assignment-o"></i> Engenharia de Produção</a></li>
                <li><a class="dropdown-item"
                    href="https://universidadedevassouras.edu.br/graduacao/engenhariaquimica"><i
                      class="zmdi zmdi-gradient"></i> Engenharia Química</a></li>
                <li><a class="dropdown-item"
                    href="https://universidadedevassouras.edu.br/graduacao/engenhariaeletrica"><i
                      class="zmdi zmdi-flash"></i>Engenharia Elétrica</a></li>
              </ul>
            </li>
            <li class="nav-item"><a data-scroll class="nav-link" href="#contact">Contato</a></li>
          </ul>
        </div> <!-- navbar-collapse collapse -->
        <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="zmdi zmdi-menu"></i></a>
      </div> <!-- container -->
    </nav>
    <header class="ms-hero">
        <div class="ms-hero ms-hero-material">
            <span class="ms-hero-bg"></span>
      <div id="carousel-header" class="carousel carousel-header slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-header" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-header" data-slide-to="1"></li>
          <li data-target="#carousel-header" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-7">
                  <div class="carousel-caption">
                    <h1 class="color-white no-mt mb-4 animated zoomInDown animation-delay-7">Venha
                      fazer parte da nossa Atlética!</h1>
                    <ul class="list-unstyled list-hero">
                      <li><i class="animated flipInX animation-delay-6 color-warning zmdi zmdi-cloud"></i>
                        <span class="color-warning animated fadeInRightTiny animation-delay-7">Exclusivo
                          para Alunos da Universidade</span></li>
                      <li><i class="animated flipInX animation-delay-8 color-info zmdi zmdi-globe"></i>
                        <span class="color-info animated fadeInRightTiny animation-delay-9">Participamos
                          de Competições Globais</span></li>
                      <li><i class="animated flipInX animation-delay-10 color-success zmdi zmdi-download"></i>
                        <span class="color-success animated fadeInRightTiny animation-delay-11">Lorem
                          ipsum dolor sit amet consectetur</span></li>
                    </ul>
                    <div class="text-center">
                      <a href="#" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16">Me
                        Inscrever</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                  <img src="{{asset('/img/logos/baroes.jpeg')}}" alt="..."
                    class="img-fluid mt-6 center-block text-center animated zoomInDown animation-delay-5">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-7">
                  <div class="carousel-caption">
                    <h1 class="color-white no-mt mb-4 animated zoomInDown animation-delay-7">At the
                      Vanguard of Innovation</h1>
                    <ul class="list-unstyled list-hero">
                      <li><i class="animated flipInX animation-delay-6 color-success zmdi zmdi-spinner"></i>
                        <span class="color-success animated fadeInRightTiny animation-delay-7">High-speed
                          servers and performance</span></li>
                      <li><i class="animated flipInX animation-delay-8 color-danger zmdi zmdi-cocktail"></i>
                        <span class="color-danger animated fadeInRightTiny animation-delay-9">Global
                          web solutions &amp; cloud computing</span></li>
                      <li><i class="animated flipInX animation-delay-10 color-info zmdi zmdi-case"></i>
                        <span class="color-info animated fadeInRightTiny animation-delay-11">Lorem
                          ipsum dolor sit amet consectetur</span></li>
                    </ul>
                    <div class="text-center">
                      <a href="#" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16"><i
                          class="zmdi zmdi-settings"></i> Personalize</a>
                      <a href="#" class="btn btn-warning btn-xlg btn-raised animated flipInX animation-delay-18"><i
                          class="zmdi zmdi-download"></i> Download</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                  <img src='{{asset("images/21.jpg")}}'
                    class="img-fluid mt-6 center-block text-center animated zoomInRight animation-delay-5">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-7">
                  <div class="carousel-caption">
                    <h1 class="color-white no-mt mb-4 animated zoomInDown animation-delay-7">At the
                      Vanguard of Innovation</h1>
                    <ul class="list-unstyled list-hero">
                      <li><i class="animated flipInX animation-delay-8 color-info zmdi zmdi-nature"></i>
                        <span class="color-info animated fadeInRightTiny animation-delay-9">Global
                          web solutions &amp; cloud computing</span></li>
                      <li><i class="animated flipInX animation-delay-6 color-danger zmdi zmdi-city-alt"></i>
                        <span class="color-danger animated fadeInRightTiny animation-delay-7">High-speed
                          servers and performance</span></li>
                      <li><i class="animated flipInX animation-delay-10 color-warning zmdi zmdi-graduation-cap"></i>
                        <span class="color-warning animated fadeInRightTiny animation-delay-11">Lorem
                          ipsum dolor sit amet consectetur</span></li>
                    </ul>
                    <div class="text-center">
                      <a href="#" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16"><i
                          class="zmdi zmdi-settings"></i> Personalize</a>
                      <a href="#" class="btn btn-warning btn-xlg btn-raised animated flipInX animation-delay-18"><i
                          class="zmdi zmdi-download"></i> Download</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                  <img src="{{asset('/img/logos/logo-baroes.jpeg')}}" alt="..."
                    class="img-fluid mt-6 center-block text-center animated zoomInDown animation-delay-5">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a href="#carousel-header"
          class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary left carousel-control" role="button"
          data-slide="prev"><i class="zmdi zmdi-chevron-left"></i></a>
        <a href="#carousel-header"
          class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary right carousel-control" role="button"
          data-slide="next"><i class="zmdi zmdi-chevron-right"></i></a>
      </div>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i
            class="zmdi zmdi-long-arrow-up"></i></a>
    </header>
  </div>

  <div class="bg-light index-1 intro-fixed-next ">
    <section id="services">
      <div class="wrap ms-hero-img-meeting ms-hero-bg-info color-white ms-bg-fixed">
        <div class="container">
          <div class="text-center mb-4">
            <h1 class="wow zoomInDown">Serviços</h1>
            <h3 class="wow zoomInDown">Knows the <span class="text-normal">Material Style</span> and surprise
              yourself
            </h3>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h3 class="wow fadeInUp animation-delay-2">Descrição</h3>
              <p class="wow fadeInUp animation-delay-3">Lorem ipsum dolor sit amet, <strong>consectetur adipisicing
                  elit</strong>. Repellat cum laudantium quos tempora magnam voluptas sint perspiciatis nulla ipsa
                itaque atque quod incidunt maiores iusto, laborum, magni aliquam. Aut eligendi nesciunt nobis eum
                dolorum maxime corporis dicta, repudiandae eveniet ab laboriosam minima voluptate quaerat sequi modi
                suscipit cumque unde rerum.</p>
              <p class="wow fadeInUp animation-delay-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Debitis porro, magni obcaecati cupiditate nulla rem quae, eveniet corrupti reprehenderit maiores
                nobis
                doloribus expedita non quasi itaque. Incidunt, delectus quidem vitae laudantium, natus <a href="#"
                  class="color-warning">quibusdam odio eius eligendi</a> tenetur! Ea, repudiandae eveniet ab minima
                laboriosam minima voluptate quaerat sequi harum.</p>
            </div>
            <div class="col-lg-6">
              <div class="ms-collapse" id="accordion2" role="tablist" aria-multiselectable="true">
                <div class="mb-0 card card-info wow fadeInUp animation-delay-2">
                  <div class="card-header" role="tab" id="headingOne2">
                    <h4 class="card-title">
                      <a class="withripple" role="button" data-toggle="collapse" href="#collapseOne2"
                        aria-expanded="true" aria-controls="collapseOne2">
                        <i class="fa fa-lightbulb-o"></i> Talent and creativity </a>
                    </h4>
                  </div>
                  <div id="collapseOne2" class="card-collapse collapse show" role="tabpanel"
                    aria-labelledby="headingOne2" data-parent="#accordion2">
                    <div class="card-body color-dark">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati molestiae id ipsum ipsa
                        repudiandae. Voluptatum quos facilis sequi. Ullam optio eius deleniti dolore quasi doloribus
                        ipsam.</p>
                      <p>Dolores, corrupti, aliquam doloremque accusantium nemo sunt veniam est incidunt perferendis
                        minima obcaecati ex aperiam voluptatibus blanditiis eum suscipit magnam dolorum in adipisci
                        nihil.</p>
                    </div>
                  </div>
                </div>
                <div class="mb-0 card card-info wow fadeInUp animation-delay-5">
                  <div class="card-header" role="tab" id="headingTwo2">
                    <h4 class="card-title">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapseTwo2"
                        aria-expanded="false" aria-controls="collapseTwo2">
                        <i class="fa fa-desktop"></i> Design and code </a>
                    </h4>
                  </div>
                  <div id="collapseTwo2" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2"
                    data-parent="#accordion2">
                    <div class="card-body color-dark">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit dignissimos inventore
                        cupiditate expedita saepe enim nobis nostrum? Laborum, laudantium, maiores, cupiditate,
                        perspiciatis at ad accusamus.</p>
                      <p>Incidunt, harum itaque voluptatum asperiores recusandae explicabo maiores. Alias, quos, ex
                        impedit at error id laborum fugit architecto qui beatae molestiae dolorum rem veritatis quia
                        aliquam totam.</p>
                    </div>
                  </div>
                </div>
                <div class="mb-0 card card-info wow fadeInUp animation-delay-7">
                  <div class="card-header" role="tab" id="headingThree3">
                    <h4 class="card-title">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapseThree2"
                        aria-expanded="false" aria-controls="collapseThree2">
                        <i class="fa fa-user"></i> Quality and Support </a>
                    </h4>
                  </div>
                  <div id="collapseThree2" class="card-collapse collapse" role="tabpanel"
                    aria-labelledby="headingThree2" data-parent="#accordion2">
                    <div class="card-body color-dark">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, rerum unde doloribus
                        accusamus pariatur non expedita quibusdam velit totam obcaecati. Consequatur, deserunt,
                        asperiores quam nisi earum voluptates.</p>
                      <p>Dolorum, aliquam, totam labore saepe error a eum culpa assumenda sint laudantium ipsa iure
                        ullam et dicta nesciunt repellendus optio voluptatibus reprehenderit odit officia fugiat
                        necessitatibus recusandae architecto.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-6 color-dark">
            <h2 class="color-white text-center mb-4 wow fadeInUp animation-delay-2">Some numerical data</h2>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div
                  class="card card-royal-inverse card-body overflow-hidden text-center wow zoomInUp animation-delay-2">
                  <h2 class="counter">450</h2>
                  <i class="fa fa-4x fa-coffee"></i>
                  <p class="mt-2 no-mb lead small-caps">cups of coffee</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div
                  class="card card-success-inverse card-body overflow-hidden text-center wow zoomInUp animation-delay-5">
                  <h2 class="counter">64</h2>
                  <i class="fa fa-4x fa-briefcase"></i>
                  <p class="mt-2 no-mb lead small-caps">projects done</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div
                  class="card card-danger-inverse card-body overflow-hidden text-center wow zoomInUp animation-delay-4">
                  <h2 class="counter">600</h2>
                  <i class="fa fa-4x fa-comments-o"></i>
                  <p class="mt-2 no-mb lead small-caps">comments</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div
                  class="card card-warning-inverse card-body overflow-hidden text-center wow zoomInUp animation-delay-3">
                  <h2 class="counter">3500</h2>
                  <i class="fa fa-4x fa-group"></i>
                  <p class="mt-2 no-mb lead small-caps">happy clients</p>
                </div>
              </div>
            </div>
            <div class="text-center color-white mw-800 center-block mt-4">
              <p class="lead lead-lg wow fadeInUp animation-delay-2">Discover our projects and the rigorous process
                of
                creation. Our principles are creativity, design, experience and knowledge. We are backed by 20 years
                of research.</p>
              <a href="javascript:void(0)"
                class="btn btn-raised btn-xlg btn-white color-bordo wow flipInX animation-delay-5"><i></i> Tenho um
                projeto!</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio" class="">
      <div class="wrap ms-hero-bg-dark ms-hero-img-keyboard ms-bg-fixed">
        <div class="container index-1">
          <div class="text-center color-white mb-4 mw-800 center-block">
            <h1 class="wow fadeInUp animation-delay-2">Portifólio</h1>
            <p class="lead color-medium wow fadeInUp animation-delay-2">Discover our projects and the rigorous
              process
              of creation. Our principles are creativity, design, experience and <span
                class="color-white">knowledge</span>. We are backed by 20 years of research.</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
              <div class="ms-thumbnail-container wow fadeInUp">
                <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                  <img src="{{asset('/img/demo/port9.jpg')}}" alt="" class="img-fluid">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i class="zmdi zmdi-eye"></i>
                        View more</a>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
              <div class="ms-thumbnail-container wow fadeInUp">
                <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                  <img src="{{asset('/img/demo/port11.jpg')}}" alt="" class="img-fluid">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i class="zmdi zmdi-eye"></i>
                        View more</a>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
              <div class="ms-thumbnail-container wow fadeInUp">
                <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                  <img src="{{asset('/img/demo/port23.jpg')}}" alt="" class="img-fluid">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i class="zmdi zmdi-eye"></i>
                        View more</a>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
              <div class="ms-thumbnail-container wow fadeInUp">
                <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                  <img src="{{asset('/img/demo/port7.jpg')}}" alt="" class="img-fluid">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i class="zmdi zmdi-eye"></i>
                        View more</a>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
              <div class="ms-thumbnail-container wow fadeInUp">
                <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                  <img src="{{asset('/img/demo/port4.jpg')}}" alt="" class="img-fluid">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i class="zmdi zmdi-eye"></i>
                        View more</a>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
              <div class="ms-thumbnail-container wow fadeInUp">
                <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                  <img src="{{asset('/img/demo/port2.jpg')}}" alt="" class="img-fluid">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i class="zmdi zmdi-eye"></i>
                        View more</a>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Preços -->
    <!-- <section id="pricing">
          <div class="wrap ms-hero-img-airplane ms-hero-bg-royal ms-bg-fixed">
            <div class="container">
              <div class="text-center mb-4">
                <h2 class="uppercase color-white wow fadeInDown animation-delay-2">See our subscription plans</h2>
                <p class="lead uppercase color-light wow fadeInDown animation-delay-2">Surprise with our unique features</p>
              </div>
              <div class="row no-gutters">
                <div class="col-lg-4">
                  <div class="price-table price-table-success wow zoomInUp">
                    <header class="price-table-header">
                      <span class="price-table-category">Personal</span>
                      <h3><sup>$</sup>19 <sub>/mo.</sub></h3>
                    </header>
                    <div class="price-table-body">
                      <ul class="price-table-list">
                        <li><i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                        <li><i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
                        <li><i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis.</li>
                        <li><i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                        <li><i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                      </ul>
                      <div class="text-center">
                        <a href="javascript:void(0)" class="btn btn-success btn-raised"><i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="price-table price-table-info prominent wow zoomInDown">
                    <header class="price-table-header">
                      <span class="price-table-category">Professional</span>
                      <h3><sup>$</sup>49 <sub>/mo.</sub></h3>
                    </header>
                    <div class="price-table-body">
                      <ul class="price-table-list">
                        <li><i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                        <li><i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
                        <li><i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis.</li>
                        <li><i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                        <li><i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                      </ul>
                      <div class="text-center">
                        <a href="javascript:void(0)" class="btn btn-info btn-raised"><i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="price-table price-table-danger wow zoomInUp">
                    <header class="price-table-header">
                      <span class="price-table-category">Business</span>
                      <h3><sup>$</sup>99 <sub>/mo.</sub></h3>
                    </header>
                    <div class="price-table-body">
                      <ul class="price-table-list">
                        <li><i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                        <li><i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
                        <li><i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis.</li>
                        <li><i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                        <li><i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                      </ul>
                      <div class="text-center">
                        <a href="javascript:void(0)" class="btn btn-danger btn-raised"><i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          container
          </div>
        </section> -->
    <!-- Fim Preços -->
    <section id="about">
      <div class="container pt-6">
        <h2 class="right-line">About Us</h2>
        <div class="row">
          <div class="col-lg-6">
            <h3 class="color-bordo wow fadeInUp animation-delay-2">Description</h3>
            <p class="wow fadeInUp animation-delay-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repellat cum laudantium quos tempora magnam voluptas sint perspiciatis nulla ipsa itaque atque quod
              incidunt maiores iusto, laborum, magni aliquam. Aut eligendi nesciunt nobis eum dolorum maxime
              corporis
              dicta, repudiandae eveniet ab laboriosam minima voluptate quaerat sequi modi suscipit cumque unde
              rerum.
            </p>
            <p class="wow fadeInUp animation-delay-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Debitis porro, magni obcaecati cupiditate nulla rem quae, eveniet corrupti reprehenderit maiores nobis
              doloribus expedita non quasi itaque. Incidunt, delectus quidem vitae laudantium, natus quibusdam odio
              eius eligendi tenetur! Ea, repudiandae eveniet ab minima laboriosam minima voluptate quaerat sequi
              harum.</p>
          </div>
          <div class="col-lg-6">
            <h3 class="color-bordo wow fadeInUp animation-delay-2">Knowledge</h3>
            <div class="progress progress-lg wow fadeInUp animation-delay-6">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                style="width: 100%;"> HTML 5 &amp; CSS 3 </div>
            </div>
            <div class="progress progress-lg wow fadeInUp animation-delay-8">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                style="width: 80%"> Javascript &amp; Jquery </div>
            </div>
            <div class="progress progress-lg wow fadeInUp animation-delay-10">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                style="width: 70%"> PHP 5 &amp; MYSQL 5 </div>
            </div>
            <div class="progress progress-lg wow fadeInUp animation-delay-12">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                style="width: 75%"> C/C++ </div>
            </div>
            <div class="progress progress-lg wow fadeInUp animation-delay-14">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                style="width: 80%"> Python </div>
            </div>
            <div class="progress progress-lg wow fadeInUp animation-delay-16">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                style="width: 50%"> Node.js')}} </div>
            </div>
          </div>
        </div>
        <center><a href="linhaTempo.html" class="btn btn-bordo btn-xlg btn-raised animated flipInX animation-delay-16"><i class="zmdi zmdi-plus"></i>Ver mais</a></center>
      </div>
    </section>
    <section id="team">
      <div class="container pt-6">
        <h1 class="color-bordo text-center wow fadeInUp animation-delay-2">Our Team</h1>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-4 card-danger wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-danger ms-hero-img-city">
                <img src="{{asset('/img/demo/avatar1.jpg')}}" alt="..." class="img-avatar-circle">
              </div>
              <div class="card-body pt-6 text-center">
                <h3 class="color-danger">Victoria Smith</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates
                  officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
                    class="zmdi zmdi-facebook"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i
                    class="zmdi zmdi-twitter"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
                    class="zmdi zmdi-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-4 card-info wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-info ms-hero-img-city">
                <img src="{{asset('/img/demo/avatar2.jpg')}}" alt="..." class="img-avatar-circle">
              </div>
              <div class="card-body pt-6 text-center">
                <h3 class="color-info">Charlie Durant</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates
                  officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
                    class="zmdi zmdi-facebook"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i
                    class="zmdi zmdi-twitter"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
                    class="zmdi zmdi-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-4 card-warning wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-warning ms-hero-img-city">
                <img src="{{asset('/img/demo/avatar3.jpg')}}" alt="..." class="img-avatar-circle">
              </div>
              <div class="card-body pt-6 text-center">
                <h3 class="color-warning">Joan Fawert</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates
                  officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
                    class="zmdi zmdi-facebook"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i
                    class="zmdi zmdi-twitter"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
                    class="zmdi zmdi-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-4 card-royal wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-royal ms-hero-img-city">
                <img src="{{asset('/img/demo/avatar4.jpg')}}" alt="..." class="img-avatar-circle">
              </div>
              <div class="card-body pt-6 text-center">
                <h3 class="color-royal">Sophie Marks</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates
                  officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
                    class="zmdi zmdi-facebook"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i
                    class="zmdi zmdi-twitter"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
                    class="zmdi zmdi-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-4 card-success wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-success ms-hero-img-city">
                <img src="{{asset('/img/demo/avatar5.jpg')}}" alt="..." class="img-avatar-circle">
              </div>
              <div class="card-body pt-6 text-center">
                <h3 class="color-success">Cris Polner</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates
                  officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
                    class="zmdi zmdi-facebook"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i
                    class="zmdi zmdi-twitter"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
                    class="zmdi zmdi-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-4 card-primary wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-city">
                <img src="{{asset('/img/demo/avatar6.jpg')}}" alt="..." class="img-avatar-circle">
              </div>
              <div class="card-body pt-6 text-center">
                <h3 class="color-primary">Julia Robert</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates
                  officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
                    class="zmdi zmdi-facebook"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i
                    class="zmdi zmdi-twitter"></i></a>
                <a href="javascript:void(0)"
                  class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
                    class="zmdi zmdi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="mt-6">
      <div class="wrap ms-hero-bg-warning ms-hero-img-team ms-bg-fixed">
        <div class="container">
          <h1 class="text-center color-white mb-4 wow fadeInUp animation-delay-2">Contato</h1>
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-bordo animated zoomInUp animation-delay-5">
                <div class="card-body">
                  <form class="form-horizontal">
                    <fieldset class="container">
                      <div class="form-group row">
                        <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-9">
                          <input type="text" class="form-control" id="inputName" placeholder="Nome">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-9">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Assunto</label>
                        <div class="col-lg-9">
                          <input type="text" class="form-control" id="inputSubject" placeholder="Assunto">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="textArea" class="col-lg-2 control-label">Mensagem</label>
                        <div class="col-lg-9">
                          <textarea class="form-control" rows="3" id="textArea"
                            placeholder="Sua mensagem..."></textarea>
                        </div>
                      </div>
                      <div class="form-group row justify-content-end">
                        <div class="col-lg-10">
                          <button type="submit" class="btn btn-raised btn-primary">Enviar</button>
                          <button type="button" class="btn btn-danger-bordo">Cancelar</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- container -->
      </div>
      <iframe width="100%" height="340"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48342.06480344582!2d-73.980069429762!3d40.775680208459505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral+Park!5e0!3m2!1sen!2sus!4v1491233314840"></iframe>
    </section>
    <footer class="ms-footer">
      <div class="container">
        <p>Copyright &copy; xxy</p>
      </div>
    </footer>
    <div class="btn-back-top">
      <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i
          class="zmdi zmdi-long-arrow-up"></i></a>
    </div>
  </div>
  </div> <!-- ms-site-container -->
  <div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay">
    <header class="ms-slidebar-header">
      <div class="ms-slidebar-login">
        <a href="javascript:void(0)" class="withripple"><i class="zmdi zmdi-account"></i> Login</a>
        <a href="javascript:void(0)" class="withripple"><i class="zmdi zmdi-account-add"></i> Registrar</a>
      </div>
      <div class="ms-slidebar-title">
        <form class="search-form">
          <input id="search-box-slidebar" type="text" class="search-input" placeholder="Procurar..." name="q" />
          <label for="search-box-slidebar"><i class="zmdi zmdi-search"></i></label>
        </form>
        <div class="ms-slidebar-t">
          <span class="ms-logo ms-logo-sm">M</span>
          <h3>Centro<span>Acadêmico</span></h3>
        </div>
      </div>
    </header>
    <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
      <li><a data-scroll class="link" href="#home"><i class="zmdi zmdi-home"></i> Home</a></li>
      <li><a data-scroll class="link" href="#services"><i class="zmdi zmdi-flight-takeoff"></i> Serviços</a></li>
      <li><a data-scroll class="link" href="#portfolio"><i class="zmdi zmdi-desktop-mac"></i> Portfolio</a></li>
      <!-- <li><a data-scroll class="link" href="#pricing"><i class="zmdi zmdi-money-box"></i> Pricing</a></li> -->
      <li><a data-scroll class="link" href="#about"><i class="zmdi zmdi-info-outline"></i> Sobre Nós</a></li>
      <li><a data-scroll class="link" href="#team"><i class="zmdi zmdi-accounts"></i> Equipe</a></li>
      <li><a data-scroll class="link" href="#contact"><i class="zmdi zmdi-email"></i> Contato</a></li>
      <!-- <li><a data-scroll class="link" href="index.html"><i class="zmdi zmdi-swap"></i> Main Site</a></li> -->
    </ul>
    <div class="ms-slidebar-social ms-slidebar-block">
      <h4 class="ms-slidebar-block-title">Social Links</h4>
      <div class="ms-slidebar-social">
        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-facebook"><i
            class="zmdi zmdi-facebook"></i> <span class="badge-pill badge-pill-pink">12</span></a>
        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-twitter"><i
            class="zmdi zmdi-twitter"></i> <span class="badge-pill badge-pill-pink">4</span></a>
        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-youtube"><i
            class="zmdi zmdi-youtube"></i></a>
        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-instagram"><i
            class="zmdi zmdi-instagram"></i></a>
      </div>
    </div>
  </div>
  <script src="{{asset('/js/plugins.min.js')}}"></script>
  <script src="{{asset('/js/app.min.js')}}"></script>
  <script src="{{asset('/js/lead.js')}}"></script>
</body>

</html>