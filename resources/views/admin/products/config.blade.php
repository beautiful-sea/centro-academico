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
		<div class="col-6">

			<div class="col-md-12">
				{{ Form::open(['url' => 'admin/config/products', 'method' => 'POST','id' =>  'stock-form']) }}
				<form-options-product></form-options-product>
				{{Form::close()}}
			</div>

			<div class="col-12"  >
				<div class="card">
					<div class="card-header"> 
						<h4 >Tipos de Opções Cadastrados</h4>
					</div>
					<div class="card-body">
						<table class="table table-hover compact" id="products-types-list">
							<thead>
								<tr>
									<!-- <th>Opção</th> -->
									<th>Tipo</th>
									<th data-orderable="false"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($products_options_types as $pot)

								<tr class="">
									<!-- <td>{{ $pot->option->name }}</td> -->
									<td>{{ Str::limit($pot->name,60,'...') }}</td>
									<td>
										<div class="table-actions">
											@can('edit', $pot)
											<a href="{{ route('config.edit', ['product' => $pot]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
											@endcan


											@can('destroy', 2)
											{{ Html::deleteLink('Excluir', route('config.destroy', ['product_option_type' => $pot]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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

		<div class="col-6">

			<div class="col-md-12">
				{{ Form::open(['url' => 'admin/config/products', 'method' => 'POST','id' =>  'stock-form']) }}
				<form-options-product></form-options-product>
				{{Form::close()}}
			</div>

			<div class="col-12" >
				<div class="card">
					<div class="card-header"> 
						<h4 >Opções de Produtos Cadastrados</h4>
					</div>
					<div class="card-body">
						<table class="table table-hover display nowrap dt-responsive" id="products-options-list">
							<thead>
								<tr>
									<th>Opção</th>
									<!-- <th>Tipo</th> -->
									<th data-orderable="false"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($products_options as $po)

								<tr class="">
									<td>{{ $po->name }}</td>
									<!-- <td>{{ Str::limit($po->name,60,'...') }}</td> -->
									<td>
										<div class="table-actions">
									<!-- @can('edit', $po)
									<a href="{{ route('config.edit', ['product' => $po]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
									@endcan -->


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

</div>






</div>
</div>
@stop

@section('js')
<script>
	$('#products-types-list').DataTable({
		responsive:true
	});
	$('#products-options-list').DataTable();
</script>
@stop