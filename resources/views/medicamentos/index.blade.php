@extends('layouts.general')

@section('content')
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">Usted está aquí:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item">Dashboard</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Inicio</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    <a href="#">Mis medicamentos </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8">
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				 <div class="au-card-title" style="background-image:url('images/dr.jpg');">
	                <div class="bg-overlay bg-overlay--blue"></div>
	                <h3>
	                    <i class="zmdi zmdi-account-calendar"></i>{{ date('d/m/Y') }} Sus medicamentos</h3>
	                <a href="/medicamentos/create">
                    <button class="au-btn-plus">
                      <i class="zmdi zmdi-plus"></i>
                    </button>
                  </a>
	            </div>
	            <div class="au-task js-list-load">
	            	<div class="au-task__title">
	                    <p>Medicamentos de {{Auth::user()->name}} {{Auth::user()->apellido}}</p>
	                </div>
	                <div class="au-task-list js-scrollbar3">
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                </div>
                            </div>
                            <div class="table-data__tool-right">
                                <a href="/medicamentos/create">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Registrar nuevo medicamento</button>
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                        	<table class="table table-data2" id="medicamentos">
                        		<thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                       	<th>Fecha</th>
                                       	<th>Intervalo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                        	</table>
                        </div>
	                </div>
	            </div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<img src="images/medicina.png" alt="" class="img-fluid">
		</div>
	</div>
</div>
@endsection
@section('datatables')
<script>
  $(document).ready( function () {
    $('#medicamentos').DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": false,
        "ajax": "/tablemedicamentos",
        "columns": [
            {data:'nombre_med', name:'medicamento.nombre_med'},
            {data:'cantidad_med', name:'medicamento.cantidad_med'},
            {data:'fecha', name:'medicamento.fecha'},
            {data:'intervalo', name:'medicamento.intervalo'},
            {data:'acciones',orderable:false, searchable:false}
        ],
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Medicamentos",
          "infoEmpty": "Mostrando 0 to 0 of 0 pedidos",
          "infoFiltered": "(Filtrado de _MAX_ total medicamentos)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Medicamentos",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
        }
    });
  });
</script>
@endsection