@extends('app')

@section('content')
	<div class="col-lg-8 col-md-12 col-sm-12 col-lg-offset-2">
	  <div class="box box-primary">
					{{-- first get ci instance --}}
      <div class="box-header">
        <h3 class="box-title">Categories List</h3>
						@php
						  $ci = &get_instance();
						@endphp
						@if ($ci->session->flashdata('success'))
							<div class="alert alert-success">{{ $ci->session->flashdata('success') }}</div>
						@endif
        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody><tr>
            <th>ID</th>
            <th>Name</th>
            <th>Create Date</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          	@foreach ($categories as $category)
		          <tr>
			            <td>{{ $category->id }}</td>
			            <td>{{ $category->name }}</td>
			            <td>{{ $category->created_at }}</td>
			            <td><a href="#" type="submit" name="add" class="btn btn-sm btn-primary">Edit</a></td>
			            <td><a href="#" type="submit" name="add" class="btn btn-sm btn-danger">Delete</a></td>
		          </tr>
          	@endforeach
        </tbody></table>
      </div>
      <!-- /.box-body -->
    </div>
	</div>
@endsection