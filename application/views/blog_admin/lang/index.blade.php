@extends('app')

@section('content')
@php 
  $ci = & get_instance()  
@endphp
	<div class="col-lg-8 col-md-12 col-sm-12 col-lg-offset-2">
	  <div class="box box-primary">
					{{-- first get ci instance --}}
      <div class="box-header">
          
        </div>
      </div>
      <!-- /.box-header -->
      <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-lg-offset-4">
                {!! form_open('admin/langs/index') !!}
                  <div class="box-body">
                      <div class="form-group">
                        {!! form_label('Language', 'lang', $attributes=array()) !!}
                        @php
                            $options = [
                                "" => "Choose language",
                                "0" => "English",
                                "1" => "Bangla"
                            ];
                        @endphp

                        {!! form_dropdown('lang', $options, set_value('lang'), ['class' => 'form-control', 'id' => 'lang']) !!}
                        <span class="help-block error">{!! form_error('lang') !!}</span>
                    </div>
                      <div><button class="btn btn-primary">Change Language</button></div>
                  </div>
              {!! form_close() !!}
          </div>
      </div>
      <!-- /.box-body -->
    </div>
	</div>
@endsection