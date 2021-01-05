<template>
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle.accordion-6 >
			<h6 class="m-0 font-weight-bold text-primary">Family Background</h6>
		</a>
		<b-collapse id="accordion-6" visible accordion="my-accordion" role="tabpanel">
		<div class="card-body">
			<h5 class="font-weight-bold">Spouse</h5>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >First Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >Last Name</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" >Middle Name</label>
					<input class="form-control"  type="text"  :value="spouse_middle_name">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" >Suffix</label>
					<input class="form-control"  type="text"  :value="spouse_suffix">
				</div>
			</div>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-3">
					<label class="small mb-1" >Occupation</label>
					<input class="form-control"  type="text"  :value="spouse_occupation">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-3">
					<label class="small mb-1" >Employer/Business Name</label>
					<input class="form-control"  type="text"  :value="spouse_employer">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" >Business Address</label>
					<input class="form-control"  type="text"  :value="spouse_business_address">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" >Contact Number</label>
					<input class="form-control"  type="text"  :value="spouse_contact_number">
				</div>
			</div>
			<h5 class="font-weight-bold mt-3">Father</h5>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >First Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >Last Name</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" >Middle Name</label>
					<input class="form-control"  type="text"  :value="spouse_middle_name">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" >Suffix</label>
					<input class="form-control"  type="text"  :value="spouse_suffix">
				</div>
			</div>
			<h5 class="font-weight-bold mt-3">Mother</h5>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >First Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >Last Name</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" >Middle Name</label>
					<input class="form-control"  type="text"  :value="spouse_middle_name">
				</div>
			</div>
			<div class="form-row pl-1 justify-content-between">
				<h5 class="font-weight-bold mt-3 pl-1">Children</h5>
				<div class="align-self-center">
					<span class="btn btn-primary btn-sm">Add</span>
				</div>
			</div>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-3">
					<label class="small mb-1" >First Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-3">
					<label class="small mb-1" >Last Name</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" >Middle Name</label>
					<input class="form-control"  type="text"  :value="spouse_middle_name">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >Date of Birth</label>
					<input class="form-control"  type="text"  :value="">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" >Age</label>
					<input class="form-control"  type="text"  :value="age">
				</div>
			</div>
		</div>
		</b-collapse>
	</div>	
</template>

<script>
	export default {
		
	}
</script>
