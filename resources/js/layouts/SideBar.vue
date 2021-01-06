<template>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" :class="{ toggled:this.isToggled }" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon">
                    <img class="img-fluid" :src="imagesrc" alt="no-logo">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item" :class="{active: activeNav == 0}">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>POP</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Employee
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" :class="{active: activeNav == 1}">
                <a class="nav-link" href="/profile">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <nav-item 
               icon="fa-wrench"
               :index="index"
               @update-index="updateIndex"
               name="Utilities"
               title="Custom Utilities"
               :items="[
               {name: 'Colors', url: 'utilities-color.html'},
               {name: 'Borders', url: 'index.html'},
               {name: 'Animations', url: 'index.html'},
               {name: 'Other', url: 'index.html'},
               ]"
            ></nav-item>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle" @click="toggleSideBar"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
</template>

<script>
import Fragment from 'vue-fragment'
import NavItem from '../components/NavItem'

	export default {
		components: {NavItem},
		data() { 
			return {
                isToggled: false,
                index: 0
			}
		},
		methods: {
			toggleSideBar() {
				this.isToggled = !this.isToggled
            },
            updateIndex(index) {
                this.index = index
            },
        },
        computed: {
            activeNav() {
                let currentURLPath = window.location.pathname.match(/(?<=^\/)\w+/)?.toString()
                let routes = ['pop', 'profile']
                console.log(routes.indexOf(currentURLPath))
                return routes.indexOf(currentURLPath)
            },
            imagesrc(){
                return  window.location.origin + "/img/poslogo.png" 
            }
        }
	}
</script>

<style lang="scss" scoped>
.sidebar-brand {
    height: auto
}
</style>