@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">Notiz ändern</div>

				<form method="POST" action="/notes/{{ $note->id }}">
					{{ csrf_field() }}
					{{ method_field('PATCH') }}
					<div class="form-group">
						<textarea name="body" class="form-control">{{ $note->body }}</textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Notiz ändern</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop