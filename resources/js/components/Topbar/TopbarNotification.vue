<template>
    <!-- Nav Item - Alerts -->
		<li class="nav-item dropdown no-arrow mx-1" :class="{ show: isToggled }" @click="toggle" v-click-outside="closeDropDown">
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" :aria-expanded="isToggled">
				<i class="fas fa-bell fa-fw"></i>
				<!-- Counter - Alerts -->
				<span class="badge badge-danger badge-counter">3+</span>
			</a>
			<!-- Dropdown - Alerts -->
			<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" :class="{ show: isToggled }"
				aria-labelledby="alertsDropdown">
				<h6 class="dropdown-header">
					Alerts Center
				</h6>
				<a class="dropdown-item d-flex align-items-center" href="#" v-bind:key="notif.id" v-for="notif in notifications">
					<div class="mr-3">
						<div class="icon-circle bg-primary">
							<i class="fas text-white" v-bind:class="{
								'fa-donate':notif.type=='transaction', 
								'fa-file-alt':notif.type=='report', 
								'fa-exclamation-triangle':notif.type=='alert'}"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">{{notif.date}}</div>
						<span class="font-weight-bold"><span v-if="notif.type=='transaction'">{{notif.amount}}</span> {{notif.msg}}</span>
					</div>
				</a>
				<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
			</div>
		</li>
</template>

<script>
export default {
	name: "Notification",
	methods: {
		toggle() {
			this.isToggled = !this.isToggled
		},
		closeDropDown() {
			this.isToggled = false
		}
	},
	data(){
		return {
			isToggled: false,
			notifications:[
				{
					id: 1,
					date: "December 12, 2019",
					type: "report",
					msg: "A new monthly report is ready to download!",
					amount: ""
				},
				{
					id: 2,
					date: "December 12, 2019",
					type: "transaction",
					msg: "has been deposited into your account!",
					amount: "$290.29"
				},
				{
					id: 3,
					date: "December 12, 2019",
					type: "alert",
					msg: "We've noticed unusually high spending for your account.",
					amount: ""
				},
			]
		}
	}
	
}
</script>

<style lang="stylus" scoped>

</style>