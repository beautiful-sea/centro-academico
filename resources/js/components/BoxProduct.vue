<template>
	<div style="display:contents">
		<div v-for="(item,index) in items" class="col-xl-4 col-md-6 " data-price="999.99" data-date="20160705">
			<div class="card ms-feature">
				<div class="card-body overflow-hidden text-center" >
					<a :href="'/files/products/'+item['id']+'.'+item['image_extension']">
						<img :src="'/files/products/'+item['id']+'.'+item['image_extension']" alt=""
						class="img-fluid center-block" style="height:200px">
					</a>
					<h4 class="text-normal text-center">{{item['name']}}</h4>
					<p>{{item['description']}}</p>
					<div>
						<h2 class="d-inline">
							<b>R$ {{item['value_partner'].toFixed(2)}}</b>
						</h2>
						<div class="d-inline">
							<h4 class="badge bg-bordo"><b>Sócio</b></h4>
						</div>
					</div>
					<p>
						R$ {{item['value']}} para não sócios
					</p>
					<span v-if="!item['stockable']" class="badge badge-danger">SEM ESTOQUE</span>
					<span v-if="item['stockable'] && (item['stockable']['amount'] < item['minimum_stock'])" class="badge badge-danger">ULTIMAS UNIDADES</span>
					<a href="javascript:void(0)"  class="btn btn-bordo btn-sm btn-block btn-raised">
						<i class="zmdi zmdi-shopping-cart-plus"></i> Adicionar ao Carrinho
					</a>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default{
	props:{
		items: Array
	},
	mounted(){
	}

};

</script>