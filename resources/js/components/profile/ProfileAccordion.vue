<template>
<!-- Begin Page Content -->
<div class="container-fluid">
	
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Profile | Edit</h1>
	</div>

	<!-- Employment Status -->
	<employment-status></employment-status>
	
	<!-- Personal Details -->
	<personal-details index="2"></personal-details>
	
	<!-- Work experience -->
	<work-experience index="3"></work-experience>
	<eligibilities index="4"></eligibilities>

	<!-- Education -->
	<education index="5"></education>
	<family-background index="6"></family-background>
	<!-- Address -->
	<profile-address index="7"></profile-address>


</div>
<!-- /.container-fluid -->
</template>

<script>
import Education from './Education'
import EmploymentStatus from './EmploymentStatus'
import FamilyBackground from './FamilyBackground.vue'
import PersonalDetails from './PersonalDetails'
import WorkExperience from './WorkExperience'
import ProfileAddress from './ProfileAddress'
import Eligibilities from './Eligibilities'

	export default {
		components: {
			PersonalDetails,
			WorkExperience,
			Education,
			EmploymentStatus,
			FamilyBackground,
			ProfileAddress,
			Eligibilities
		}
		
	}
</script>