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
			<div class="form-group">
				<textarea name="title" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add card</button>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>

	</div>
</div>

@stop
