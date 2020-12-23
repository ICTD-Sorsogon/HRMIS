<template>
	<div class="card-body">
		<div class="chart-pie pt-4 pb-2">
			<chart :data="this.chartData"/>
		</div>
		<div class="mt-4 text-center small">
			<span class="mr-2">
				<i class="fas fa-circle text-primary"></i> Direct
			</span>
			<span class="mr-2">
				<i class="fas fa-circle text-success"></i> Social
			</span>
			<span class="mr-2">
				<i class="fas fa-circle text-info"></i> Referral
			</span>
		</div>
	</div>
</template>

<script>
import Chart from './Chart'
import {chartData} from '../pie-chart'
	export default {
		name: 'pie-chart',
		components: { Chart },
		data() {
			return {
				chartData: chartData
			}
		}
	}
</script>