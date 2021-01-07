<template>
    <div class="form-row" style="border-bottom: 1px solid #E3E6F0;">

        <div class="form-group col-md-3">
            <label class="small mb-1" for="inputFirstName">Eligibility</label>
            <input class="form-control" id="eligibility" type="text"  :value="firstname"
             v-on:input="(event) => this.$emit('changeValue', event)"
            >
        </div>

        <div class="form-group col-md-1">
            <label class="small mb-1" for="inputLastName">Rating</label>
            <input class="form-control" id="rating" type="text"  :value="lastname"
            v-on:input="(event) => this.$emit('changeValue', event)"
            >
        </div>
        <div class="form-group col-md-2">
            <label class="small mb-1" for="inputMiddleName">Date</label>
            <b-form-datepicker
                id="exam_date"
                :date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
                v-on:input="(event) => this.$emit('changeValue', event)"
            ></b-form-datepicker>
        </div>
        <div class="form-group col-md-2">
            <label class="small mb-1" for="inputLastName">Place of Exam</label>
            <input class="form-control" id="place" type="text"  :value="suffix"
            v-on:input="(event) => this.$emit('changeValue', event)"
            >
        </div>
        <div class="form-group col-md-2">
            <label class="small mb-1" for="inputLastName">Number</label>
            <input class="form-control" id="validity" type="text"  :value="suffix"
            v-on:input="(event) => this.$emit('changeValue', event)"
            >
        </div>
        <div class="form-group col-md-2">
            <label class="small mb-1" for="number">Validity</label>
            <b-form-datepicker
                id="datepicker-dateformat1"
                :date-format-options="{ year: '2-digit', month: '2-digit', day: '2-digit' }" placeholder="Pick Date"
                v-on:input="(event) => this.$emit('changeValue', event)"
            ></b-form-datepicker>
        </div>
       <!-- eligibility
rating
exam_date
place
validity
number
index-->
    </div>
</template>

<script>
	export default {
        name: 'eligibility',
        props: ['data', 'objectIndex'],
		data() {
			return {
				lastname: null,	firstname: null, middlename: null,	suffix: null,
				age: null,	POB: null,	citizenship: null,	civil_status: null,
				gender: null,	sss: null,	gsis: null,	philhealth: null,
				blood_type: null,	height: null,	weight: null,	height: null,
				mobile: null,	telephone: null,	email: null,
			}

		},
		methods: {
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
            this.firstname = this.data.name;
            this.lastname = this.data.id;
            console.log("eligibility");
            console.log("item object:", this.profileData);
		}
	}
</script>

<style lang="scss" scoped>

</style>