<template>
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle="'accordion-' + index" >
			<h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
		</a>
		<b-collapse :id="'accordion-' + index" accordion="my-accordion" role="tabpanel">
		<div class="card-body">
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputFirstName">First Name</label>
					<input class="form-control" id="inputFirstName" type="text"  :value="firstname">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputLastName">Last Name</label>
					<input class="form-control" id="inputLastName" type="text"  :value="lastname">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputMiddleName">Middle Name</label>
					<input class="form-control" id="inputMiddleName" type="text"  :value="middlename">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputLastName">Suffix</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
			</div>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputAge">Age</label>
					<input class="form-control" id="inputAge" type="text"  :value="age">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputPlaceOfBirth">Place of Birth</label>
					<input class="form-control" id="inputPlaceOfBirth" type="text"  :value="POB">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputCitizenship">Citizenship</label>
					<input class="form-control" id="inputCitizenship" type="text"  :value="citizenship">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputCivilStatus">Civil Status</label>
					<input class="form-control" id="inputsCivilStatus" type="text"  :value="civil_status">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputGender">Gender</label>
					<input class="form-control" id="inputGender" type="text"  :value="gender">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputSSS">SSS</label>
					<input class="form-control" id="inputSSS" type="text"  :value="sss">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputPagIbig">Pag-Ibig</label>
					<input class="form-control" id="inputPagIbig" type="text" value="">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputGSIS">GSIS</label>
					<input class="form-control" id="inputGSIS" type="text"  :value="gsis">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputPhilhealth">Philhealth</label>
					<input class="form-control" id="inputPhilhealth" type="text"  :value="philhealth">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputBloodType">Blood type</label>
					<input class="form-control" id="inputBloodTYpe" type="text"  :value="blood_type">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputHeight">Height</label>
					<input class="form-control" id="inputHeight" type="text"  :value="height">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputWeight">Weight</label>
					<input class="form-control" id="inputWeight" type="text"  :value="weight">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputMobileNumber">Mobile Number</label>
					<input class="form-control" id="inputMobileNumber" type="text"  :value="mobile">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputTelephoneNumber">Telephone Number</label>
					<input class="form-control" id="inputTelephoneNumber" type="text"  :value="telephone">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputEmail">Email</label>
					<input class="form-control" id="inputEmail" type="text"  :value="email">
				</div>
			</div>
		</div>
		</b-collapse>
	</div>
</template>

<script>
	export default {
		name: 'personal-details',
		props: ['index'],
		data() {
			return {
				lastname: null,	firstname: null, middlename: null,	suffix: null,	
				age: null,	POB: null,	citizenship: null,	civil_status: null,	
				gender: null,	sss: null,	gsis: null,	philhealth: null,	
				blood_type: null,	height: null,	weight: null,	height: null,	
				mobile: null,	telephone: null,	email: null,	
			}

		}
	}
</script>

<style lang="scss" scoped>

</style>