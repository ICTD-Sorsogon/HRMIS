<template>
<!-- Begin Page Content -->
<div class="container-fluid">
	
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Profile | Edit</h1>
	</div>
	<b-tabs content-class="mt-3">
		<b-tab title="Personal Details" active>	
			<!-- Employment Status -->
			<employment-status></employment-status>
			<!-- Personal Details -->
			<personal-details index="2"></personal-details>
				<!-- Address -->
			<profile-address index="7"></profile-address>
		</b-tab>
		<b-tab title="Family Background">
			<family-background index="6"></family-background>
		</b-tab>
		<b-tab title="Work Experience">	
			<!-- Work experience -->
			<work-experience index="3"></work-experience>
		</b-tab>
		<b-tab title="Eligibility">
			<eligibilities index="4"></eligibilities>
		</b-tab>
		<b-tab title="Education">
			<!-- Education -->
			<education index="5"></education>
		</b-tab>
		<b-tab title="Voluntary Work">
			<!-- Education -->
			<voluntary-work index="5"></voluntary-work>
		</b-tab>
		<b-tab title="Training">
			<!-- Education -->
			<training index="5"></training>
		</b-tab>
	</b-tabs>

	


</div>
<!-- /.container-fluid -->
</template>

<script>
import * as ProfileComponents from './index'

	export default {
		components: {...ProfileComponents }
	}
</script>