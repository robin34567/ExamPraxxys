<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Video
			<small>Video display</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(url('/main')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Video</li>
		</ol>
	</section>
	<!-- Main Content -->
	<section class="content">
		<Videomod></Videomod>
	</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appVideo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Examproject\resources\views/Video/Video.blade.php ENDPATH**/ ?>