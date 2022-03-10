<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Product
			<small>Product list</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(url('/main')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Product</li>
		</ol>
	</section>
	<!-- Main Content -->
	<section class="content">
		<product-index></product-index>
	</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Examproject\resources\views/Products/ProductIndex.blade.php ENDPATH**/ ?>