<template>
	<div>
		<div class="form-group">
			<label for="value_partner">Opções</label><small> Deixe em branco caso não queira utilizar</small>
			<select multiple="multiple" class="form-control" v-model="selecteds" @change="addOption()" id="select_option" name="products_options[]">
				<option value="sizes">Tamanho</option>
				<option value="colors">Cor</option>
			</select>
		</div>
		<div class="form-group" v-for="option in options" v-if="options">
			<label for="value_partner" v-if="options.length > 0" >Opções de {{(option == 'sizes')? 'tamanhos': 'cores'}} </label>
			<select class="form-control select_type_option" v-model="colors_selecteds" multiple="multiple" v-if="option == 'colors'" name="colors[]">
				<option v-for="type in all_colors" :value="type.id">{{type.name}}</option>
			</select>
			<select class="form-control select_type_option" v-model="sizes_selecteds" multiple="multiple" v-if="option == 'sizes'" name="sizes[]">
				<option v-for="type in all_sizes" :value="type.id">{{type.name}}</option>
			</select>
			
		</div>
	</div>
</template>
<script>
	export default{
		props:['all_colors','all_sizes','colors','sizes'],
		data(){
			return {
				options:[],
				selecteds:[],
				colors_selecteds:[],
				sizes_selecteds: []
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
				this.$nextTick(() => {
					$('.select_type_option').select2({'theme':'classic'});
				})

			},
			clearSelect(){//Limpa os dados dos Selects
				this.options = [];
				$('.select_type_option').val(null).trigger('change');
			}
		},
		updated(){
			$('#select_option').on('select2:change', function (e) {
				this.addOption();
			});
		},
		mounted(){
			this.addOption();
		},
		created(){
			if(this.colors.length > 0) this.selecteds.push('colors');

			for (var i = this.colors.length - 1; i >= 0; i--) {
				this.colors_selecteds.push(this.colors[i].id);
			}
			if(this.sizes.length > 0) this.selecteds.push('sizes');

			for (var i = this.sizes.length - 1; i >= 0; i--) {
				this.sizes_selecteds.push(this.sizes[i].id);
			}
		}
	};
</script>

<style type="text/css">
	.select2-results__option[aria-selected=true] {
		display: none;
	}
</style>