<template>
    <div class="card">
        <div class="card-header"> 
            <h4 >Tipos de Opções<small> Criar</small></h4>
        </div>
        <div class="card-body">


            <div class="row">
                <div class="col-md-12">
                   <label for="options_types">Opção </label>

                   <div class="input-group">
                       <select class="form-control" id="options_types" name="id_option" @change="addOption()" >
                        <option value="0">Selecione uma opção</option>
                        <option  v-for="option in all_options" :value="option.id">
                            {{option.name}}
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row" v-if="option_selected != ''">
            <div class="col-md-12">
               <label for="type_name">Nome para o tipo de {{option_selected}} </label>

               <div class="input-group">
                   <input type="text" name="name" id="type_name" class="form-control">
               </div>
           </div>
       </div>

       <br>
       <div v-if="option_selected != ''">
        <div class="form-group">
            <div class="col-md-12">
               <!--  <button v-if="item.options.types.length > 0 || item.options.name != ''" class="btn btn-danger" type="button" @click="resetOptionForm()"> <i class="fa fa-refresh" ></i>Redefinir</button> -->
               <button type="submit" class="btn btn-success">Salvar</button>
           </div>
       </div>
   </div>
</div>
</div>
</template>
<script type="text/javascript">
    export default{
        props:{
            all_options: Array,
            all_types: Array
        },
        data(){
            return {
                option_selected: ''
            }
        },
        methods:{
            addOption(){
                let id_name_option = parseInt($('#options_types').val());
                if(id_name_option != 0){
                 let option = this.all_options.find(opt => opt.id == id_name_option )
                 this.option_selected = option.name.toLowerCase();   
             }else{
                this.option_selected = ''
            }

        },
        resetOptionForm(){
            this.item.options.types = [];
            this.item.options.name = '';
            $("#name").removeAttr('readonly');
            $('#name').val('');

        }
    },
    mounted(){
        console.log(this.all_options);
    }
}
</script>