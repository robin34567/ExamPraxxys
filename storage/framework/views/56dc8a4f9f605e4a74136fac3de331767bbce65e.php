<header class="main-header">
	<a href="<?php echo e(url('/HRIndex')); ?>" class="logo">
	  <span class="logo-mini"><b>HRIS</b></span>
	  <span class="logo-lg"><b>Human</b> Resources</span>
	</a>
	
	<nav class="navbar navbar-static-top">

	  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </a>

	  <div class="navbar-custom-menu">
	    <ul class="nav navbar-nav">
	      <li class="dropdown user user-menu">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php echo e(Auth::user()->name); ?>

	        </a>

	        <ul class="dropdown-menu">
	          <!-- Menu Footer-->
	          <li class="user-footer">
				<a class="dropdown-item btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>"
					onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
					<?php echo e(__('Logout')); ?>

				</a>
	              
				<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
					<?php echo csrf_field(); ?>
				</form>
	          </li>
	        </ul>

	      </li>
	    </ul>
	  </div>
	</nav>
</header>

<aside class="main-sidebar">

	<section class="sidebar">
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu" data-widget="tree">
	    <li class="header">MAIN NAVIGATION</li>
	    <li class="<?php echo e((request()->is(array('main'))) ? 'active': ''); ?>">
	      	<a href="/main">
				<i class="fa fa-dashboard"></i> <span>Dashboard</span>
			</a>
		</li>
		<li class="<?php echo e((request()->is(array('product'))) ? 'active': ''); ?>">
			<a href="/product">
			  <i class="fa fa-bar-chart"></i> <span>Product</span>
		  	</a>
	  	</li>
		<li class="<?php echo e((request()->is(array('videos'))) ? 'active': ''); ?>">
			<a href="/videos">
			  <i class="fa fa-film"></i> <span>Videos</span>
		  	</a>
		</li>
	</ul>
	</section>
	<!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\Examproject\resources\views/Navbar/Sidebar.blade.php ENDPATH**/ ?>