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
		<div class="col-4">

			<div class="col-md-12">
				{{ Form::open(['url' => 'admin/config/products/types/create', 'method' => 'POST','id' =>  'stock-form']) }}
				<form-types-product-create></form-types-product-create>
				{{Form::close()}}
			</div>

		</div>

		<div class="col-4">

			<div class="card">
				<div class="card-body">
					<table class="table table-hover" id="colors-list">
						<thead>
							<tr>
								<th>Cores</th>
								<th data-orderable="false"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($colors as $p)

							<tr >
								<td>{{ $p->name }}</td>
								<td>
									<div class="table-actions">
										@can('edit', $p)
										<a href="{{ route('config.colors.edit', ['colors' => $p]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
										@endcan

										@can('destroy', $p)
										{{ Html::deleteLink('Excluir', route('products.destroy', ['product' => $p]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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

		<div class="col-4">

			<div class="card">
				<div class="card-body">
					<table class="table table-hover" id="sizes-list">
						<thead>
							<tr>
								<th>Tamanhos</th>
								<th data-orderable="false"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($sizes as $p)

							<tr >
								<td>{{ $p->name }}</td>
								<td>
									<div class="table-actions">
										@can('edit', $p)
										<a href="{{ route('config.sizes.edit', ['sizes' => $p]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
										@endcan

										@can('destroy', $p)
										{{ Html::deleteLink('Excluir', route('products.destroy', ['product' => $p]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
@stop

@section('js')
<script>
	$('#colors-list').DataTable({
		responsive:true
	});

	$('#sizes-list').DataTable({
		responsive:true
	});
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