@extends('app')


@section('content')
	<h1><span class="glyphicon glyphicon-user"></span>  Welcome to CodeIgniter!</span></h1>
	<div id="page-header">
		<form action="" method="POST" role="form">

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email">
				<span class="help-block">{!! form_error('email') !!}</span>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="email">
				<span class="help-block">{!! form_error('password') !!}</span>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	{{ config_item('language') }}
	<p>{{ $subjects['ok'] }}</p>
	<p>{{ $subjects['gd'] }}</p>
	<p>{{ $subjects['msg'] }}</p>

	<br>
	{{-- {{ lang("msg_view_english") }} --}}
@endsection