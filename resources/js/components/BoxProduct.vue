<template>
	<div style="display:contents;">
		<div v-for="(item,index) in items" class="col-xl-4 col-md-6 " data-price="999.99" data-date="20160705">

			<div class="card ms-feature">
				<div class="card-body overflow-hidden text-center" >
					<a :href="'/files/products/'+item.id+'.'+item.image_extension">
						<img :src="'/files/products/'+item.id+'.'+item.image_extension" alt=""
						class="img-fluid center-block" style="height:150px;">
					</a>
					<h4 class="text-normal text-center">{{item.name}}</h4>
					<!-- <p>{{item['description']}}</p> -->
					<div>
						<h2 class="d-inline">
							<b>R$ {{item.value_partner.toFixed(2)}}</b>
						</h2>
						<div class="d-inline">
							<h4 class="badge bg-bordo"><b>Sócio</b></h4>
						</div>
					</div>
					<p>
						R$ {{item.value.toFixed(2)}} para não sócios
					</p>
					<span v-if="(!item.stockable) || (item.stockable.amount  < 0)" class="badge badge-danger">INDISPONÍVEL</span>
					<span v-if="(item.stockable) && ((item.stockable.amount > 1) && (item.stockable.amount < item.minimum_stock))" class="badge badge-danger">{{item.stockable.amount}} ULTIMAS UNIDADES</span>
					<span v-if="(item.stockable) && ((item.stockable.amount == 1) && (item.stockable.amount < item.minimum_stock))" class="badge badge-danger">ULTIMA UNIDADE</span>
					<a href="javascript:void(0)"  v-on:click="updateCart(item)"  class="btn btn-bordo btn-sm btn-block btn-raised" v-if="(item.stockable) && (item.stockable.amount  > 0)">
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
	},
	methods: {
		updateCart(item){
			eventBusCart.$emit('updateCart',item);
			openConf();
		}
	}

};

</script>