@extends('admin')

@section('title', 'Nuevo Encargado')

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
	{!! Form::open(['route' => 'admin.store.encargados', 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('nombre', 'Nombres') !!}
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombres...']) !!}

		{!! Form::label('apellido', 'Apellidos') !!}
		{!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellidos...']) !!}

		{!! Form::label('parentesco', 'Parentesco') !!}
		{!! Form::text('parentesco', null, ['class' => 'form-control', 'placeholder' => 'Parentesco...']) !!}

		{!! Form::label('dpiencargado', 'DPI') !!}
		{!! Form::text('dpiencargado', null, ['class' => 'form-control', 'placeholder' => '2987452....']) !!}

		{!! Form::label('telefono', 'Telefono') !!}
		{!! Form::tel('telefono', null, ['class' => 'form-control', 'placeholder' => '54231245', 'maxlength' => '8']) !!}

		{!! Form::label('direccion', 'Direccion') !!}
		{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => '12 Av. 13...']) !!}

		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico...']) !!}
		<hr>
		{!! Form::label('encargadoaux', 'Nombre') !!}
		{!! Form::text('encargadoaux', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo...']) !!}

		{!! Form::label('parentescoaux', 'Parentesco') !!}
		{!! Form::text('parentescoaux', null, ['class' => 'form-control', 'placeholder' => 'Parentesco Enc. Aux...']) !!}

		{!! Form::label('telefonoaux', 'Telefono') !!}
		{!! Form::text('telefonoaux', null, ['class' => 'form-control', 'placeholder' => 'Telefono Enc. Aux...', 'maxlength' => '8']) !!}
		<button type="submit" class="btn btn-primary">Crear</button>
		<a href="{{ route('admin.index.encargados') }}" style="text-decoration: none; color: #000;"><button type="button" class="btn btn-secondary">Cancelar</button></a>
	</div>
	{!! Form::close() !!}
@endsection