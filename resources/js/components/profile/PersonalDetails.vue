<template>
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle="'accordion-' + index" >
			<h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
		</a> <b-collapse :id="'accordion-' + index" visible accordion="my-accordion" role="tabpanel">
		<div class="card-body">
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputFirstName">First Name</label>
					<input class="form-control" id="inputFirstName" type="text"  v-model="first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputLastName">Last Name</label>
					<input class="form-control" id="inputLastName" type="text"  v-model="last_name">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputMiddleName">Middle Name</label>
					<input class="form-control" id="inputMiddleName" type="text"  v-model="middle_name">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputLastName">Suffix</label>
					<input class="form-control" id="inputLastName" type="text"  v-model="suffix">
				</div>
			</div>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputAge">Age</label>
					<input class="form-control" id="inputAge" type="text" v-model="age">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputPlaceOfBirth">Place of Birth</label>
					<input class="form-control" id="inputPlaceOfBirth" type="text"  v-model="place_of_birth">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputCitizenship">Citizenship</label>
					<input class="form-control" id="inputCitizenship" type="text"  v-model="citizenship">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputCivilStatus">Civil Status</label>
					<input class="form-control" id="inputsCivilStatus" type="text"  v-model="civil_status">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputGender">Gender</label>
					<input class="form-control" id="inputGender" type="text"  v-model="gender">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputSSS">SSS</label>
					<input class="form-control" id="inputSSS" type="text"  v-model="sss">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputPagIbig">Pag-Ibig</label>
					<input class="form-control" id="inputPagIbig" type="text" v-model="pag_ibig">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputGSIS">GSIS</label>
					<input class="form-control" id="inputGSIS" type="text"  v-model="gsis">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputPhilhealth">Philhealth</label>
					<input class="form-control" id="inputPhilhealth" type="text"  v-model="philhealth">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputBloodType">Blood type</label>
					<input class="form-control" id="inputBloodTYpe" type="text"  v-model="blood_type">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputHeight">Height</label>
					<input class="form-control" id="inputHeight" type="text"  v-model="height">
				</div>
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputWeight">Weight</label>
					<input class="form-control" id="inputWeight" type="text"  v-model="weight">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputMobileNumber">Mobile Number</label>
					<input class="form-control" id="inputMobileNumber" type="text"  v-model="mobile">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputTelephoneNumber">Telephone Number</label>
					<input class="form-control" id="inputTelephoneNumber" type="text"  v-model="telephone">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputEmail">Email</label>
					<input class="form-control" id="inputEmail" type="text"  v-model="email">
				</div>
			</div>
		</div>
		</b-collapse>
	</div>
</template>

<script>
import { PersonalDetails } from './data/defaultValues.js'

	export default {
		name: 'personal-details',
		props: ['index'],
		data() {
			return {
				...PersonalDetails
			}

		}, 
		mounted(){
			let profile_id = window.location.pathname.split('/')[2]; 
			axios.get(`/profile/${profile_id}/details`)
			.then(function (response) {
				Object.assign(this, response.data);
			}.bind(this))
			.catch(function (error) {
				// handle error
				console.log(error);
			})

			console.log(this.first_name);
		},
	}
</script>

<style lang="scss" scoped>

</style>