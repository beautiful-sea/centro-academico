<template>
	<div class="card">
	  <div class="card-header">
	    <h3 class="card-title">{{title}}</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-widget="collapse">
	        <i class="fa fa-minus"></i>
	      </button>
	      <button type="button" class="btn btn-tool" data-widget="remove">
	        <i class="fa fa-times"></i>
	      </button>
	    </div>
	  </div>
	  <!-- /.card-header -->
	  <div class="card-body p-0">
	    <ul class="products-list product-list-in-card pl-2 pr-2">
	      <li v-for="(item,index) in items" v-if="index <= (limit-1)" class="item">
	        <div class="product-img">
	          <img :src="'/files/products/'+item.id+'.'+item.image_extension" alt="Product Image" class="img-size-50">
	        </div>
	        <div class="product-info">
	          <a :href="'/products/'+item.id+'/edit'" class="product-title">{{item.name}}<small> {{item.created_at | moment("from","now")}}</small>
	            <span class="badge badge-success float-right">R$ {{item.value.toFixed(2)}}</span></a>
	          <span class="product-description">
	            {{item.description}}
	          </span>
	        </div>
	      </li>
	      <!-- /.item -->
	    </ul>
	  </div>
	  <!-- /.card-body -->
	  <div class="card-footer text-center">
	    <a :href="footer_link" class="uppercase">{{footer}}</a>
	  </div>
	  <!-- /.card-footer -->
	</div>
</template>
<script>
	export default{
		props:{
			title: String,
			items: Array,
			footer: String,
			footer_link: String,
			limit: Number
		},
		mounted(){
		}
	};
</script>