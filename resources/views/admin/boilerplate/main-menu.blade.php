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


    <li class="nav-item">
        <a href="{{ route('stock.index') }}" class="nav-link {{ $class }}">
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
    <a href="{{ route('products.index') }}" class="nav-link {{ $class }}">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>Produtos</p>
    </a>
</li>

</ul>
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
        <a href="{{ route('users.index') }}" class="nav-link {{ $class }}">
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
    <a href="{{ route('users.profile') }}" class="nav-link {{ $class }}">
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
    <a href="{{ route('products.config') }}" class="nav-link {{ $class }}">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>Produtos</p>
    </a>
</li>

</ul>
</li>