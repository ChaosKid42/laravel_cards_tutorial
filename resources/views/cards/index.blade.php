@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">All Cards</div>
				<ul class="list-group">
					@foreach ($cards as $card)
					<li class="list-group-item"><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></li> 
					@endforeach
				</ul>

				<hr>
				<div class="panel-heading">Add an new card</div>
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
	</div>
</div>

@stop
