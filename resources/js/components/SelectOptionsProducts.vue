<template>
	<div>
		<div class="form-group">
			<label for="value_partner">Opções</label><small> Deixe em branco caso não queira utilizar</small>
			<select multiple class="form-control" @change="addOption()" id="select_option" name="products_options[]">
				<option v-for="item in items" :value="item.id">{{item.name}}</option>
			</select>
		</div>
		<div class="form-group" v-show="options.length > 0" v-for="option in options">
			<label for="value_partner" v-if="options.length > 0" >Opções de {{option.name}} </label>
			<select class="form-control" id="select_type_option" multiple="multiple" name="products_options_types[]">
				<option v-for="type in option" :value="type.id">{{type.name}}</option>
			</select>
			
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
				options:[],
				name_option_selected:''
			}
		},
		methods:{
			addOption(){
				this.clearSelect();
				let option_selected = $('#select_option').val();
				if(option_selected.length > 0){

					for (var i = option_selected.length - 1; i >= 0; i--) {
						let index = this.items.findIndex(item => item.id == option_selected[i]);

						if(index >=0 ){
							this.options.push(this.items[index]);
							console.log(this.options);
						}else{
							// this.clearSelect();
						}
					}
					
				}else{
					// this.clearSelect();
				}
				$('#select_type_option').select2({'theme':'classic'});
				// console.log(this.option);

			},
			clearSelect(){
				this.option = [];
				this.name_option_selected = '';
				$('#select_type_option').val(null).trigger('change');
			}
		},
		mounted(){
			// $('#select_option').select2({'theme':'classic'});
		}
	};
</script>