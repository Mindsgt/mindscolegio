@extends('admin')

@section('title', 'Maestros')

@section('content')
<link  href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<div id="content">

	<table class="table table-bordered" id="myTable">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
		</thead>
	</table>
</div>
@endsection
@section('scripts')
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
    $('#myTable').DataTable({
    "processing": true,
   	"serverSide": true,
    "ajax": '/api/users',
    "columns":[
    	{data: 'id'},
    	{data: 'name'},
    	{data: 'email'},
    	{data: 'role'},
    ]
    });
});
</script>
@endsection