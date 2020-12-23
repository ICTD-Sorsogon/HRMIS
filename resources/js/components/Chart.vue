<template>
    <canvas ></canvas>
</template>

<script>
import Chart from 'chart.js';

    export default {
        name: 'chart',
        props: [ 'data' ],
        methods: {
            createChart(chartData) {
                const myChart = new Chart(this.$el, {
                type: chartData.type,
                data: chartData.data,
                options: chartData.options,
                });
            },
            countSibling() {
                console.log(this.$parent)
            }
        },
        data() {
            return {
                ChartData: this.data
            }
        },
        mounted() {
            this.createChart(this.ChartData);
        }
}
</script>
