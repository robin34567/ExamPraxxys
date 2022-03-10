<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li> Home</a></li>
			<li class="active"><a href="<?php echo e(url('/main')); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
		</ol>
	</section>
	<!-- Main Content -->
	<section class="content">
		<Sample></Sample>	
	</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Examproject\resources\views/main.blade.php ENDPATH**/ ?>