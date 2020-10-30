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
                                <li class="list-inline-item">Roles</li>
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
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <h3 class="title-5 m-b-35">Lista de roles</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                </div>
                <div class="table-data__tool-right">
                    <a href="/roles/create">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>Registrar nuevo rol</button>
                    </a>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2" id="roles">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
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
    $('#roles').DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": false,
        "ajax": "/tableroles",
        "columns": [
            {data:'name'},
            {data:'description'},
            {data:'created_at'},
            {data:'acciones',orderable:false, searchable:false}
        ],
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
          "infoEmpty": "Mostrando 0 to 0 of 0 pedidos",
          "infoFiltered": "(Filtrado de _MAX_ total roles)",
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
