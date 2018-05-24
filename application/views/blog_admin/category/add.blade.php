@extends('app')

@section('content')

<div class="col-lg-6 col-lg-offset-3 col-sm-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Category</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
   {!! form_open('admin/categories/add') !!}
      <div class="box-body">
        <div class="form-group">
          <label class="control-label" for="category">
            Category name
          </label>
          <input type="text" class="form-control" name="category" id="category" placeholder="Category name">
          <span class="has-error">{!! form_error('category') !!}</span>
        </div>
        {{-- <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">

          <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div> --}}
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="add" class="btn btn-primary">Submit</button>
      </div>
{!! form_close() !!}
  </div>
</div>
  {{-- expr --}}
@endsection