@php
$routeArray = app('request')->route()->getAction();
$controllerAction = class_basename($routeArray['controller']);
list($controller, $action) = explode('@', $controllerAction);
@endphp

@php
$class = '';

if ($controller == 'HomeController') {
$class = 'active';
}
@endphp

<style type="text/css">
    .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active{
        color: black;
        background-color: white; 
    }
</style>


<li class="nav-item">
    <a href="{{ route('admin.home') }}" class="nav-link {{ $class }}">
        <i class="nav-icon fa fa-home"></i>
        <p>Home</p>
    </a>
</li>

@php
$class = '';

if ($controller == 'MinutesController' ) {
$class = 'active';
}
@endphp
<li class="nav-item">
    <a href="{{ route('minutes.index') }}" class="nav-link {{ $class }}">
        <i class="nav-icon fa fa-handshake"></i>
        <p>Reuniões</p>
    </a>
</li>

@php
$class = '';

if ($controller == 'OrdersController' || ($controller == 'OrderItemsController' )) {
$class = 'active menu-open';
}
@endphp

<li class="nav-item has-treeview {{ $class }}">
    <a href="#" class="nav-link" >
        <i class="nav-icon fa fa-shopping-cart"></i>
        <p>Vendas <i class="fa fa-angle-left right"></i></p>
    </a>
    
    <ul class="nav nav-treeview">


        @php
        $class = '';

        if ($controller == 'OrdersController') {
        $class = 'active';
    }
    @endphp


    <li class="nav-item">
        <a href="{{ route('orders.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
            <i class="nav-icon fa fa-list"></i>
            <p>Pedidos</p>
        </a>
    </li>  

</ul>
</li>



@php
$class = '';

if ($controller == 'StockController' || ($controller == 'ProductsController'  && $action != 'config')) {
$class = 'active menu-open';
}
@endphp

<li class="nav-item has-treeview {{ $class }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-boxes"></i>
        <p>Estoque <i class="fa fa-angle-left right"></i></p>
    </a>
    
    <ul class="nav nav-treeview">


        @php
        $class = '';

        if ($controller == 'StockController') {
        $class = 'active';
    }
    @endphp


    <li class="nav-item ">
        <a href="{{ route('stock.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
            <i class="nav-icon fas fa-dolly-flatbed"></i>
            <p>Movimentações</p>
        </a>
    </li>  

    @php
    $class = '';

    if ($controller == 'ProductsController' && $action != 'config') {
    $class = 'active';
}
@endphp


<li class="nav-item">
    <a href="{{ route('products.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>Produtos</p>
    </a>
</li>

</ul>
</li>

@php
$class = '';

if ($controller == 'LastPhotosEngController' || $controller == 'TeamEngController') {
$class = 'menu-open';
}
@endphp

<li class="nav-item has-treeview {{ $class }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-cogs"></i>
        <p>Engenharias <i class="fa fa-angle-left right"></i></p>
    </a>
    
    <ul class="nav nav-treeview">
        @can('index', \App\User::class)    
        @php
        $class = '';

        if ($controller == 'LastPhotosEngController') {
        $class = 'active';
    }
    @endphp

    <li class="nav-item">
        <a href="{{ route('last_photos_eng.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
            <i class="fa fa-image nav-icon"></i>
            <p>Fotos</p>
        </a>
    </li>
    @endcan

    @can('index', \App\User::class)    
    @php
    $class = '';

    if ($controller == 'TeamEngController') {
    $class = 'active';
}
@endphp

<li class="nav-item">
    <a href="{{ route('team_eng.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
        <i class="fa fa-graduation-cap nav-icon"></i>
        <p>Coordenadores</p>
    </a>
</li>
@endcan
</ul>
</li>



@php
$class = '';
if ($controller == 'LastPhotosCAController' || $controller == 'HistoryCAController') {
$class = 'menu-open';
}
@endphp

