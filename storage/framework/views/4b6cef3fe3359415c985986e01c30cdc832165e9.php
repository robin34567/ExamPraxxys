<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo e(config('app.name')); ?></title>
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="<?php echo e(asset("/Custom/bower_components/bootstrap/dist/css/bootstrap.min.css")); ?>">
	    <link rel="stylesheet" href="<?php echo e(asset("/Custom/bower_components/font-awesome/css/font-awesome.min.css")); ?>">
	    <link rel="stylesheet" href="<?php echo e(asset("/Custom/bower_components/Ionicons/css/ionicons.min.css")); ?>">
	    <link rel="stylesheet" href="<?php echo e(asset("/Custom/bower_components/bootstrap-daterangepicker/daterangepicker.css")); ?>">
	    <link rel="stylesheet" href="<?php echo e(asset("/Custom/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")); ?>">
		<link rel="stylesheet" href="<?php echo e(asset("/Custom/bower_components/select2/dist/css/select2.min.css")); ?>">
		<link rel="stylesheet" href="<?php echo e(asset("/Custom/plugins/timepicker/bootstrap-timepicker.min.css")); ?>">
	    <link rel="stylesheet" href="<?php echo e(asset("/Custom/dist/css/AdminLTE.min.css")); ?>">
	    <link rel="stylesheet" href="<?php echo e(asset("/Custom/dist/css/skins/_all-skins.min.css")); ?>">
		<link rel="stylesheet" href="<?php echo e(asset("/Custom/dataTables/css/dataTables.bootstrap.min.css")); ?>"/>
		<link rel="stylesheet" href="<?php echo e(asset("/Custom/dataTables/css/responsive.bootstrap.min.css")); ?>">
		
	</head>

	<body class="hold-transition skin-blue sidebar-mini">
		<?php echo $__env->make('Navbar.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
	<div id="app">
		<?php echo $__env->yieldContent('content'); ?>
	</div>


	<script src="<?php echo e(asset("/Custom/bower_components/jquery/dist/jquery.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/bower_components/bootstrap/dist/js/bootstrap.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/bower_components/fastclick/lib/fastclick.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/bower_components/moment/min/moment.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/bower_components/bootstrap-daterangepicker/daterangepicker.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/plugins/input-mask/jquery.inputmask.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/plugins/input-mask/jquery.inputmask.date.extensions.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/plugins/input-mask/jquery.inputmask.extensions.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/bower_components/select2/dist/js/select2.full.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/plugins//timepicker/bootstrap-timepicker.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/bower_components/fastclick/lib/fastclick.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/dist/js/adminlte.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/dist/js/demo.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/dataTables/js/jquery.dataTables.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/dataTables/js/dataTables.bootstrap.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/dataTables/js/dataTables.responsive.min.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/dataTables/js/responsive.bootstrap.min.js")); ?>"></script>
	<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
	</body>
</html>

<script type="text/javascript">
	$('.select2').select2()
	
	$('[data-mask]').inputmask()
	
</script><?php /**PATH C:\xampp\htdocs\Examproject\resources\views/layouts/app.blade.php ENDPATH**/ ?>