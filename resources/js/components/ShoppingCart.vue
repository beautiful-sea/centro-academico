<template>
	<div>
		<!-- Modal confirmar pedido -->
<!-- 		<div class="modal modal-info" id="modal-confirmar-pedido" tabindex="-1" role="dialog" aria-labelledby="modal-confirmar-pedido-label">
			<div class="modal-dialog animated zoomIn animated-3x" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title color-white" id="modal-confirmar-pedido-label">Confirmação</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
					</div>
					<div class="modal-body" id="body-modal-confirmar-pedido">
						<h4><b>Deseja finalizar o pedido e realizar a reserva dos produtos escolhidos?</b></h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn  btn-primary"><a href="pedido-finalizado.php">Confirmar</a></button>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Fim modal -->

		<a href="javascript:void(0)" id="btn_carrinho" class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand" style="right: 20px;"><i class="zmdi zmdi-shopping-cart"></i>
		</a>
		<div id="ms-configurator" class="ms-configurator" >
			<div class="ms-configurator-title">
				<h3><i class="zmdi zmdi-shopping-cart"></i> Carrinho de Compras</h3>
				<a href="javascript:void(0);" class="ms-conf-btn withripple"><i class="zmdi zmdi-close"></i><div class="ripple-container"></div></a>
			</div>
			<div class="panel-group" id="accordion_conf" role="tablist" aria-multiselectable="false">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
							<a role="button" class="withripple" data-toggle="collapse" href="#ms-collapse-conf-1" aria-expanded="false" aria-controls="ms-collapse-conf-1">
								<i class=""></i> Produtos 
							</a>
						</h4>
					</div>
					<div id="ms-collapse-conf-1" class="card-collapse collapse show" role="tabpanel" >
						<div class="panel-body" style="height: 400px;overflow: auto;">
							<div class=" row justify-content-end">
								<div class="col-lg-12">
									<select id="tipo_cliente" class="color-white form-control" v-model="client.is_partner"  data-dropup-auto="true">
										<option class="color-black" disabled="" value="2" selected>SELECIONE UMA OPÇÃO</option>
										<option class="color-bordo" value="1">Sou sócio da Atlética </option>
										<option class="color-bordo" value="0">Não sou sócio da Atlética </option>
									</select>
								</div>
							</div>
							<div id="itens_carrinho" v-model="cart" v-for="item in cart">
								
								<div class="card container col-md-12">

									<a href="javascript:void(0)" class="color-bordo ">{{item.name}}</a>
									<div >
										
									</div>
									
									
									<div class="" v-if="item.colors" style="margin-top: 0px!important">
										<label>Cor:</label>
										<input type="text"disabled  style="margin-top: 0px!important" class=" form-control-number pull-right" :value="item.colors.name" >
									</div>
									<div class="" v-if="item.sizes" style="margin-top: 0px!important">
										<label>Tamanho:</label>
										<input type="text"disabled  style="margin-top: 0px!important" class=" form-control-number pull-right" :value="item.sizes.name" >
									</div>
									<div class="" style="margin-top: 0px!important">
										<label>Quantidade:</label>
										<input type="number" min="0" disabled v-model="item.amount_order" :max="item.stockable.amount" style="margin-top: 0px!important;text-align: center" class=" form-control-number pull-right" >
									</div>
									<div class="row d-inline">
										<span class="color-bordo" style="cursor:pointer;padding-left:10px;font-size: 11px" @click="removeProduct(item)">Remover
										</span>
										<span class="color-bordo" style="float:right;padding-right:10px">Valor: R$ {{(client.is_partner == 1)?
											(item.value_partner* item.amount_order).toFixed(2):
										(item.value* item.amount_order).toFixed(2)}}</span>
									</div>
								</div>
							</div>

							<div id="grad-options" class="ms-color-shine total_compra" >
								<h4 v-if="cart.length == 0">Você ainda não adicionou produtos no carrinho.</h4>
							</div>															
						</div>
					</div>

				</div>
			</div>
			<div class="panel-group" id="accordion_conf" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
							<a role="button" class="withripple" data-toggle="collapse" href="#ms-collapse-conf-2" aria-expanded="true" aria-controls="ms-collapse-conf-2">
								<i class=""></i> Comprador 
							</a>
						</h4>
					</div>
					<div id="ms-collapse-conf-2" class="card-collapse collapse" role="tabpanel" aria-labelledby="ms-conf-header-color" data-parent="#accordion_conf">
						<div class="panel-body">
							<div id="grad-options" class="ms-color-shine">
								<h4>Preencha com seus dados</h4>
							</div>										
							<div class="form-group">
								<label>Seu Nome: </label>
								<input v-model="client.name"  type="text" class="form-control color-white" id="input_nome_comprador" name="customer_name" >
							</div>
							<div class="form-group">
								<label>Seu Email: </label>
								<input v-model="client.email" type="email" class="form-control color-white" id="input_email_comprador" name="customer_email">
							</div>										
						</div>

					</div>
				</div>
			</div>
			<div class="panel-group" id="accordion_conf" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" >
						<h4 class="panel-title">
							<a role="button" class="withripple" data-toggle="collapse" href="#ms-collapse-conf-3" aria-expanded="true" aria-controls="ms-collapse-conf-3">
								<i class=""></i> Resumo 
							</a>
						</h4>
					</div>
					<div id="ms-collapse-conf-3" class="card-collapse collapse" role="tabpanel" aria-labelledby="ms-conf-header-color" data-parent="#accordion_conf">
						<div class="panel-body" style="height: 400px;overflow: auto;">
							<div id="body-resumo-comprador">
								<div class="card container ">
									<h4 class="color-bordo"><b>Seus Dados:</b></h4>
									<p class="color-bordo">Nome: <span id="resumo_nome_comprador"></span></p>
									<p class="color-bordo">Email: <span id="resumo_email_comprador"></span> </p>
								</div>
							</div>
							<hr>
							<div>
								<div class="card container ">
									<h4 class="color-bordo"><b>Produtos:</b></h4>
									<div id="body-resumo-produtos" v-for="item in cart" style="border: 1px solid maroon;margin-bottom: 5px;padding: 5px;">
										<p class="color-bordo"><b>{{item.amount_order}}</b> - {{item.name}}</p>
										<small class="color-bordo" v-if="item.colors.name">Cor: {{item.colors.name}}</small>
										<small class="color-bordo pull-right" v-if="item.sizes.name">Tamanho: {{item.sizes.name}}</small>
									</div>	
									<p v-if="cart.length <= 0" class="color-bordo">Seu carrinho está vazio, que tal adicionar algumas coisas!?</p>
								</div>
							</div>
							<h4>Total do pedido: R$ <span id="resumo-total-pedido">{{getTotalOrder()}}</span></h4>
							<button :class="'btn btn-raised btn-bordo'" @click="finishOrder()" v-if="cart.length > 0" id="btn-finalizar-pedido">Finalizar Pedido</button>		
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
</template>

