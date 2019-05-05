<template>
  <div class="card collapsed-card">
    <div class="card-header border-transparent">
      <h3 class="card-title">{{this.title}}</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse">
          <i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-widget="remove">
          <i class="fa fa-times"></i>
        </button>
      </div>
    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table m-0">
          <thead>
            <tr>
              <th>Item</th>
              <th>Quantidade</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>

            <tr v-for="(value,index) in items" v-if="index <= newLimit && value['product'] != null">

              <td><a :href="'products/'+value['product']['id']+'/edit'">{{value['product']['name']}}</a></td>
              <td>{{value['amount']}}</td>
              <td class="date-mask">{{value['created_at'] | moment("DD/MM/Y - H:mm")}}</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer clearfix">
      <a :href="link_btn_footer" v-if="txt_btn_footer" class="btn btn-sm btn-secondary float-right">{{this.txt_btn_footer}}</a>
    </div>
  </div>
</template>
<script>
  export default{
    props:{
      title: String,
      items: Array,
      txt_btn_footer: String,
      link_btn_footer: String,
      limit: Number
    },
    data(){
      return {
        newLimit : this.limit - 1
      }
    },
    mounted(){
    }
  }
</script>