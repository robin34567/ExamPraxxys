@extends('layouts.app')

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li> Home</a></li>
			<li class="active"><a href="{{ url('/main') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
		</ol>
	</section>
	<!-- Main Content -->
	<section class="content">
		<Sample></Sample>	
	</section>
</div>
@endsection