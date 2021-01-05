<template>
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle="'accordion-' + index" >
			<h6 class="m-0 font-weight-bold text-primary">Address</h6>
		</a>
		<b-collapse :id="'accordion-' + index" accordion="my-accordion" role="tabpanel">
		<div class="card-body">
		</div>
		</b-collapse>
	</div>	
</template>

<script>
	export default {
		props: ['index']	
	}
</script>
