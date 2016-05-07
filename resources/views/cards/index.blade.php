@extends('layout')

@section('content')

<div class="row">

	<div class="col-md-6 col-md-offset-3">
		<h1>All Cards</h1>
		<ul class="list-group">
			@foreach ($cards as $card)
				<li class="list-group-item"><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></li> 
			@endforeach
		</ul>

		<hr>
		<h3>Add an new card</h3>
		<form method="POST" action="/cards">
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="title" class="form-control">{{ old('title') }}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add card</button>
			</div>
		</form>

		@if (count($errors))
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif

	</div>
</div>

@stop
