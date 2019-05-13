<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Engenharias Vassouras</title>
    <meta name="description" content="Engenharia de Vassouras">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png?v=3') }}">

    <link rel="stylesheet" href="{{ asset('css/preload.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.bordo.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
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
        <nav class="navbar navbar-expand-md navbar-fixed  ms-navbar ms-navbar-white
  ms-lead-navbar-white navbar-mode navbar-mode mb-0
    ">
            <div class="container container-full">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                        <span class="ms-logo ms-logo-inverse">EV</span>
                        <span class="ms-title">Engenharias <strong>Vassouras</strong></span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="ms-navbar">
                    <ul class="navbar-nav">
                        <!-- Home -->
                        <li class="nav-item dropdown dropdown-megamenu-container"><a data-scroll class="link"
                                href="#home"> Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-megamenu-container"><a data-scroll class="link"
                                href="#services">
                                Serviços</a></li>
                        <!-- Fotos -->
                        <li class="nav-item dropdown dropdown-megamenu-container"><a data-scroll class="link"
                                href="#portfolio">
                                Fotos</a></li>
                        <!-- Coordenadores -->
                        <li class="nav-item dropdown dropdown-megamenu-container"><a data-scroll class="link"
                                href="#team">
                                Coordenadores</a></li>
                        <!-- Engenharias -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-8"
                                data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false" data-name="portfolio">Engenharias <i
                                    class="zmdi zmdi-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" class="dropdown-item"
                                        href="https://universidadedevassouras.edu.br/graduacao/engenhariasoftware"><i
                                            class="fas fa-laptop-code"></i> Engenharia de Software</a></li>
                                <li><a target="_blank" class="dropdown-item"
                                        href="https://universidadedevassouras.edu.br/graduacao/engenhariacivil"><i
                                            class="fas fa-building"></i>Engenharia Civil</a></li>
                                <li><a target="_blank" class="dropdown-item"
                                        href="https://universidadedevassouras.edu.br/graduacao/engenhariaproducao"><i
                                            class="fas fa-industry"></i>Engenharia de Produção</a></li>
                                <li><a target="_blank" class="dropdown-item"
                                        href="https://universidadedevassouras.edu.br/graduacao/engenhariaquimica"><i
                                            class="fa fa-flask"></i> Engenharia Química</a></li>
                                <li><a target="_blank" class="dropdown-item"
                                        href="https://universidadedevassouras.edu.br/graduacao/engenhariaeletrica"><i
                                            class="fas fa-lightbulb"></i>Engenharia Elétrica</a></li>
                            </ul>
                        </li>
                        <!-- Contato -->
                        <li class="nav-item dropdown dropdown-megamenu-container"><a data-scroll class="link"
                                href="#contact">
                                Contato</a></li>
                    </ul>
                </div>
                <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="zmdi zmdi-menu"></i></a>
            </div> <!-- container -->
        </nav>
        <div class="intro-fixed ms-hero-img-keyboard ms-hero-bg-bordo color-white" id="home">
            <div class="intro-fixed-content index-1">
                <div class="container">
                    <div class="text-center mb-4">
                        <span
                            class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">EV</span>
                        <h1
                            class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                            Engenharias <span>Vassouras</span></h1>
                        <p
                            class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">
                            Esta pagina foi criada com o intuito, de mostrar um pouco mais das <span
                                class="color-warning">nossas engenharias</span> para você discente ou ingresso dos
                            cursos de engenharia.
                        </p>
                    </div>
                    <div class="text-center mb-2">
                        <a id="go-intro-fixed-next" href="javascript:void(0)"
                            class="btn-circle btn-circle-raised btn-circle-white animated zoomInUp animation-delay-12"><i
                                class="zmdi zmdi-long-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-back-top">
            <a href="#" data-scroll id="back-top"
                class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i
                    class="zmdi zmdi-long-arrow-up"></i></a>
        </div>
        <div class="bg-light index-1 intro-fixed-next pt-6" id="intro-next">
            <div class="container mt-4">
                <h2 class="text-center color-bordo mb-2 wow fadeInDown animation-delay-4">Aqui você pode escolher
                    algumas sub-paginas</h2>
                <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4"> No centro
                    Academico, você pode conhecer um pouco de nosso CA, Na Atletica a nossa parte esportiva, Na
                    Assembléia Geral um pouco das noticias de Reuniões e etc.
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-bordo">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="zmdi zmdi-graduation-cap"></i> Centro Acadêmico
                                    </h3>
                                </div>
                                <div class="withripple zoom-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{asset('images/logos/caeng-2.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="card-body overflow-hidden text-center">
                                    <a href="centroacademico/index.html" class="btn btn-bordo btn-raised"><i
                                            class="zmdi  zmdi-play-for-work"></i> Entrar<div class="ripple-container">
                                        </div></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-bordo">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="zmdi  zmdi-directions-run"></i> Atlética</h3>
                                </div>
                                <div class="withripple zoom-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{asset('images/logos/aauev-2.jpeg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="card-body overflow-hidden text-center">
                                    <a href="{{route('atletica.home')}}" class="btn btn-bordo btn-raised"><i
                                            class="zmdi  zmdi-play-for-work"></i> Entrar<div class="ripple-container">
                                        </div></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-bordo">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="zmdi  zmdi-balance"></i> Assembléia Geral</h3>
                                </div>
                                <div class="withripple zoom-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{asset('images/demo/m1.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="card-body overflow-hidden text-center">
                                    <a href="javascript:void(0)" class="btn btn-bordo btn-raised"><i
                                            class="zmdi  zmdi-play-for-work"></i> Entrar<div class="ripple-container">
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- container -->
            <section id="services" class="mt-6">
                <div class="wrap ms-hero-img-meeting ms-hero-bg-info color-white ms-bg-fixed">
                    <div class="container">
                        <div class="text-center mb-4">
                            <h1 class="wow zoomInDown"><b>Serviços</b></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="wow fadeInUp animation-delay-2"><strong>Nossas engenharias!</strong></h3>
                                <p class="wow fadeInUp animation-delay-3">
                                    É com imenso prazer que disponibilizamos este canal de relacionamento com você
                                    ingresso ou discente dos cursos de engenharia ao lado você pode encontrar uma breve
                                    descriçao Sobre
                                    cada curso e sua respectivas notas na classificaçao do MEC atualmente nossa
                                    institução e uma das melhores em
                                    toda a região sul fluminense.</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="ms-collapse" id="accordion2" role="tablist" aria-multiselectable="true">
                                    <div class="mb-0 card card-info wow fadeInUp animation-delay-2">
                                        <div class="card-header" role="tab" id="headingOne2">
                                            <h4 class="card-title">
                                                <a class="withripple" role="button" data-toggle="collapse"
                                                    href="#collapseOne2" aria-expanded="true"
                                                    aria-controls="collapseOne2">
                                                    <i class="fa fa-lightbulb-o"></i> Engenharia Elétrica </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne2" class="card-collapse collapse show" role="tabpanel"
                                            aria-labelledby="headingOne2" data-parent="#accordion2">
                                            <div class="card-body color-dark">
                                                <p>O objetivo do Curso é formar engenheiros eletricistas capacitados a
                                                    atender às diferentes solicitações profissionais pertinentes, com
                                                    uma visão crítica, criativa e inovadora, através de uma sólida
                                                    formação básica, geral e humanística, associada à formação
                                                    profissional específica, moderna e abrangente. Logo, o profissional
                                                    egresso atenderá às necessidades do mercado de trabalho,
                                                    compreendendo os seus problemas e identificando a metodologia mais
                                                    adequada para a sua solução, levando sempre em conta as questões
                                                    ambientais. Desta forma, o perfil do Curso, bem como o do
                                                    profissional egresso, estão diretamente ligados às necessidades
                                                    atualmente exigidas pelo mercado de trabalho.</p>
                                                <p>Nosso curso possui Nota 5 MEC 2018 numa escala de (1 a 5) um curso de
                                                    excelência em nossa região. </p>
                                            </div>
                                        </div>
                                        <div class="mb-0 card card-info wow fadeInUp animation-delay-5">
                                            <div class="card-header" role="tab" id="headingTwo2">
                                                <h4 class="card-title">
                                                    <a class="collapsed withripple" role="button" data-toggle="collapse"
                                                        href="#collapseTwo2" aria-expanded="false"
                                                        aria-controls="collapseTwo2">
                                                        <i class="fas fa-laptop-code"></i>Engenharia de Software</a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo2" class="card-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo2" data-parent="#accordion2">
                                                <div class="card-body color-dark">
                                                    <p>A Engenharia de Software é uma grande área da computação voltada,
                                                        mais precisamente, para o âmbito do desenvolvimento,
                                                        gerenciamento e manutenção de software. Para isso, o Curso de
                                                        Engenharia de Software da Universidade de Vassouras forma
                                                        engenheiros de software aptos a atuar em todos os processos que
                                                        envolvem a criação de software. Além disso, o profissional
                                                        também trabalha na criação de aplicativos, jogos e outros tipos
                                                        de ferramentas computacionais. O foco do curso está na formação
                                                        de profissionais inovadores e aptos para empreender criando
                                                        novos modelos de negócios que demandem o uso de software, tais
                                                        como aplicativos móveis, sejam eles na plataforma Android, IOS
                                                        ou híbridos, sites dinâmicos, entre outros. Para isso, conta uma
                                                        formação ampla e com foco em gestão, de maneira
                                                        que gere oportunidades para o futuro profissional empreender
                                                        criando o seu próprio negócio.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 card card-info wow fadeInUp animation-delay-7">
                                            <div class="card-header" role="tab" id="headingTwo2">
                                                <h4 class="card-title">
                                                    <a class="collapsed withripple" role="button" data-toggle="collapse"
                                                        href="#collapseThree2" aria-expanded="false"
                                                        aria-controls="collapseThree2">
                                                        <i class="fa fa-industry"></i> Engenharia de Produção </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree2" class="card-collapse collapse" role="collapse"
                                                aria-labelledby="headingThree2" data-parent="#accordion2">
                                                <div class="card-body color-dark">
                                                    <p>O engenheiro de produção é peça fundamental em indústrias e
                                                        empresas de quase todos os setores. Este profissional gerencia
                                                        os recursos humanos, financeiros e materiais de uma empresa, com
                                                        o objetivo de aumentar sua produtividade e rentabilidade. Por
                                                        apresentar matriz multidisciplinar, com foco em gestão e na
                                                        sólida formação em disciplinas como Física e Matemática - estas
                                                        últimas com o objetivo de levar ao raciocínio rápido e a
                                                        respostas e dinâmicas - há destaques em nosso curso para áreas
                                                        como Gestão de Pessoas, Tecnologia de Informação e Inovação
                                                        Tecnológica, Qualidade, Marketing, Econômica e Finanças,
                                                        Logística, Organizacional, Pesquisa Operacional, Engenharia de
                                                        Métodos, Planejamento e Controle da Produção, Desenvolvimentos
                                                        de Novos Produtos, Arranjos Físicos de Fábricas,
                                                        Empreendedorismo, Administração Estratégica, Processos de
                                                        Fabricação, entre outras.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 card card-info wow fadeInUp animation-delay-7">
                                            <div class="card-header" role="tab" id="headingFour2">
                                                <h4 class="card-title">
                                                    <a class="collapsed withripple" role="button" data-toggle="collapse"
                                                        href="#collapseFour2" aria-expanded="false"
                                                        aria-controls="collapseFour2">
                                                        <i class="fa fa-flask"></i>Engenharia Química</a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour2" class="card-collapse collapse" role="collapse">
                                                <div class="card-body color-dark">
                                                    <p>O curso de Engenharia Química da Universidade de Vassouras tem
                                                        por
                                                        objetivo formar o profissional com conhecimentos necessários
                                                        para o
                                                        exercício amplo e completo de sua profissão, fornecendo
                                                        condições
                                                        para que os mesmos possam adquirir competências e habilidades
                                                        gerais. A matriz curricular ora proposta forma profissionais
                                                        aptos a
                                                        atuar no desenvolvimento de processos, mediante operações
                                                        unitárias,
                                                        para a produção de diversos produtos em escala industrial.
                                                        Projetar,
                                                        supervisionar, elaborar e coordenar processos industriais;
                                                        identificar, formular e resolver problemas de engenharia
                                                        relacionados à indústria química; supervisionar a manutenção e
                                                        operação de sistemas. Desenvolver tecnologias limpas, processos
                                                        de
                                                        reciclagem e de aproveitamento dos resíduos da indústria química
                                                        que
                                                        contribuirão para a redução do impacto ambiental. Coordenar e
                                                        supervisionar equipes de trabalho, realizar estudos de
                                                        viabilidade
                                                        técnico-econômica, executar e fiscalizar obras e serviços
                                                        técnicos e
                                                        efetuar vistorias, perícias e avaliações, emitindo laudos e
                                                        pareceres técnicos.</p>
                                                </div>
                                            </div>

                                            <div class="mb-0 card card-info wow fadeInUp animation-delay-7">
                                                <div class="card-header" role="tab" id="headingFive2">
                                                    <h4 class="card-title">
                                                        <a class="collapsed withripple" role="button"
                                                            data-toggle="collapse" href="#collapseFive2"
                                                            aria-expanded="false" aria-controls="collapseFive2">
                                                            <i class="fa fa-building"></i>Engenharia Civil</a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive2" class="card-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingFive2" data-parent="#accordion2">
                                                    <div id="collapseFive2" class="card-collapse collapse"
                                                        role="collapse">
                                                        <div class="card-body color-dark">
                                                            <p>O curso de Engenharia Civil da Universidade de Vassouras
                                                                é nota 4
                                                                no
                                                                MEC (escala de 1 a 5).

                                                                O Curso de Engenharia Civil da Universidade de Vassouras
                                                                tem
                                                                como
                                                                objetivo dotar o discente de visão sistêmica e
                                                                analítica, a fim
                                                                de
                                                                torná-lo profissional capacitado para analisar e
                                                                maximizar
                                                                sistemas
                                                                e processos novos ou existentes com qualidade, segurança
                                                                e
                                                                respeito
                                                                ao ambiente e à sociedade, mediante uso efetivo de
                                                                recursos
                                                                financeiros, humanos e tecnológicos e pelo emprego das
                                                                melhores
                                                                técnicas, ferramentas e conhecimento tácito para que
                                                                haja a
                                                                maximização da rentabilidade dos investimentos e do
                                                                crescimento
                                                                sustentável das organizações nos diversos setores da
                                                                produção.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--   <div class="mt-6 color-dark">
                                                <h2 class="color-white text-center mb-4 wow fadeInUp animation-delay-2">
                                                    Some
                                                    numerical
                                                    data
                                                </h2>
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
                                         -         </div>
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
                                                    <p class="lead lead-lg wow fadeInUp animation-delay-2">Discover our
                                                        projects and
                                                        the
                                                        rigorous process of
                                                        creation. Our principles are creativity, design, experience and
                                                        knowledge.
                                                        We
                                                        are
                                                        backed by 20 years
                                                        of research.</p>
                                          --> <a href="javascript:void(0)"
                                        class="btn btn-raised btn-xlg btn-white color-bordo wow flipInX animation-delay-5"><i></i>
                                        Tenho um
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
                            <h1 class="wow fadeInUp animation-delay-2">Últimos trabalhos</h1>
                            <p class="lead color-medium wow fadeInUp animation-delay-2">Discover our projects and the
                                rigorous process
                                of creation. Our principles are creativity, design, experience and <span
                                    class="color-white">knowledge</span>. We are backed by 20 years of research.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="ms-thumbnail-container wow fadeInUp">
                                    <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                                        <img src="{{asset('images/demo/port9.jpg')}}" alt="" class="img-fluid">
                                        <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i
                                                        class="zmdi zmdi-eye"></i>
                                                    View more</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="ms-thumbnail-container wow fadeInUp">
                                    <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                                        <img src="{{asset('images/demo/port11.jpg')}}" alt="" class="img-fluid">
                                        <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i
                                                        class="zmdi zmdi-eye"></i>
                                                    View more</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="ms-thumbnail-container wow fadeInUp">
                                    <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                                        <img src="{{asset('images/demo/port23.jpg')}}" alt="" class="img-fluid">
                                        <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i
                                                        class="zmdi zmdi-eye"></i>
                                                    View more</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="ms-thumbnail-container wow fadeInUp">
                                    <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                                        <img src="{{asset('images/demo/port7.jpg')}}" alt="" class="img-fluid">
                                        <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i
                                                        class="zmdi zmdi-eye"></i>
                                                    View more</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="ms-thumbnail-container wow fadeInUp">
                                    <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                                        <img src="{{asset('images/demo/port4.jpg')}}" alt="" class="img-fluid">
                                        <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i
                                                        class="zmdi zmdi-eye"></i>
                                                    View more</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="ms-thumbnail-container wow fadeInUp">
                                    <figure class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                                        <img src="{{asset('images/demo/port2.jpg')}}" alt="" class="img-fluid">
                                        <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="javascript:void(0)" class="btn btn-raised btn-danger"><i
                                                        class="zmdi zmdi-eye"></i>
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

            <section id="team">
                <div class="container pt-6">
                    <h1 class="color-bordo text-center wow fadeInUp animation-delay-2">Nosso Time!</h1>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card mt-4 card-danger wow zoomInUp animation-delay-7">
                                <div class="ms-hero-bg-warning ms-hero-img-city">
                                    <img src="{{asset('images/demo/Enilson-Civil.png')}}" alt="..."
                                        class="img-avatar-circle">
                                </div>
                                <div class="card-body pt-6 text-center">
                                    <h3 class="color-warning">Enilson Salino Braga</h3>
                                    <p>Possuo Mestrado em Ciências Ambientais pela Universidade de Vassouras(2014),
                                        Especialização em Gestão de Negócios pela PUC - MG/ Fundação Dom Cabral (2007),
                                        Graduação em Engenharia Civil (1994) e Pós Graduação em Segurança do Trabalho
                                        (1996) pela Fundação Educacional Rosemar Pimentel. Atualmente Coordenador do
                                        Curso de Engenharia Civil e Professor da Universidade de Vassouras no curso de
                                        Pós Graduação em Engenharia de Segurança do Trabalho, Graduação em Engenharia
                                        Civil e Engenharia Ambiental e, também nos cursos Técnicos de Edificações,
                                        Eletrotécnica e Segurança do Trabalho, onde também atuo como Coordenador dos
                                        Cursos Técnicos de Edificações e Segurança do Trabalho.<a
                                            href=" http://lattes.cnpq.br/8791565047879602">Veja Mais</a>
                                    </p>
                                    <a href="https://www.facebook.com/enilson.braga"
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
                                <div class="ms-hero-bg-warning ms-hero-img-city">
                                    <img src="{{asset('images/demo/Avatar2.jpg')}}" alt="..." class="img-avatar-circle">
                                </div>
                                <div class="card-body pt-6 text-center">
                                    <h3 class="color-info">Anrafel Fernandes Pereira</h3>
                                    <p>Mestre em Ciência da Computação pela Universidade Federal de Juiz de Fora, MBA
                                        Executivo em Gerenciamento de Projetos, pós-graduado em Engenharia de Sistemas,
                                        graduado em Sistemas de Informação. Cursando especialização em Pedagogia Digital
                                        e Inovações Tecnológicas. Atualmente é Coordenador do Curso de Graduação em
                                        Engenharia de Software e Professor na Universidade de Vassouras, nos cursos de
                                        Engenharia de Software, Engenharia de Computação, Engenharia de Produção,
                                        Engenharia Elétrica e Administração e no Centro Universitário Redentor
                                        (UniRedentor), atuando nos cursos de Engenharia Civil, Engenharia Mecânica e
                                        Engenharia de Produção.
                                        <a href=" http://lattes.cnpq.br/6711819845096632">Veja Mais</a></p>
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
                                    <img src="{{asset('images/demo/Avatar3.jpg')}}" alt="..." class="img-avatar-circle">
                                </div>
                                <div class="card-body pt-6 text-center">
                                    <h3 class="color-warning">Adaurir Junior</h3>
                                    <p>Atua desde 2010 como professor universitário no ensino superior (experiência de
                                        09 anos) ministrando as disciplinas de Desenho Técnico (com utilização de
                                        softwares o AutoCAD® e Solid Works®), Fenômenos de Transporte, Hidráulica,
                                        Projeto de Fábrica e Instalações Industriais, Mecânica Básica, Introdução a
                                        Engenharia de Produção, Resistência dos Materiais, Física Mecânica e Engenharia
                                        de Processos e Produtos, Engenharia de Pessoas no Trabalho, Gestão e Inovação
                                        Tecnológica. Atuou como coordenador do Curso de Engenharia de Produção na
                                        Universidade de Vassouras, curso avaliado pelo MEC como Nota 4 (em escala 1 à 5)
                                        obteve (experiência de 03 anos na função no período de NOV-2015 à JAN-2019).
                                        <a href="http://lattes.cnpq.br/2829715941269034">Veja Mais</a>
                                    </p>
                                    <a href="https://www.facebook.com/adauri.junior"
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
                                    <img src="{{asset('images/demo/Avatar4.jpg')}}" alt="..." class="img-avatar-circle">
                                </div>
                                <div class="card-body pt-6 text-center">
                                    <h3 class="color-royal">José Leandro Casanova</h3>
                                    <p>O currículo do Professor José Leandro, indica Graduação em Engenharia Elétrica
                                        pela Universidade de Vassouras (2002), mestrado (2007) e doutorado (2010) em
                                        Engenharia Mecânica com ênfase em Transmissão e Conversão de Energia pela
                                        Universidade Estadual Paulista, localizada em Guaratinguetá (São Paulo) - UNESP,
                                        Júlio de Mesquita Filho.

                                        Na docência de Ensino Superior atua como Professor Adjunto III da Universidade
                                        de Vassouras principalmente no curso de graduação de Engenharia Elétrica desde
                                        2007, lecionando diversas disciplinas: Transmissão de Energia, Análise de
                                        Defeitos em Sistemas de Elétricos Potencia, Geração de Energia, Instalações
                                        Elétricas, Máquinas Elétricas, Laboratório de Máquinas Elétricas, Laboratório de
                                        Acionamentos Elétricos e Circuitos Polifásicos. Entre 2007 e 2011, lecionou
                                        outras disciplinas para o curso de Engenharia Ambiental – Energia e Meio
                                        Ambiente. Tem também atuação como Coordenador de projeto de pesquisa na
                                        Universidade de Vassouras desde meados de abril do ano de 2011 e líder do grupo
                                        de pesquisa “Qualidade e Conservação de Energia” com projeto titulado de
                                        “Gerador Síncrono com Ímãs Permanentes no Rotor: uma Abordagem Constitutiva e
                                        sob o Aspecto da Qualidade de Energia Gerada</p>
                                    <a href="https://www.facebook.com/leandro.casanova.96558"
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
                                <div class="ms-hero-bg-warning ms-hero-img-city">
                                    <img src="{{asset('images/demo/Avatar22.jpg')}}" alt="..."
                                        class="img-avatar-circle">
                                </div>
                                <div class="card-body pt-6 text-center">
                                    <h3 class="color-success">Miguel Rascado Fraguas Neto</h3>
                                    <p>Possui graduação em Engenharia Química pela Universidade Federal Rural do Rio de
                                        Janeiro (1993) e mestrado em Química pela Universidade Federal Rural do Rio de
                                        Janeiro (1997). Atualmente é professor titular da Universidade de Vassouras e
                                        coordena os cursos de Engenharia Química e Engenharia Ambiental. Atuou como
                                        Pró-Reitor de Ciências Tecnológicas, Sociais Aplicadas e Humanas da Universidade
                                        de Vassouras. Tem experiência na área de Química, com ênfase em síntese
                                        orgânica, atuando principalmente nos seguintes temas: segurança em química,
                                        descritores moleculares, acronicina, modelagem molecular e fitoquímica. Atua nas
                                        linhas de pesquisa sobre biocombustível, química verde, resíduos
                                        agroindustriais, meio ambiente e simulação de processos.<a href=" http://lattes.cnpq.br/9222953104245071">Veja Mais</a></p>
                                    <a href="https://www.facebook.com/engenharia.quimica.37604"
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
                                                    <label for="inputEmail" autocomplete="false"
                                                        class="col-lg-2 control-label">Nome</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="inputName"
                                                            placeholder="Nome">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail" autocomplete="false"
                                                        class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-9">
                                                        <input type="email" class="form-control" id="inputEmail"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail" autocomplete="false"
                                                        class="col-lg-2 control-label">Assunto</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="inputSubject"
                                                            placeholder="Assunto">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="textArea"
                                                        class="col-lg-2 control-label">Mensagem</label>
                                                    <div class="col-lg-9">
                                                        <textarea class="form-control" rows="3" id="textArea"
                                                            placeholder="Sua mensagem..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row justify-content-end">
                                                    <div class="col-lg-10">
                                                        <button type="submit"
                                                            class="btn btn-raised btn-primary">Enviar</button>
                                                        <button type="button"
                                                            class="btn btn-danger-bordo">Cancelar</button>
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
            </section>
            <footer class="ms-footer">
                <div class="container">
                    <p>E-POINT &copy; Desenvolvido em 2019</p>
                </div>
            </footer>
            <div class="btn-back-top">
                <a href="#" data-scroll id="back-top"
                    class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i
                        class="zmdi zmdi-long-arrow-up"></i></a>
            </div>
        </div>
    </div> <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay">
        <header class="ms-slidebar-header">
            <div class="ms-slidebar-login">
                <!--
        <a href="javascript:void(0)" class="withripple"><i class="zmdi zmdi-account"></i> Login</a>
        <a href="javascript:void(0)" class="withripple"><i class="zmdi zmdi-account-add"></i> Registrar</a> -->
            </div>
            <div class="ms-slidebar-title">
                <form class="search-form">
                    <input id="search-box-slidebar" type="text" class="search-input" placeholder="Procurar..."
                        name="q" />
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
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lead.js') }}"></script>

</body>

</html>
