@extends('admin')

@section('title', 'Encargado/ {{$encargados->nombre}}')

@section('content')

	<p>{{$encargados->nombre}}</p>
@endsection