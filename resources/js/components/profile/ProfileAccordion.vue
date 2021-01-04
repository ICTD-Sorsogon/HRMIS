<template>
<!-- Begin Page Content -->
<div class="container-fluid">
	
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Profile | Edit</h1>
	</div>

	<!-- Employment Status -->
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle.accordion-1 >
			<h6 class="m-0 font-weight-bold text-primary">Employment Status</h6>
		</a>
		<b-collapse id="accordion-1" accordion="my-accordion" role="tabpanel">
		<div class="card-body">
		</div>
		</b-collapse>
	</div>
	

	<!-- Personal Details -->
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle.accordion-2 >
			<h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
		</a>
		<b-collapse id="accordion-2" visible accordion="my-accordion" role="tabpanel">
		<div class="card-body">
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputFirstName">First name</label>
					<input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputLastName">Last name</label>
					<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputLastName">Middle name</label>
					<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputLastName">Suffix</label>
					<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
				</div>
			</div>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputFirstName">Age</label>
					<input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputLastName">Last name</label>
					<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputLastName">Middle name</label>
					<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputLastName">Suffix</label>
					<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
				</div>
			</div>
		</div>
		</b-collapse>
	</div>
	
	<!-- Employment Status -->
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle.accordion-3 >
			<h6 class="m-0 font-weight-bold text-primary">Work Experience</h6>
		</a>
		<b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
		<div class="card-body">
		</div>
		</b-collapse>
	</div>	

</div>
<!-- /.container-fluid -->
</template>

<script>
	export default {
		
	}
</script>

<style lang="scss" scoped>

</style>