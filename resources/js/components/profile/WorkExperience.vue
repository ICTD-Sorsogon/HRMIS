<template>
	<div class="card shadow">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Work Experience</h6>
		</div>
		<div class="card-body">
			<div class="form-row flex-row-reverse">
				<span class="btn btn-primary btn-sm">Add</span>
			</div>
			<hr/>
			<div class="form-row">
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputFirstName">From</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputFirstName">To</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-8">
					<label class="small mb-1" for="inputMiddleName">Department / Office / Company</label>
					<input class="form-control" id="inputLastName" type="text"  :value="lastname">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputLastName">Position</label>
					<input class="form-control" id="inputLastName" type="text"  :value="lastname">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputLastName">Monthly Salary</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputLastName">Salary Grade</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputMiddleName">Status of Appointment</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" for="inputMiddleName">Gov't, Service</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputLastName">Immediate Supervisor</label>
					<input class="form-control" id="inputLastName" type="text"  :value="lastname">
				</div>
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputLastName">Name of Agency</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
				<div class="form-group col-md-4">
					<label class="small mb-1" for="inputLastName">Location</label>
					<input class="form-control" id="inputLastName" type="text"  :value="suffix">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
				</div>
				<div class="form-group col-md-4">
				</div>
			</div>
			
		</div>
	</div>
</template>

<script>
	export default {
		props: ['index']	
	}
</script>
