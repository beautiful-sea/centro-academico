@extends('admin.boilerplate.page')

@section('header-title')
<h1>
	Produtos
	<small>Configurações</small>
</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produtos</a></li>
<li class="breadcrumb-item active">Configurações</li>
@endsection

@section('content')
<div id="app">

	<div class="row">
		<div class="col-5">

			<div class="col-md-12">
				{{ Form::open(['url' => 'admin/config/products', 'method' => 'POST','id' =>  'stock-form']) }}
				<form-options-product></form-options-product>
				{{Form::close()}}
			</div>

			<div class="col-md-12">
				{{ Form::restForm($product_option_type,['id' =>  'stock-form','method'=>'POST']) }}
				<form-options-types-product :all_types="{{$all_products_options_types}}" :all_options="{{$all_products_options}}"></form-options-types-product>
				{{Form::close()}}
			</div>

		</div>

		<div class="col-7">

			<div class="col-12" >
				<div class="card">
					<div class="card-header"> 
						<h4 >Opções de Produtos Cadastrados</h4>
					</div>
					<div class="card-body">
						<table width="100%" class="table  nowrap table-hover display nowrap dt-responsive" id="products-options-list">
							<thead>
								<div class="form-group">
									<label for="products-options-search">Pesquisar</label>
									<input type="text" class="form-control" id="products-options-search">							
								</div>
								<tr>
									<th>Opção</th>
									<!-- <th>Tipo</th> -->
									<th data-orderable="false"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($all_products_options as $po)

								<tr class="">
									<td>{{ $po->name }}</td>
									<!-- <td>{{ Str::limit($po->name,60,'...') }}</td> -->
									<td>
										<div class="table-actions">
											@can('edit', $po)
											<a href="{{ route('productsoptions.edit', ['option' => $po]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
											@endcan


											@can('destroy', 2)
											{{ Html::deleteLink('Excluir', route('products.option.destroy', ['product_option' => $po]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
											@endcan
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-12"  >
				<div class="card">
					<div class="card-header"> 
						<h4 >Tipos de Opções Cadastrados</h4>
					</div>
					<div class="card-body">
						<table class="table  nowrap table-hover display nowrap dt-responsive" id="products-types-list">
							<thead>
								<div class="form-group">
									<label for="products-types-search">Pesquisar</label>
									<input type="text" class="form-control" id="products-types-search">							
								</div>
								<tr>
									<!-- <th>Opção</th> -->
									<th>Tipo</th>
									<th data-orderable="false"></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($all_products_options_types as $type)
								<tr class="">
									<td>{{$type->name }}</td>
									<td>
										<div class="table-actions">
											@can('edit', $type)
											<a href="{{ route('config.edit', ['product' => $type]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
											@endcan


											@can('destroy', 2)
											{{ Html::deleteLink('Excluir', route('config.destroy', ['product_option_type' => $type]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
											@endcan
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>






	</div>
</div>
@stop

@section('js')
<script>
	ptl = $('#products-types-list').DataTable({
		responsive:true
	});
	pol = $('#products-options-list').DataTable({
		responsive: true
	});
	$('#products-types-search').keyup(function(){
		ptl.search($(this).val()).draw() ;
	})
	$('#products-options-search').keyup(function(){
		pol.search($(this).val()).draw() ;
	})
</script>
@stop
<style type="text/css">
	.dataTables_filter {
		display: none; 
	}
	.dataTables_info{
		white-space: normal!important;
	}
</style>