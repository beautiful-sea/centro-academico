<template>

	<div style="display:contents;">
		<!-- Modal confirmar pedido -->
		<div class="modal modal-bordo show" style="overflow: auto;
    height: -webkit-fill-available;" id="modal-escolher-pedido" tabindex="-1" role="dialog" aria-labelledby="modal-escolher-pedido-label">
			<div class="modal-dialog animated zoomIn animated-3x" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title color-white" id="modal-escolher-pedido-label">Confirmação</h3>
						<button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
					</div>
					<div class="modal-body" id="body-modal-confirmar-pedido" v-if="item_modal">
						<div class="card ms-feature">
							<div class="card-body overflow-hidden text-center" >
								<div class="row">
									<div class="col-md-6">
										<a>
											<img :src="'/files/products/'+item_modal.id+'.'+item_modal.image_extension" alt=""
											class="img-fluid center-block" style="height:150px;">
										</a>
									</div>
									<div class="col-md-6">
										<h4 class="text-normal text-center">{{item_modal.name}}</h4>
										<p>{{item_modal.description}}</p>
									</div>
								</div>
								<div>
									<h2 class="d-inline">
										<b>R$ {{item_modal.value_partner.toFixed(2)}}</b>
									</h2>
									<div class="d-inline">
										<h4 class="badge bg-bordo"><b>Sócio</b></h4>
									</div>
								</div>
								<p>
									R$ {{item_modal.value.toFixed(2)}} para não sócios
								</p>
								<div>
									<div class="" >
										<label>Cor</label>
										<select v-model="selected_color" class="pull-right form-control select-2">
											<option  v-for="option in item_modal.colors" :value="option">
												{{option.name}}
											</option>
										</select>
									</div>
								</div>

								<div v-if="item_modal.sizes.length > 0" >
									<div class="" >
										<label>Tamanho</label>
										<select  v-model="selected_size"  class="pull-right form-control select-2">
											<option  v-for="option in item_modal.sizes" :value="option">
												{{option.name}}
											</option>
										</select>
									</div>
								</div>
								
								<span v-if="(!item_modal.stockable) || (item_modal.stockable.amount  <= 0)" class="badge badge-danger">INDISPONÍVEL</span>
								<span v-if="(item_modal.stockable) && ((item_modal.stockable.amount > 1) && (item_modal.stockable.amount < item_modal.minimum_stock))" class="badge badge-danger">{{item_modal.stockable.amount}} ULTIMAS UNIDADES</span>
								<span v-if="(item_modal.stockable) && ((item_modal.stockable.amount == 1) && (item_modal.stockable.amount < item_modal.minimum_stock))" class="badge badge-danger">ULTIMA UNIDADE</span>
								
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger close-modal" data-dismiss="modal">Cancelar</button>
						<a href="javascript:void(0)"  @click='updateCart(item_modal)'  class="btn btn-bordo btn-sm btn-block btn-raised" v-if="(item_modal.stockable) && (item_modal.stockable.amount  > 0)">
							<i class="zmdi zmdi-shopping-cart-plus"></i> Adicionar ao Carrinho
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Fim modal -->

		<div v-for="(item,index) in items" class="col-xl-4 col-md-6 " data-price="999.99" data-date="20160705">

			<div class="card ms-feature">
				<div class="card-body overflow-hidden text-center" >
					<a @click="modalProduct(item)">
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
					<span v-if="(!item.stockable) || (item.stockable.amount  <= 0)" class="badge badge-danger">INDISPONÍVEL</span>
					<span v-if="(item.stockable) && ((item.stockable.amount > 1) && (item.stockable.amount < item.minimum_stock))" class="badge badge-danger">{{item.stockable.amount}} ULTIMAS UNIDADES</span>
					<span v-if="(item.stockable) && ((item.stockable.amount == 1) && (item.stockable.amount < item.minimum_stock))" class="badge badge-danger">ULTIMA UNIDADE</span>
					<a href="javascript:void(0)"  v-on:click="modalProduct(item)"  class="btn btn-bordo btn-sm btn-block btn-raised" v-if="(item.stockable) && (item.stockable.amount  > 0)">
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
		data(){
			return {
				item_modal:'',
				selected_size:'',
				selected_color:''
			}
		},
		mounted(){
			$('.close-modal').on('click',function(){
				$("#modal-escolher-pedido").hide("modal"); 
			})
			
		},
		methods: {
			updateCart(item){
				item.colors = this.selected_color;
				item.sizes = this.selected_size;
				eventBusCart.$emit('updateCart',item);
				openConf();
			},
			modalProduct(item){
				this.item_modal = item;
				$('#modal-escolher-pedido').show('modal');
				console.log(this.item_modal)
			}

		},
		watch:{
			// selected_color:function(val){
			// 	console.log(val);
			// },
			// selected_size:function(val){
			// 	console.log(val);
			// }
		}

	};

</script>

<style type="text/css">
	.modal-bordo .modal-header{
		background-color: #781E20;
	}
</style>