@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">{{ $card->title }}</div>

				<ul class="list-group">
					@foreach ($card->notes as $note)
					<li class="list-group-item">
						{{ $note->body }}
						<div class="pull-right">
							<a href="#"> {{ $note->user->name }} </a>
							<a href="/notes/{{ $note->id }}/edit" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-edit"></span></a>
						</div>
					</li>
					@endforeach
				</ul>

				<hr>
				<div class="panel-heading">Add an new note</div>
				<form method="POST" action="/cards/{{ $card->id }}/notes">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" class="form-control">{{ old('body') }}</textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add note</button>
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
	</div>
</div>

@stop
