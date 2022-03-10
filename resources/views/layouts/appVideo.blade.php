<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset("/Custom/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("/Custom/bower_components/font-awesome/css/font-awesome.min.css")}}">
        <link rel="stylesheet" href="{{asset("/Custom/dist/css/AdminLTE.min.css")}}">
        <link rel="stylesheet" href="{{asset("/Custom/dist/css/skins/_all-skins.min.css")}}">

        <link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" />
        {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
		@include('Navbar.Sidebar')
		
	<div id="app">
		@yield('content')
	</div>

    <script src="{{asset("/Custom/bower_components/jquery/dist/jquery.min.js")}}"></script>
	<script src="{{asset("/Custom/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("/Custom/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
	<script src="{{asset("/Custom/bower_components/fastclick/lib/fastclick.js")}}"></script>
    <script src="{{asset("/Custom/bower_components/fastclick/lib/fastclick.js")}}"></script>
	<script src="{{asset("/Custom/dist/js/adminlte.min.js")}}"></script>
    <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>

<script type="text/javascript">
	{{--  $('.select2').select2()
	
	$('[data-mask]').inputmask()  --}}
	{{--  window.onbeforeunload = function () {
		return "Yehey";	
	};  --}}
</script>