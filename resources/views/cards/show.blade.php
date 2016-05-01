@extends('layout')
@section('content')

<div class="row">

	<div class="col-md-6 col-md-offset-3">
		<h1>{{ $card->title }}</h1>

		<ul class="list-group">
			@foreach ($card->notes as $note)
			<li class="list-group-item">{{ $note->body }} <a href="/notes/{{ $note->id }}/edit" class="btn btn-sm btn-danger pull-right"><span class="glyphicon glyphicon-edit"></span></a> </li>
			@endforeach
		</ul>

		<hr>
		<h3>Add an new note</h3>
		<form method="POST" action="/cards/{{ $card->id }}/notes">
			<div class="form-group">
				<textarea name="body" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add note</button>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>

	</div>
</div>

@stop
