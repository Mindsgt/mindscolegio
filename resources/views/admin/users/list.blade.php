@extends('admin')

@section('title', 'Catedraticos')

@section('content')
<link  href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<div id="content">
<a href="{{ route('admin.create.maestros') }}" style="text-decoration: none; color: #000;"><button type="button" class="btn btn-light"><img src="{{ asset('/images/person_add.svg') }}">Nuevo Catedratico</button></a>
	<table class="table table-bordered" id="myTable">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
            <th>DPI</th>
			<th>Correo</th>
			<th>Tipo</th>
            <th>Acciones</th>
		</thead>
	</table>
</div>
@endsection
@section('scripts')
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
    $('#myTable').DataTable({
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
    "class": "details-control",
    "orderable": false,
    "data": null,
    "defaultContent": "",
    "processing": true,
   	"serverSide": true,
    "ajax": '/api/users',
    "columns":[
    	{data: 'id'},
    	{data: 'name'},
        {data: 'dpi'},
    	{data: 'email'},
    	{data: 'role'},
        {data: 'id', name: 'id', searchable: false, orderable: false},
    ],
    "columnDefs":[
     {
        "targets": 5,
        createdCell: function(td, id, row, col) {
        show="{!! URL::to('/admin/vercatedratico/"+id+"') !!}";
        edit="{!! URL::to('/admin/editarcatedratico/"+id+"') !!}";
        deleted="{{ route('admin.index.encargados') }}";
        $(td).html(buttonsTable(show,edit,deleted, true));
        }
     }
    ]
    });
});
</script>
@endsection