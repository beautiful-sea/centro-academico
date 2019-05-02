<template>
  <div class="card">
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
              <th>ID</th>
              <th>Item</th>
              <th>Data de Saída</th>
            </tr>
          </thead>
          <tbody>

            <tr v-for="(value,index) in items" v-if="index <= limit">

              <td><a href="pages/examples/invoice.html">{{value['id']}}</a></td>
              <td>{{value['product']['name']}}</td>
              <td class="date-mask">{{value['created_at']}}</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer clearfix">
      <a href="javascript:void(0)" v-if="txt_btn_footer" class="btn btn-sm btn-secondary float-right">{{this.txt_btn_footer}}</a>
    </div>
  </div>
</template>
<script>
  export default{
    props:['title','items','txt_btn_footer','limit'],
    mounted(){
      this.limit -= 1;
    }
  }
</script>