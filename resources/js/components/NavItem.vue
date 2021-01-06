<template>
	<li class="nav-item">
		<a href class="nav-link" v-b-toggle="'collapse-' + name" @click.prevent="toggleSideBar" :class="{ collapsed:!isToggled }" data-toggle="collapse">
			<i class="fas fa-fw" :class="this.icon"></i>
			<span>{{this.name}}</span>
		</a>
		<b-collapse :id="'collapse-' + name" >
		<div class="collapse show">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">{{this.title}}:</h6>
				<a v-for="nav in this.items" class="collapse-item" :href="nav.url">{{nav.name}}</a>
			</div>
		</div>
		</b-collapse>
	</li>
</template>

<script>
	export default {
		props: ['name','title','items', 'index', 'icon'],
		data() {
			return {
				collapsing: false,
			}
		},
		methods: {
			toggleSideBar() {
				let id = this.isToggled || this._uid
				this.$emit('update-index', id)
			}
		},
		computed: {
		 isToggled() {
			 return this._uid === this.index
		 }	
		},
	}
</script>
