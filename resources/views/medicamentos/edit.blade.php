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
                                    <a href="#">Editar medicanto <i>{{$medicamento->nombre_med}}</i></a>
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
                    <div class="card-header btn_2">Editar medicanto 
                        @if($medicamento->foto==null)
                        <img class="rounded-circle mx-auto d-block" src="/fotosmed/default.png" alt="Card image cap" style="width: 200px; height: 200px;">
                        @else
                        <img class="rounded-circle mx-auto d-block" src="/fotosmed/{{$medicamento->foto}}" alt="Card image cap" style="width: 200px; height: 200px;">
                        @endif
                     <i>{{$medicamento->nombre_med}}</i></div>
                    <div class="card-body card-block">
                        <form action="/medicamentos/{{$medicamento->id_medicamento}}" method="post" class="" id="medicamento" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                            <div class="form-group">
                                 <label for="">Nombre del medicamento</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="medicamento" name="medicamento" value="{{$medicamento->nombre_med}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad de dosis</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="cantidad" name="cantidad" value="{{$medicamento->cantidad_med}}" class="form-control">
                                    <input type="hidden" value="{{Auth::user()->id}}" name="id_user">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de inicio</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="date" id="fecha" name="fecha" value="{{$medicamento->fecha}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Hora de consumo</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="time" id="hora" name="hora" value="{{$medicamento->hora}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Intervalo de tiempo</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="intervalo" name="intervalo" value="{{$medicamento->intervalo}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Foto del medicamento</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="file" id="foto" name="foto"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Notas o contraindicaciones</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <textarea name="nota" id="" cols="30" rows="10" class="form-control">
                                        {{$medicamento->nota}}
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
        $( document ).ready( function () {
          $( "#medicamento" ).validate( {
            rules: {
              medicamento:  "required",
              cantidad:     "required",
              fecha:        "required",
              hora:         "required",
              intervalo:    "required"
            },
            messages: {
              medicamento: "Por favor ingrese un nombre a su medicamento",
              cantidad: "¿Qué dosis de medicamento debe consumir?",
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