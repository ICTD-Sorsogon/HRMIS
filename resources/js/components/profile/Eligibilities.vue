<template>
	<div class="card shadow">
		<div class="card-header sticky py-2 d-flex justify-content-between align-items-center">
			<h6 class="m-0 font-weight-bold text-primary">Eligibilities</h6>
			<div>
				<span class="btn btn-success btn-sm">Save</span>
				<span class="btn btn-primary btn-sm" @click="addEligibility">Add</span>
			</div>
		</div>
		<div class="card-body">

			<eligibility-component v-for="(item, index) in el_data" :key="item.id" :data="item"  :object-index="index" v-on:changeValue="handleChange"/>
			<!--<div class="form-row" style="background-color:green;">

				<div class="form-group col-md-3">
					<label class="small mb-1" for="inputFirstName">Eligibility</label>
					<input class="form-control" id="inputFirstName" type="text"  :value="firstname">
				</div>

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
			</div>-->
		</div>
	</div>
</template>

<script>
   //import { component } from 'vue/types/umd'

	import EligibilityComponent from './child/Eligibility'

	export default {
		name: 'eligibilities',
		props: ['index'],
		components: {
			'eligibility-component': EligibilityComponent
		},
		data() {
			return {
				lastname: null,	firstname: null, middlename: null,	suffix: null,
				age: null,	POB: null,	citizenship: null,	civil_status: null,
				gender: null,	sss: null,	gsis: null,	philhealth: null,
				blood_type: null,	height: null,	weight: null,	height: null,
				mobile: null,	telephone: null,	email: null,
				el_data:[
					{
						id: 1,
						name: 'ma',
						age: '23'
					},
					{
						id: 2,
						name: 'ma1',
						age: '24'
					},
					{
						id: 3,
						name: 'ma2',
						age: '25'
					}
				],
				key: 3,
				name: '',
				parent_data_model: ''
			}

		},
		methods: {
			addEligibility() {
				this.key += 1;
				this.el_data.push({
					id: this.key,
					name: '',
					age: ''
				})
			},
			handleChange(event) {
				const { value } = event.target;
				console.log("change:", event.target.id);
			}

			/*getEligibilities() {
				let profile_id = window.location.pathname.split('/')[2];
				axios.get(`/profile/${profile_id}/details`)
				.then(function (response) {
					Object.assign(this, response.data);
				}.bind(this))
				.catch(function (error) {})
			}*/
		},
		mounted() {
			console.log("eligibilities");
		}
	}
</script>

<style lang="scss" scoped>

</style>