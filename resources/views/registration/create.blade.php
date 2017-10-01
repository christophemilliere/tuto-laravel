@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8">
		<h1>Register</h1>

		<form action="/register" method="POST">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">name :</label>
				<input type="text" class="form-control" id="name" name="name" aria-describedby="name" >
			</div>

			<div class="form-group">
				<label for="email">Email :</label>
				<input type="text" class="form-control" id="email" name="email" aria-describedby="email" >
			</div>
			<div class="form-group">
				<label for="password">Password :</label>
				<input type="password" class="form-control" id="password" name="password" aria-describedby="password" >
			</div>
			<div class="form-group">
				<label for="password_confirmation">Password confirmation :</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" aria-describedby="password_confirmation" >
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
		</form>
		@include ('layouts.errors')
	</div>
@endsection