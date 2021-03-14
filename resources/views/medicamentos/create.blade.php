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
                                <li class="list-inline-item">Lista de medicamentos</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    <a href="#">Registrar medicanto</a>
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
                    <div class="card-header btn_2">Registrar medicamento</div>
                    <div class="card-body card-block">
                        <form action="/medicamentos" method="post" enctype="multipart/form-data" id="medicamento">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre del medicamento</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="medicamento" name="medicamento" placeholder="Nombre del medicamento" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Dosis del medicamento</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="cantidad" name="cantidad" placeholder="Cantidad" class="form-control">
                                    <input type="hidden" value="{{Auth::user()->id}}" name="id_user">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de inicio</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="date" id="fecha" name="fecha" placeholder="Fecha" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Hora</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="time" id="hora" name="hora" placeholder="Hora" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="intervalo" name="intervalo" placeholder="Intervalo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Foto del medicamento</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="file" id="foto" name="foto" placeholder="Intervalo" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Notas</label>
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
      $( "#medicamento" ).validate( {
        rules: {
          medicamento:  "required",
          cantidad:  {
            number: true,
            required: true
          },   
          fecha:        "required",
          hora:         "required",
          intervalo:    "required"
        },
        messages: {
          medicamento: "Por favor ingrese un nombre a su medicamento",
          cantidad: {
                    required:"¿Qué dosis de medicamento debe consumir?",
                    number:"Ingrese el numero de tabletas o mililitros"
                },
          fecha:    "¿En qué fecha termina su tratamiento?",
          hora: "Ingrese hora de la primera dosis",
          intervalo : "¿Cada cuanto tiempo debe consumirla?"
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