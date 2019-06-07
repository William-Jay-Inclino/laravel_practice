@extends('layouts.app')

@section('content')
	<h1>{{$title}}</h1>
	@if($services)
		@foreach($services as $service)
			<li> {{$service}} </li>
		@endforeach
	@endif
@endsection
