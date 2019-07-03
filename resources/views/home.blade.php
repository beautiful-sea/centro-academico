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
                    <img src="{{ asset('images/logos/logovassouras.png') }}" width="40px">
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
                        aria-expanded="false" data-name="portfolio">
                        Engenharias 
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a target="_blank" class="dropdown-item"
                            href="https://universidadedevassouras.edu.br/graduacao/engenharia-de-software"><i
                            class="fas fa-laptop-code"></i> Engenharia de Software</a>
                        </li>
                        <li>
                            <a target="_blank" class="dropdown-item"
                            href="https://universidadedevassouras.edu.br/graduacao/engenharia-civil"><i
                            class="fas fa-building"></i>Engenharia Civil</a>
                        </li>
                        <li>
                            <a target="_blank" class="dropdown-item"
                            href="https://universidadedevassouras.edu.br/graduacao/engenharia-de-producao"><i
                            class="fas fa-industry"></i>Engenharia de Produção</a>
                        </li>
                        <li>
                            <a target="_blank" class="dropdown-item"
                            href="https://universidadedevassouras.edu.br/graduacao/engenharia-quimica"><i
                            class="fa fa-flask"></i> Engenharia Química</a>
                        </li>
                        <li>
                            <a target="_blank" class="dropdown-item"
                            href="https://universidadedevassouras.edu.br/graduacao/engenharia-eletrica"><i
                            class="fas fa-lightbulb"></i>Engenharia Elétrica</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> <!-- container -->
</nav>

<div class="intro-fixed ms-hero-img-keyboard ms-hero-bg-bordo color-white" style="height: 1000px!important;position: relative" id="home">
    <div class="intro-fixed-content index-1">
        <div class="container">
            <div class="text-center mb-4">
                <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">EV</span>
                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                    Engenharias <span>Vassouras</span>
                </h1>
                <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-600 animated fadeInUp animation-delay-7">
                    Bem vindo, discente ou ingressante dos
                    cursos de engenharia! Conheça um pouco mais das engenharias da
                    <span class="color-warning">
                        <a class="color-warning" href="https://universidadedevassouras.edu.br/" target="_blank"> universidade de vassouras</a>
                    </span> e aproveite para conhecer também nosso Centro acadêmico e nossa atlética.
                </p>
            </div>
            <div class="text-center mb-2">
                <a id="go-intro-fixed-next"  href="#intro-next" data-scroll class=" animated fadeIn animation-delay-8 btn-circle btn-circle-raised btn-circle-white animated zoomInUp animation-delay-12">
                    <i  class="zmdi zmdi-long-arrow-down"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="bg-light index-1 intro-fixed-next pt-6" id="intro-next">
    <div class="container mt-4">
        <h2 class="text-center color-bordo mb-2 wow fadeInDown animation-delay-4">Navegue pelos nossos sites e conheça mais sobre nós!</h2>
        <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4"> No centro
            Acadêmico, você pode conhecer um pouco sobre nossos representantes, na Atlética a nossa parte esportiva e eventos.
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <div class="card card-bordo">
                        <div class="card-header">
                            <h3 class="card-title"><i class="zmdi zmdi-graduation-cap"></i> Centro Acadêmico
                            </h3>
                        </div>
                        <div class="withripple zoom-img" style="height: 200px;margin: 0 auto">
                            <a href="javascript:void(0)">
                                <img width="100%" src="{{asset('images/logos/caeng-2.jpg')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body overflow-hidden text-center" >
                            <a href="{{route('ca.home')}}" class="btn btn-bordo btn-raised"><i
                                class="zmdi  zmdi-play-for-work"></i> Entrar<div class="ripple-container">
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-bordo">
                            <div class="card-header">
                                <h3 class="card-title"><i class="zmdi  zmdi-directions-run"></i> Atlética</h3>
                            </div>
                            <div class="withripple zoom-img" style="height: 200px; margin: 0 auto">
                                <a href="javascript:void(0);">
                                    <img  src="{{asset('images/logos/institucional.png')}}" height="200px" alt="" class="">
                                </a>
                            </div>
                            <div class="card-body overflow-hidden text-center">
                                <a href="{{route('atletica.home')}}" class="btn btn-bordo btn-raised"><i
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
                                <h1 class="wow zoomInDown"><b>Conheça mais</b></h1>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="wow fadeInUp animation-delay-2"><strong>Nossas engenharias!</strong></h3>
                                    <p class="wow fadeInUp animation-delay-3">
                                        É com imenso prazer que disponibilizamos este canal de relacionamento com você
                                        ingressante ou discente dos cursos de engenharia. Ao lado você pode encontrar uma breve descrição sobre cada curso e sua respectivas notas na classificação do MEC. Atualmente nossa
                                        institução é uma das melhores em
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
                                            <div id="collapseOne2" class="card-collapse collapse" role="tabpanel"
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
                </div>
            </div>
        </section>
        <section id="portfolio" class="">
            <div class="wrap ms-hero-bg-dark ms-hero-img-keyboard ms-bg-fixed">
                <div class="container index-1">
                    <div class="text-center color-white mb-4 mw-800 center-block">
                        <h1 class="wow fadeInUp animation-delay-2">Últimas Fotos</h1>
                    </div>
                    <div class="row">
                        @foreach($LastPhotosEng as $l)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="ms-thumbnail-container wow fadeInUp">
                                <figure style="height: 200px" class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
                                    <img src="/files/last_photos_eng/{{$l->id}}.{{$l->extension_img}}" alt=""   style="height: 100%"  height='100%' class="img-fluid">
                                    <figcaption  class="ms-thumbnail-caption text-center">
                                        <div class="ms-thumbnail-caption-content" >
                                            <h3 class="ms-thumbnail-caption-title">{{$l->name}}</h3>
                                            <p>{{Str::limit($l->description,160,'...')}}</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="team">
            <div class="container pt-6">
                <h1 class="color-bordo text-center wow fadeInUp animation-delay-2">Nosso Time!</h1>
                <div class="row">

                    @foreach($team_eng as $t)
                    <div class="col-lg-4 col-sm-6">
                        <div class="card mt-4 card-danger wow zoomInUp animation-delay-7">
                            <div class="ms-hero-bg-warning ms-hero-img-city">
                                <img src="/files/team_eng/{{$t->id}}.{{$t->extension_img}}" alt="..."
                                class="img-avatar-circle">
                            </div>
                            <div class="card-body pt-6 text-center">
                                <h3 class="color-warning">{{$t->name}}</h3>
                                <p>{{$t->description}}
                                    <br>
                                    @if($t->lattes)<a href="{{$t->lattes}}" target="_blank">Veja Mais</a>@endif
                                </p>
                                @if($t->linkedin)<a href="{{$t->linkedin}}" target="_blank"
                                    class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
                                    class="zmdi zmdi-linkedin"></i></a>@endif
                                    @if($t->instagram)<a href="{{$t->instagram}}" target="_blank"
                                        class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
                                        class="zmdi zmdi-instagram"></i></a>@endif
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>
                <footer class="ms-footer">
                    <div class="container">
                        <p>E-Point &copy; Desenvolvido em 2019</p>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" ></script>
        <script src="{{ asset('js/plugins.min.js') }}"></script>
        <script src="{{ asset('js/app.min.js') }}" ></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5d1677d222d70e36c2a34b65/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </body>

    </html>
