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
                                <li class="list-inline-item">Rutinas</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    <a href="#">Editar rutina</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header btn_2">Editar rutina <i>{{$rutina->nombre}}</i></div>
                    <div class="card-body card-block">
                        <form action="/rutinas/{{$rutina->id_rutina}}" method="post" class="" id="rutina">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="">Nombre de la rutina</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="nombre" name="nombre" value="{{$rutina->nombre}}" class="form-control">
                                    <input type="hidden" value="{{Auth::user()->id}}" name="id_user">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="">Fecha</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="date" id="fecha" name="fecha" value="{{$rutina->Fecha}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="">Tiempo</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" id="tiempo" name="tiempo" value="{{$rutina->tiempo}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
@endsection
@section('validator')
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    $( document ).ready( function () {
      $( "#rutina" ).validate( {
        rules: {
          nombre: "required",
          fecha: "required",
          tiempo: "required"
        },
        messages: {
          nombre: "Por favor ingrese un nombre a la rutina",
          fecha:  "Por favor ingrese una fecha",
          tiempo: "Ingrese tiempo de la rutina"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `invalid-feedback` class to the error element
          error.addClass( "invalid-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      } );

    } );
</script>
@endsection