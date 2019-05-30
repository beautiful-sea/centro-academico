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
                       <select class="form-control" id="options_types" name="option" @change="addType()" >
                        <option value="0">Selecione uma opção</option>
                        <option value="sizes">Tamanho</option>
                        <option value="colors">Cor</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row" v-if="option_selected != ''">
            <div class="col-md-12">
               <label for="type_name">Nome para o tipo de {{(option_selected == 'sizes')?'tamanho' : 'cor'}} </label>

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
        },
        data(){
            return {
                option_selected: ''
            }
        },
        methods:{
            addType(){
              var type_value = $('#options_types').val();
              if(type_value == '0'){
                this.option_selected = '';
                return false;
              }
              this.option_selected = type_value;

        }
    }
}
</script>