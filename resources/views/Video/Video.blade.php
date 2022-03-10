@extends('layouts.appVideo')

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Video
			<small>Video display</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/main') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Video</li>
		</ol>
	</section>
	<!-- Main Content -->
	<section class="content">
		<Videomod></Videomod>
	</section>
</div>
@endsection