<template>
    <div class="card">
        <div class="card-header"> 
            <h4 >Opções<small> Criar</small></h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <i class="fa fa-question-circle"  title="Ex: Tamanho/Cor"></i>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" id="name" >
                            <button v-if="item.options.types.length == 0 && item.options.name == ''" class="btn btn-success" type="button" @click="addOption()"><i class="fa fa-plus"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="form-group" v-if="item.options.name">
                            <label>Opções de {{item.options.name.toLowerCase()}}</label>
                            <i class="fa fa-question-circle"  title="Ex: M/P/G/Branco/Azul.">
                            </i>
                            <div class="input-group">
                                <input type="text"  class="form-control" id="type_name">
                                <button class="btn btn-success" type="button" @click="addType()"><i class="fa fa-plus"></i></button>   
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <select class="form-control" name="options_types[]" readonly="readonly" v-if="item.options.types.length > 0" multiple>
                            <option  v-for="type in item.options.types" selected>
                                {{type.name}}
                            </option>
                        </select>
                        <button v-if="item.options.types.length > 0 && item.options.name" class="btn btn-danger" type="button" @click="item.options.types = []"> <i class="fa fa-trash" ></i></button>
                    </div>
                </div>
            </div>

            <br>
            <div v-if="item.options.name">
                <div class="form-group">
                    <div class="col-md-12">
                        <button v-if="item.options.types.length > 0 || item.options.name != ''" class="btn btn-danger" type="button" @click="resetOptionForm()"> <i class="fa fa-refresh" ></i>Redefinir</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">
    export default{
        data(){
            return {
                item:{
                    options:{
                        name: '',
                        types:[]
                    }
                    
                }
            }
        },
        methods:{
            addOption(){
                let name_option = $('#name').val();
                if(name_option != '' && name_option != ' '){
                    this.item.options.name = name_option;
                    $("#name").prop('readonly',true);
                } 
            },
            addType(){
                if($('#type_name').val() != '' && $('#type_name').val() != ' '){
                    this.item.options.types.push({name:$('#type_name').val()});
                }
                $('#type_name').val('');
            },
            resetOptionForm(){
                this.item.options.types = [];
                this.item.options.name = '';
                $("#name").removeAttr('readonly');
                $('#name').val('');

            }
        }
    }
</script>
<style type="text/css">
    select[readonly] 
    {
        background: #eee; /*Simular campo inativo*/
        pointer-events: none;
        touch-action: none;
    }
</style>