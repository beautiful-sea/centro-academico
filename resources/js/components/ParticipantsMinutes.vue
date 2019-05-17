<template>
	<div class="col-md-6">
		<label for="options_types">Participantes </label>

		<div class="input-group">

			<select class="form-control" id="select_participant" v-model="all_participants" name="id_option" multiple>
				<option value="0" disabled="disabled">Selecione uma opção:</option>
				<option  v-for="p in participants" :value="p.id">{{p.name}}</option>
			</select>
			

		</div>

	</div>
</template>

<script type="text/javascript">
	export default{
		props:{
			participants: Array
		},
		data(){
			return {
				select : 1,
				participant: '',
				participants_selecteds: [],
				all_participants: this.participants
			}
		},
		methods:{
			addParticipant(){
				data = this.participants_selecteds;
				$.post('/admin/minutes/participants/create',{
					data
				})
			},
			createParticipant(){
				let new_participant = {
					name:$('#name_new_participant').val(),
					area:$('#area_new_participant').val(),
					job_title:$('#job_title_new_participant').val(),
					id: 2
				};
				console.log(new_participant);
				this.participants.push(new_participant);
				$('#select_participant').select2('close');
				console.log(this.participants);

			}
		},
		mounted(){
			console.log(this.participants);
			var vm = this;
			$('#select_participant').select2({
				'theme':'classic',
				"language": {
					"noResults": function(){
						return "<div class='input-group'>Participante não cadastrado ainda. \n Que tal cadastra-lo agora?<label for='name_new_participant'>Nome:</labe><input class='form-control' id='name_new_participant' type='text'><label for='area_new_participant'>Área:</labe><input class='form-control' id='area_new_participant' type='text'><label for='job_title_new_participant'>Cargo:</labe><input class='form-control' id='job_title_new_participant' type='text'><br> <button class='btn btn-success' onclick=createParticipant() id='btn_new_participant' >Salvar<i class='fa fa-check'></i></button></div>";
					}
				},
				escapeMarkup: function (markup) {
					return markup;
				}
			});

			//Adiciona a função de criar participantes ao escopo global, podendo ser acessada pelo arquivo de javascript do select
			window.createParticipant = function(){
				vm.createParticipant();
			}

			// Pega o nome do participante nao encontrado e coloca no input de cadastro do nome do novo participante
			$('.select2-search__field').on('keyup',function(){
				$('#new_participant').val($(this).val());
			})

		},
		watch:{
			'participant':function(val){
				console.log(val);
			}
		}
	}
</script>
<style type="text/css">
</style>