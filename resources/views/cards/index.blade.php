@extends('layout')



@section('content')

<div class="page-header">
  <h1>All Cards</h1>
</div>

@foreach( $cards as $card)

	<a href="{{ $card->path() }}"><p>{{$card->title}}</p></a>

@endforeach

@stop