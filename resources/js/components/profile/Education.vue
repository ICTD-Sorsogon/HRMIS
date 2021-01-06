<template>
	<div class="card shadow">
		<a class="card-header py-3" data-toggle="collapse" @click.prevent href="#" v-b-toggle="'accordion-' + index" >
			<h6 class="m-0 font-weight-bold text-primary">Education</h6>
		</a>
		<b-collapse :id="'accordion-' + index" accordion="my-accordion" role="tabpanel">
		<div class="card-body">
			<h5 class="font-weight-bold">Graduate Studies</h5>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >School Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >Degree</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >From</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >To</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
			</div>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-3">
					<label class="small mb-1" >Highest Level/ Units Earned</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-2">
					<label class="small mb-1" >Year Graduated</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-7">
					<label class="small mb-1" >Scholarship / Academic Honors Received</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
			</div>
			<h5 class="font-weight-bold">College</h5>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >School Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >Degree</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >From</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >To</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
			</div>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-3">
					<label class="small mb-1" >Highest Level/ Units Earned</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-2">
					<label class="small mb-1" >Year Graduated</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-7">
					<label class="small mb-1" >Scholarship / Academic Honors Received</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
			</div>
			<h5 class="font-weight-bold">Vocational / Trade Course</h5>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >School Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >Course</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >From</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >To</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
			</div>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-3">
					<label class="small mb-1" >Highest Level/ Units Earned</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-2">
					<label class="small mb-1" >Year Graduated</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
				<div class="form-group col-md-7">
					<label class="small mb-1" >Scholarship / Academic Honors Received</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
			</div>
			<h5 class="font-weight-bold">Secondary</h5>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >School Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-2">
					<label class="small mb-1" >From</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >To</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >Highest Level</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-2">
					<label class="small mb-1" >Year Graduated</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
			</div>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-12">
					<label class="small mb-1" >Scholarship / Academic Honors Received</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
			</div>
			<h5 class="font-weight-bold">Elementary</h5>
			<hr>
			<div class="form-row">
				<!-- Form Group (first name)-->
				<div class="form-group col-md-4">
					<label class="small mb-1" >School Name</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<!-- Form Group (last name)-->
				<div class="form-group col-md-2">
					<label class="small mb-1" >From</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >To</label>
					<b-form-datepicker
						id="datepicker-dateformat1"
						:date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
					></b-form-datepicker>
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >Highest Level</label>
					<input class="form-control"  type="text"  :value="spouse_first_name">
				</div>
				<div class="form-group col-md-2">
					<label class="small mb-1" >Year Graduated</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="small mb-1" >Scholarship / Academic Honors Received</label>
					<input class="form-control"  type="text"  :value="spouse_last_name">
				</div>
			</div>
		</div>
		</b-collapse>
	</div>	
</template>

<script>
	export default {
		props: ['index']
		
	}
</script>
