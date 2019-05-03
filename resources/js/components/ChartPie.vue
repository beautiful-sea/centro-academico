<template>
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Produtos mais vendidos</h3>

			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
				</button>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div class="row">
				<div class="col-md-8">
					<div class="chart-responsive">
						<canvas id="doughnutChart" height="162" width="145" style="width: 145px; height: 162px;"></canvas>
					</div>
					<!-- ./chart-responsive -->
				</div>
			</div>
			<!-- /.row -->
		</div>
	</div>
</template>
<script>
	export default{
		props:{
			items: Array
		},
		data: function (){
			return {

			}
		},
		mounted(){
			console.log(this.items)
			var canvas =  $('#doughnutChart').get(0).getContext('2d')

			var doughnutChart = new Chart(canvas, {
				type: 'doughnut',
				data: {
					labels: [
					this.items[0].name,
					this.items[1].name,
					this.items[2].name,
					this.items[3].name
					],
					datasets: [{
						data: [this.items[0].amount, this.items[1].amount,
								this.items[2].amount,this.items[3].amount],
						backgroundColor: [
						"#1ABC9C",
						"#566523",
						"#462552",
						"#111552"
						],
						hoverBackgroundColor: [
						"#148F77",
						"#273746"
						]
					}]
				},
				options: {
			    // In options, just use the following line to show all the tooltips
			    showAllTooltips: true
				}
			})
		},
		methods:{
			generateCanvas(){
				
			}
		}
	}
</script>