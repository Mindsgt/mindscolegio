@extends('admin')

@section('title', 'Nuevo Catedratico')

@section('content')
@if(count($errors) > 0)
<div class="alert alert-danger" role="alert">
	<h4 style="float: left;">Estado de la Operacion</h4>
	<button type="button" class="close close-alert-colegio" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button><br><hr>
	<ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
	{!! Form::open(['route' => 'admin.store.maestros', 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo...']) !!}

		{!! Form::label('dpi', 'DPI') !!}
		{!! Form::text('dpi', null, ['class' => 'form-control', 'placeholder' => '2954354....']) !!}

		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico...']) !!}

		{!! Form::label('password', 'Password') !!}
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********'])!!}
		
		{!! Form::label('role', 'Tipo:') !!}
		{!! Form::select('role', ['maestro' => 'Catedratico', 'admin' => 'Administrador'], null,['class' => 'form-control']) !!}
		<button type="submit" class="btn btn-primary">Crear</button>
	</div>

	{!! Form::close() !!}

@endsection