<li class="nav-item has-treeview {{ $class }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-bullhorn"></i>
        <p>Centro Acadêmico <i class="fa fa-angle-left right"></i></p>
    </a>
    
    <ul class="nav nav-treeview">
        @can('index', \App\User::class)    
        @php
        $class = '';

        if ($controller == 'LastPhotosCAController' && $action == 'index') {
        $class = 'active';
    }
    @endphp

    <li class="nav-item">
        <a href="{{ route('ca.last_photos_ca') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
            <i class="fa fa-image nav-icon"></i>
            <p>Fotos</p>
        </a>
    </li>
    @endcan

    @can('index', \App\User::class)    
    @php
    $class = '';
    if ($controller == 'HistoryCAController') {
    $class = 'active';
}
@endphp

<li class="nav-item">
    <a href="{{ route('ca.history_ca') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
        <i class="fa fa-landmark nav-icon"></i>
        <p>História</p>
    </a>
</li>
@endcan
</ul>
</li>



@php
$class = '';

if ($controller == 'AthleticDataController' || $controller == 'AthleticTeamsController' || $controller == 'NewsAthleticController' || $controller == 'LastPhotosAthleticController') {
$class = 'menu-open';
}
@endphp

<li class="nav-item has-treeview {{ $class }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-running"></i>
        <p>Atlética <i class="fa fa-angle-left right"></i></p>
    </a>
    
    <ul class="nav nav-treeview">
        @can('index', \App\User::class)    
        @php
        $class = '';

        if ($controller == 'AthleticDataController') {
        $class = 'active';
    }
    @endphp

    <li class="nav-item">
        <a href="{{ route('athletic_data.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
            <i class="fa fa-info nav-icon"></i>
            <p>Dados</p>
        </a>
    </li>
    @endcan

    @can('index', \App\User::class)    
    @php
    $class = '';

    if ($controller == 'AthleticTeamsController') {
    $class = 'active';
}
@endphp

<li class="nav-item">
    <a href="{{ route('athletic_teams.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
        <i class="fa fa-users nav-icon"></i>
        <p>Esportes</p>
    </a>
</li>
@endcan

@can('index', \App\User::class)    
@php
$class = '';

if ($controller == 'LastPhotosAthleticController') {
$class = 'active';
}
@endphp

<li class="nav-item">
    <a href="{{ route('last_photos_athletic.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
        <i class="fa fa-image nav-icon"></i>
        <p>Fotos</p>
    </a>
</li>
@endcan


@can('index', \App\User::class)    
@php
$class = '';

if ($controller == 'NewsAthleticController') {
$class = 'active';
}
@endphp

<li class="nav-item">
    <a href="{{ route('news_athletic.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
        <i class="fa fa-newspaper nav-icon"></i>
        <p>Notícias</p>
    </a>
</li>
@endcan
</ul>
</li>

@php
$class = '';

if ($controller == 'UsersController' || $action == 'config') {
$class = 'menu-open';
}
@endphp

<li class="nav-item has-treeview {{ $class }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-cog"></i>
        <p>Configurações <i class="fa fa-angle-left right"></i></p>
    </a>
    
    <ul class="nav nav-treeview">
        @can('index', \App\User::class)    
        @php
        $class = '';

        if ($controller == 'UsersController' && $action <> 'profile') {
        $class = 'active';
    }
    @endphp

    <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
            <i class="fa fa-users nav-icon"></i>
            <p>Usuários</p>
        </a>
    </li>
    @endcan

    @php
    $class = '';

    if ($controller == 'UsersController' && $action == 'profile') {
    $class = 'active';
}
@endphp

<li class="nav-item">
    <a href="{{ route('users.profile') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
        <i class="fa fa-user nav-icon"></i>
        <p>Perfil</p>
    </a>
</li>

@php
$class = '';

if ($controller == 'ProductsController' && $action == 'config') {
$class = 'active';
}
@endphp


<li class="nav-item">
    <a href="{{ route('products.config') }}" class="nav-link {{ $class }}" style="padding-left: 50px">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>Produtos</p>
    </a>
</li>

</ul>
</li>