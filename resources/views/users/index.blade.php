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
                                <li class="list-inline-item">Usuarios</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if(Auth::user()->hasRole('admin'))
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Lista de usuarios</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">Mostrar 10 registros</option>
                                    <option value="">Mostrar 25 registros</option>
                                    <option value="">Mostrar 50 registros</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="/usuarios/create">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Registrar nuevo usuario
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2" id="usuarios">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Edad</th>
                                    <th>Dirección</th>
                                   	<th>Fecha de registro</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="spacer"></tr>
                                <tr class="tr-shadow">
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
		</div>
	</div>
</div>
@else
    <div class="main-content">  
        <div class="container-fluid"> 
          <div class="row"> 
            <div class="col-12">  
                <div class="alert alert-danger" role="alert">
                  No tienes rol de administrador. <a href="/home" class="alert-link">click aquí para ir al inicio</a>. No puedes acceder a este sitio.
                </div>
            </div>
          </div>
        </div>
    </div>
@endif
@endsection
@section('datatables')
<script>
  $(document).ready( function () {
    $('#usuarios').DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": false,
        "ajax": "/tableusers",
        "columns": [
            {data:'avatar',orderable:false, searchable:false},
            {data:'name'},
            {data:'apellido'},
            {data: 'email'},
            {data:'edad'},
            {data: 'direccion'},
            {data:'created_at'},
            {data:'acciones',orderable:false, searchable:false}
        ],
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
          "infoEmpty": "Mostrando 0 to 0 of 0 pedidos",
          "infoFiltered": "(Filtrado de _MAX_ total usuarios)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Roles",
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
