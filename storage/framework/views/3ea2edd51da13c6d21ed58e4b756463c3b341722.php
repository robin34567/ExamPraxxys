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
        <link rel="stylesheet" href="<?php echo e(asset("/Custom/dist/css/AdminLTE.min.css")); ?>">
        <link rel="stylesheet" href="<?php echo e(asset("/Custom/dist/css/skins/_all-skins.min.css")); ?>">

        <link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" />
        
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
    <script src="<?php echo e(asset("/Custom/bower_components/fastclick/lib/fastclick.js")); ?>"></script>
	<script src="<?php echo e(asset("/Custom/dist/js/adminlte.min.js")); ?>"></script>
    <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </body>
</html>

<script type="text/javascript">
	
	
</script><?php /**PATH C:\xampp\htdocs\Examproject\resources\views/layouts/appVideo.blade.php ENDPATH**/ ?>