@extends('layouts.app')

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Product
			<small>Product list</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/main') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Product</li>
		</ol>
	</section>
	<!-- Main Content -->
	<section class="content">
		<product-index></product-index>
	</section>
</div>
@endsection