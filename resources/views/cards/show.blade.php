@extends('layout')


@section('content')


<div class="page-header">
  <h1>{{$card->title}}</h1>
</div>

<div class="row">
<ul class="list-group">
@foreach($card->notes as $note)

	<li class="list-group-item">{{ $note->body }}<a href="/notes/{{$note->id}}/delete">X</a></li>

@endforeach

</ul>
</div>

<form method="POST" action="/cards/{{ $card->id }}/notes">
	<label>Add a new note</label>
	
	<div class="form-group">
		<textarea name="body" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<button class="btn btn-primary" type="submit">Add note</button>
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

<a href="/cards">Go back to cards</a>

@stop