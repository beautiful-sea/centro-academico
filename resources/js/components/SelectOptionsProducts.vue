<template>
	<div>
		<div class="form-group">
			<label for="value_partner">Opções</label><small> Deixe em branco caso não queira utilizar</small>
			<select multiple="multiple" v-model="selecteds" class="form-control" @change="addOption()" id="select_option" name="products_options[]">
				<option value="sizes">Tamanho</option>
				<option value="colors">Cor</option>
			</select>
		</div>
		<div class="form-group" v-for="option in options">
			<label for="value_partner" v-if="options.length > 0" >Opções de {{option.name}} </label>
			<select class="form-control select_type_option" multiple="multiple" name="products_options_types[]">

			</select>
			
		</div>
	</div>
</template>
<script>
	export default{
		props:{
			all_colors: Array,
			all_sizes: Array
		},
		data(){
			return {
				options:[],
				selecteds:[]
			}
		},
		methods:{
			addOption(){//Adiciona as opçoes	
				this.clearSelect();
				let option_selected = $('#select_option').val();

				if(option_selected.length > 0){
					for (var i = option_selected.length - 1; i >= 0; i--) {

						if(option_selected.length >=0){
							this.options.push(this.option_selected[i]);
						}else{
					console.log('limpado2');

							this.clearSelect();
						}
					}
					
				}else{
					console.log('limpado1');

					this.clearSelect();
				}
				this.$nextTick(() => {
					$('.select_type_option').select2({'theme':'classic'});
				})

			},
			clearSelect(){//Limpa os dados dos Selects
				console.log('limpado');
				this.options = [];
				this.name_option_selected = '';
				$('.select_type_option').val(null).trigger('change');
			}
		},
		updated(){
			$('#select_option').on('select2:change', function (e) {
				addOption();
			});
		},
		mounted(){
			// this.addOption();
			// $('#select_option').select2({'theme':'classic'});
			// console.log(this.all_options)
		},
		created(){
			// for (var i = this.product_options.length - 1; i >= 0; i--) {
			// 	if(this.product_options){
			// 		this.selecteds.push(this.product_options[i].pivot.id_option);
			// 	}
				
			// }
		}
	};
</script>

<style type="text/css">
	.select2-results__option[aria-selected=true] {
		display: none;
	}
</style>