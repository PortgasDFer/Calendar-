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
                                <li class="list-inline-item">Mis sintomas</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    <a href="#">Registrar sintoma</a>
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
                    <div class="card-header btn_2">Registrar sintoma</div>
                    <div class="card-body card-block">
                        <form action="/sintomas" method="post" class="" id="sintomas">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="sintoma" name="sintoma" placeholder="Sintoma" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="animo" name="animo" placeholder="Animo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="hidratacion" name="hidratacion" placeholder="Hidratación" class="form-control">
                                    <input type="hidden" value="{{Auth::user()->id}}" name="id_user">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="temperatura" name="temperatura" placeholder="Temperatura" class="form-control">
                                </div>
                            </div>
                       <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="date" id="fecha" name="fecha" placeholder="Fecha" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <textarea name="nota" id="" cols="30" rows="10" class="form-control">
                                        Escriba aquí sus notas *opcional
                                    </textarea>
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
      $( "#sintomas" ).validate( {
        rules: {
          sintoma:"required",
          animo: "required",
          hidratacion: "required",
          temperatura:"required",
          fecha: "required"
        },
        messages: {
          sintoma:"¿Qué es lo que siente?",
          animo: "Ingrese su estado de animo",
          hidratacion: "Su hidratacion",
          temperatura: "Su temperatura al momento de escribir el sintoma",
          fecha:"Fecha en que presento los sintomas"
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