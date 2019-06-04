<template>
	<div>
		<div class="form-group">
			<label for="value_partner">Opções</label><small> Deixe em branco caso não queira utilizar</small>
			<select multiple="multiple" class="form-control" @change="addOption()" id="select_option" name="products_options[]">
				<option value="sizes">Tamanho</option>
				<option value="colors">Cor</option>
			</select>
		</div>
		<div class="form-group" v-for="option in options" v-if="options">
			<label for="value_partner" v-if="options.length > 0" >Opções de {{(option == 'sizes')? 'tamanhos': 'cores'}} </label>
			<select class="form-control select_type_option"  v-if="option == 'colors'" name="colors_id">
				<option v-for="type in color" :value="type.id">{{type.name}}</option>
			</select>
			<select class="form-control select_type_option"  v-if="option == 'sizes'" name="sizes_id">
				<option v-for="type in size" :value="type.id">{{type.name}}</option>
			</select>
			
		</div>
	</div>
</template>
<script>
	export default{
		data(){
			return {
				size:[],
				color:[],
				options:[]
			}
		},
		methods:{
			addOption(){//Adiciona as opçoes	
				this.clearSelect();
				var option_selected = $('#select_option').val();
				if(option_selected.length > 0){
					for (var i = option_selected.length - 1; i >= 0; i--) {

						if(option_selected.length >=0){
							this.options.push(option_selected[i]);
						}else{
							this.clearSelect();
						}
					}
				}else{
					this.clearSelect();
				}

			},
			clearSelect(){//Limpa os dados dos Selects
				this.options = [];
				$('.select_type_option').val(null).trigger('change');
			},
			setColorAndSize(id_product){
				this.selecteds = [];
				this.options = [];
				var options = [];

				if(id_product){
					axios.get('find/'+id_product)
					.then(response => {

						options = response.data;
						this.setSizes(options.sizes);
						this.setColors(options.colors);

						if(options.sizes.length > 0){
							this.options.push(options.sizes);
						}
						if(options.colors.length > 0){
							this.options.push(options.colors);
						}
						this.addOption();
					})
				}
				
				
			},
			setSizes(value){
				this.size  = value;
			},
			setColors(value){
				this.color = value;
			}
		},
		computed:{
			
		},
		updated(){
			$('#select_option').on('select2:change', function (e) {
				this.addOption();
			});
		},
		mounted(){
			var vm = this;

			eventBusCart.$on('updateStock',(id_product) =>{
				vm.setColorAndSize(id_product);
			});	

			this.addOption();


		},
		created(){
		}
	};
</script>

<style type="text/css">
	.select2-results__option[aria-selected=true] {
		display: none;
	}
</style>