<template>
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Education</h6>
        </div>
        <div class="card-body">
            <h5 class="font-weight-bold">Graduate Studies</h5>
            <hr />
            <div v-if="graduate_studies.length > 0">
                <div v-for="gs in graduate_studies" :key="gs.id">
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-4">
                            <label class="small mb-1">School Name</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="gs.name"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-4">
                            <label class="small mb-1">Degree</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="gs.track"
                            />
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">From</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="gs.start_date"
                            ></b-form-datepicker>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">To</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="gs.end_date"
                            ></b-form-datepicker>
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-3">
                            <label class="small mb-1"
                                >Highest Level/ Units Earned</label
                            >
                            <input
                                class="form-control"
                                type="text"
                                v-model="gs.attainment"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-2">
                            <label class="small mb-1">Year Graduated</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="gs.year_graduated"
                            />
                        </div>
                        <div class="form-group col-md-7">
                            <label class="small mb-1"
                                >Scholarship / Academic Honors Received</label
                            >
                            <input
                                class="form-control"
                                type="text"
                                v-model="gs.awards"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="font-weight-bold">College</h5>
            <hr />
            <div v-if="college.length > 0">
                <div v-for="co in college" :key="co.id">
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-4">
                            <label class="small mb-1">School Name</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="co.name"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-4">
                            <label class="small mb-1">Degree</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="co.track"
                            />
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">From</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="co.start_date"
                            ></b-form-datepicker>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">To</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="co.end_date"
                            ></b-form-datepicker>
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-3">
                            <label class="small mb-1"
                                >Highest Level/ Units Earned</label
                            >
                            <input
                                class="form-control"
                                type="text"
                                v-model="co.attainment"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-2">
                            <label class="small mb-1">Year Graduated</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="co.year_graduated"
                            />
                        </div>
                        <div class="form-group col-md-7">
                            <label class="small mb-1"
                                >Scholarship / Academic Honors Received</label
                            >
                            <input
                                class="form-control"
                                type="text"
                                v-model="co.awards"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="font-weight-bold">Vocational / Trade Course</h5>
            <hr />
            <div v-if="vocational.length > 0">
                <div v-for="voc in vocational" :key="voc.id">
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-4">
                            <label class="small mb-1">School Name</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="voc.name"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-4">
                            <label class="small mb-1">Course</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="voc.track"
                            />
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">From</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="voc.start_date"
                            ></b-form-datepicker>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">To</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="voc.end_date"
                            ></b-form-datepicker>
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-3">
                            <label class="small mb-1"
                                >Highest Level/ Units Earned</label
                            >
                            <input
                                class="form-control"
                                type="text"
                                v-model="voc.attainment"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-2">
                            <label class="small mb-1">Year Graduated</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="voc.year_graduated"
                            />
                        </div>
                        <div class="form-group col-md-7">
                            <label class="small mb-1"
                                >Scholarship / Academic Honors Received</label
                            >
                            <input
                                class="form-control"
                                type="text"
                                v-model="voc.awards"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="font-weight-bold">Secondary</h5>
            <hr />
            <div v-if="secondary.length > 0">
                <div v-for="sec in secondary" :key="sec.id">
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-4">
                            <label class="small mb-1">School Name</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="sec.name"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-2">
                            <label class="small mb-1">From</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="sec.start_date"
                            ></b-form-datepicker>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">To</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="sec.end_date"
                            ></b-form-datepicker>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">Highest Level</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="sec.attainment"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-2">
                            <label class="small mb-1">Year Graduated</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="sec.year_graduated"
                            />
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-12">
                            <label class="small mb-1"
                                >Scholarship / Academic Honors Received</label
                            >
                            <input
                                class="form-control"
                                type="text"
                                v-model="sec.awards"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="font-weight-bold">Elementary</h5>
            <hr />
            <div v-if="elementary.length > 0">
                <div v-for="ele in elementary" :key="ele.id">
                    <div class="form-row">
                        <!-- Form Group (first name)-->
                        <div class="form-group col-md-4">
                            <label class="small mb-1">School Name</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="ele.name"
                            />
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="form-group col-md-2">
                            <label class="small mb-1">From</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="ele.start_date"
                            ></b-form-datepicker>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">To</label>
                            <b-form-datepicker
                                id="datepicker-dateformat1"
                                :date-format-options="{
                                    year: '2-digit',
                                    month: '2-digit',
                                    day: '2-digit'
                                }"
                                placeholder="Pick Date"
                                v-model="ele.end_date"
                            ></b-form-datepicker>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">Highest Level</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="ele.attainment"
                            />
                        </div>
                        <div class="form-group col-md-2">
                            <label class="small mb-1">Year Graduated</label>
                            <input
                                class="form-control"
                                type="text"
                                v-model="ele.year_graduated"
                            />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="small mb-1"
                                >Scholarship / Academic Honors Received</label
                            >
                            <input
                                class="form-control"
                                type="text"
                                v-model="ele.awards"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Education } from "./data/defaultValues.js";

export default {
    name: "education",
    props: ["index"],
    data() {
        return {
            ...Education,
            graduate_studies: [],
            college: [],
            vocational: [],
            secondary: [],
            elementary: []
        };
    },
    mounted() {
        let education_id = window.location.pathname.split("/")[2];
        var _this = this;
        axios
            .get(`/profile/${education_id}/education`)
            .then(
                function(response) {
                    // Object.assign(this, response.data);
                    console.log(response.data);
                    var level = [
                        "graduate_studies",
                        "college",
                        "vocational",
                        "secondary",
                        "elementary"
                    ];
                    response.data.forEach(function(element) {
                        if (level.includes(element.level)) {
                            _this[element.level].push(element);
                        }
                    });
                    level.forEach(
                        function(el) {
                            if (this[el].length < 1) {
                                this[el].push({
                                    name: "",
                                    track: "",
                                    start_date: "",
                                    end_date: "",
                                    attainment: "",
                                    year_graduated: "",
                                    awards: ""
                                });
                            }
                        }.bind(this)
                    );
                }.bind(this)
            )
            .catch(function(error) {
                // handle error
                console.log(error);
            });

        console.log(this.education);
    }
};
</script>
