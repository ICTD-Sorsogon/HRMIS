<template>
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle.accordion-1 >
			<h6 class="m-0 font-weight-bold text-primary flex-">Employment Status
				<span class="badge badge-lg rounded-pill bg-warning text-white float-right text-uppercase">Unemployed</span>
			</h6>
		</a>
		<b-collapse id="accordion-1" accordion="my-accordion" role="tabpanel">
		<div class="card-body">
		</div>
		</b-collapse>
	</div>
</template>

<script>
	export default {
		
	}
</script>
