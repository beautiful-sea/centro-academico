<template>
	<div class="col-md-6">
		<label for="options_types">Pautas </label>

		<div class="input-group">

			<select class="form-control" id="select_schedule" name="schedules[]" v-model="schedules" multiple>
				<option value="0" disabled="disabled">Adicione assuntos:</option>
				<option  v-for="p in all_schedules" :value="p.id">{{p.subject}}</option>
			</select>
			

		</div>

	</div>
</template>

<script type="text/javascript">
	export default{
		props:{
			all_schedules: Array
		},
		data(){
			return {
				select : 1,
				schedule: '',
				schedules: this.all_schedules
			}
		},
		methods:{
			createschedule(){
				let new_schedule = {
					subject:$('#new_schedule').val(),
					id:0
				};
				axios({
				  method: 'post', // verbo http
				  url: '/admin/minutes/schedule/store', // url
				  data: {
				    schedule: new_schedule, // Parâmetro 1 enviado
				}
				})
				.then(response => {
					let data = response.data;
					new_schedule.id = data.id;
					this.schedules.push(new_schedule);

					$('#select_participant').select2('close');
				}).catch(error => {
					console.log('Erro:',error);
				});
				$('#select_schedule').select2('close');

			}
		},
		mounted(){
			console.log(this.all_schedules);
			var vm = this;
			$('#select_schedule').select2({
				'theme':'classic',
				"language": {
					"noResults": function(){
						return "<div class='input-group'>Assunto não cadastrado ainda. \n Que tal cadastra-lo agora?<label for='new_schedule'>Nome:</labe><input class='form-control' id='new_schedule' type='text'><label for='new_schedule'><br> <button class='btn btn-success' onclick=createschedule() id='btn_new_schedule' >Salvar<i class='fa fa-check'></i></button></div>";
					}
				},
				escapeMarkup: function (markup) {
					return markup;
				}
			});

			//Adiciona a função de criar schedulees ao escopo global, podendo ser acessada pelo arquivo de javascript do select
			window.createschedule = function(){
				vm.createschedule();
			}

			$('.select2-search__field').on('keyup',function(){
				$('#new_schedule').val($(this).val());
			})

		},
		watch:{
			'schedule':function(val){
				console.log(val);
			}
		}
	}
</script>
<style type="text/css">
</style>