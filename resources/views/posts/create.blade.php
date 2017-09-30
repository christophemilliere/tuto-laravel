@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 blog-main">
		<h1>Crée un article</h1>
		<form method="POST" action="/posts">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Titre :</label>
				<input type="text" class="form-control" id="title" name="title" aria-describedby="title" >
			</div>
			<div class="form-group">
				<label for="body">Body : </label>
				<textarea name="body" id="body" class="form-control" ></textarea></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Publier</button>
		</form>
		@include ('layouts.errors')
	</div>
@endsection