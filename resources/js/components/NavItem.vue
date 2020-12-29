<template>
	<li class="nav-item">
		<a class="nav-link" @click.stop.prevent="toggleSideBar" :class="{ collapsed:!isToggled }" data-toggle="collapse" data-target="#collapseTwo"
			href="index.html"
			:aria-expanded="isToggled" aria-controls="collapseTwo">
			<i class="fas fa-fw" :class="this.icon"></i>
			<span>{{this.name}}</span>
		</a>
		<div id="collapseTwo" class="" :class="{collapsing:collapsing, collapse:!collapsing, show:!collapsing && isToggled}" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">{{this.title}}:</h6>
				<a v-for="nav in this.items" class="collapse-item" :href="nav.url">{{nav.name}}</a>
			</div>
		</div>
	</li>
</template>

<script>
	export default {
		props: ['name','title','items', 'updateIndex', 'index', 'icon'],
		data() {
			return {
				collapsing: false,
			}
		},
		methods: {
			toggleSideBar() {
				let id = this.isToggled || this._uid
				this.updateIndex(id)
			}
		},
		computed: {
		 isToggled() {
			 return this._uid === this.index
		 }	
		},
	}
</script>

<style lang="scss" scoped>
</style>