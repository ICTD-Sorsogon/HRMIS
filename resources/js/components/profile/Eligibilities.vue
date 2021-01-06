<template>
	<div class="card shadow">
		<div class="card-header sticky py-2 d-flex justify-content-between align-items-center">
			<h6 class="m-0 font-weight-bold text-primary">Eligibilities</h6>
			<div>
				<span class="btn btn-success btn-sm">Save</span>
				<span class="btn btn-primary btn-sm">Add</span>
			</div>
		</div>
		<div class="card-body">
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputFirstName">Eligibility</label>
					<input class="form-control" id="inputFirstName" type="text"  :value="firstname">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-1">
					<label class="small mb-1" for="inputLastName">Rating</label>
					<input class="form-control" id="inputLastName" type="text"  :value="lastname">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputMiddleName">Date</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputLastName">Place of Exam</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputLastName">Number</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputMiddleName">Validity</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
			</div>
		</div>
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