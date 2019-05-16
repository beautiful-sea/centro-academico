<template>
	<div>
		<div class="form-group">
			<label for="value_partner">Opções</label><small> Deixe em branco caso não queira utilizar</small>
			<select multiple="multiple" v-model="selecteds" class="form-control" @change="addOption()" id="select_option" name="products_options[]">
				<option v-for="item in items" :value="item.id">{{item.name}}</option>
			</select>
		</div>
		<div class="form-group" v-show="options.length > 0" v-for="option in options">
			<label for="value_partner" v-if="options.length > 0" >Opções de {{option.name}} </label>
			<select class="form-control select_type_option" multiple="multiple" name="products_options_types[]">
				<option v-for="(type) in option.types"
				 :selected="(types.findIndex(item => item.id == type.id) >=0)?true:false" :value="type.id">{{type.name}}</option>
			</select>
			
		</div>
	</div>
</template>
<script>
	export default{
		props:{
			items: Array,
			types: Array
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
						//Pega o id da opção selecionada e procura essa opção na lista de items
						let index = this.items.findIndex(item => item.id == option_selected[i]);

						//Se o index for >=0 é porque encontrou o id do produto selecionado
						if(index >=0){
							this.options.push(this.items[index]);
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
			this.addOption();
		},
		created(){
			for (var i = this.types.length - 1; i >= 0; i--) {
				this.selecteds.push(this.types[i].option.id);
			}
		}
	};
</script>