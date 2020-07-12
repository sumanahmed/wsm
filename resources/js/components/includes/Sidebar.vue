<template>
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
	    <!-- Brand Logo -->
	    <a href="#" class="brand-link">
	      <span class="brand-text font-weight-light">WSM</span>
	    </a>
	    <!-- Sidebar -->
	    <div class="sidebar">
	      <nav>
	        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">	
				<li class="nav-item">
					<router-link to="/" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</router-link>
				</li>

				<li class="nav-item">
					<router-link to="/client" class="nav-link">
						<i class="nav-icon fas fa-users"></i>
						<p>Clients</p>
					</router-link>
				</li>
	        </ul>
	      </nav>
	      <!-- /.sidebar-menu -->
	    </div>
	    <!-- /.sidebar -->
	</aside>	
</template>
<script>
	export default {
		name:'Sidebar'
	}
</script>