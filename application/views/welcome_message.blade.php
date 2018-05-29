@extends('app')


@section('content')
@php 
  $ci = & get_instance()  
@endphp

<div class="col-lg-8 col-md-12 col-sm-12 col-lg-offset-2">
		<div class="box box-primary">
					  {{-- first get ci instance --}}
		<div class="box-header">
		  <h3 class="box-title">Message</h3>		
		</div>
		<div>

			@if ($ci->session->flashdata('success'))
				<div class="alert alert-success">{{ $ci->session->flashdata('success') }}</div>
			@endif
		</div>
	</div>
</div>
@endsection