@extends('admin')

@section('title', 'Encargados')

@section('content')
<link  href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<div id="content">
<a href="{{ route('admin.create.encargados') }}" style="text-decoration: none; color: #000;"><button type="button" class="btn btn-light"><img src="{{ asset('/images/group_add.svg') }}">Nuevo Encargado</button></a>
	<table class="table table-bordered" id="myTableEnc">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
            <th>DPI</th>
            <th>Telefono</th>
			<th>Correo</th>
			<th>Parentesco</th>
		</thead>
	</table>
</div>
@endsection
@section('scripts')
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
    $('#myTableEnc').DataTable({
    	 "language": {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior",
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente",
    }
},
    "processing": true,
   	"serverSide": true,
    "ajax": '/api/encargados',
    "columns":[
    	{data: 'id'},
    	{data: 'nombre'},
    	{data: 'apellido'},
        {data: 'dpiencargado'},
    	{data: 'telefono'},
    	{data: 'email'},
    	{data: 'parentesco'},
    ]
    });
});
</script>
@endsection