<script>
	export default{
		data: function(){
			return {
				cart:[
				],
				client:{
					is_partner: 1,
					name: '',
					email: ''
				}


			}
		},
		created(){
			var vm = this;
			eventBusCart.$on('updateCart',function(product){
				let new_cart = [];

				let product_selected = product
				//verificar se o produto ja está no carrinho
				let index = vm.cart.findIndex(item =>
					item.id == product_selected.id &&
					item.colors.id == product_selected.colors.id &&
					item.sizes.id == product_selected.sizes.id);

				//se o produto não estiver no carrinho ainda
				if(index < 0){
					product_selected.amount_order = 1;
					product_selected.colors = (product_selected.colors)?product_selected.colors:'';
					product_selected.sizes = (product_selected.sizes)?product_selected.sizes:'';
					vm.cart.push(product_selected);

				//se o produto ja estiver no carrinho
			}else{
				vm.cart[index].amount_order += 1;
			}

			vm.$forceUpdate();
		});
		},
		mounted(){
		},
		methods:{
			removeProduct(product){
				let index = this.cart.findIndex(item => item.id == product.id);
				if(this.cart[index]['amount_order'] <= 1){
					this.cart.splice(index,1);
				}else{
					this.cart[index]['amount_order'] -= 1;
				}
			},
			getTotalOrder(){
				let total_order = 0;
				//Pega o valor de cada produto no carrinho e soma com o valor total
				for (var i = this.cart.length - 1; i >= 0; i--) {
					for (var i = this.cart.length - 1; i >= 0; i--) {
						let value_product = (this.client.is_partner == 1)?
						(this.cart[i].value_partner* this.cart[i].amount_order):(this.cart[i].value* this.cart[i].amount_order);
						total_order += value_product;
					}
				}
				return total_order.toFixed(2);
			},
			finishOrder(){
				axios({
				  method: 'post', // verbo http
				  url: '/admin/orders/store', // url
				  data: {
				    cart: this.cart, // Parâmetro 1 enviado
				    client: this.client // Parâmetro 2 enviado
				}
				})
				.then(response => {

					var url = '/atletica/loja/pedido_realizado';
					window.location.href = url;
				})
				.catch(error => {
					console.log(error.response);
				});
			}
		},
		watch:{
			'client.is_partner': function(val){
				this.$store.commit('setPartner',parseInt(this.client.is_partner));
			},
			'client.name': function(val){
				this.$store.commit('setName',this.client.name);
				$('#resumo_nome_comprador').html(val);
			},
			'client.email': function(val){
				this.$store.commit('setEmail',this.client.email);
				$('#resumo_email_comprador').html(val);
			}
		}
	};
</script>
