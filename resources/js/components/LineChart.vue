<template>
	<div class="card-body">
		<div class="chart-area">
			<chart :data="this.chartData"/>
		</div>
	</div>
</template>

<script>
import Chart from './Chart'
import {chartData} from '../chart-area'
	export default {
        name: 'line-chart',
		components: { Chart },
		data() {
			return {
				chartData: chartData
			}
		}
	}
</script>