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
                                <li class="list-inline-item">Lista de farmacias</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    Editar farmacia <i>{{$farmacia->nombre_far}}</i>
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
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header btn_2">Editar farmacia <i> {{$farmacia->nombre_far}}</i><hr><img src="/imgfar/{{$farmacia->imagen}}" alt="" class="img-fluid" style="height: 150px; width: 150px;"></div>
                    <div class="card-body card-block">
                        <form action="/farmacias/{{$farmacia->id_farmacia}}" method="post" class="" id="editF" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="nombreFarmacia" name="nombreFarmacia" placeholder="Nombre de la farmacia" class="form-control" value="{{$farmacia->nombre_far}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <h3>Dirección</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="">Calle</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" id="calle" name="calle" value="{{$farmacia->calle}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="">Número</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" id="numero" name="numero" value="{{$farmacia->numero}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="">Colonia</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" id="colonia" name="colonia" value="{{$farmacia->colonia}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="">Código postal</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" id="cp" name="cp" value="{{$farmacia->cp}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="">Municipio o delegación</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" id="municipio" name="municipio" value="{{$farmacia->municipio}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="">Ciudad</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" id="ciudad" name="ciudad" value="{{$farmacia->ciudad}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="tel" id="telefono" name="telefono" placeholder="Telefono" class="form-control" value="{{$farmacia->telefono_far}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Imagen de la farmacia o logo <small>opcional</small></label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <input type="file" id="imagen" name="imagen" class="form-control">
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Editar</button>
                            </div>
                        </form>
                    </div>
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
@section('validator')
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    $( document ).ready( function () {
      $( "#registro" ).validate( {
        rules: {
          nombreFarmacia: "required",
          calle: "required",
          numero: "required",
          colonia:"required",
          cp:     "required",
          municipio: "required",
          ciudad:"required",
          telefono: "required"
        },
        messages: {
          nombreFarmacia: "Por favor ingrese el nombre de la Farmacia",
          calle:"Por favor ingrese un nombre de calle",
          numero: "Por favor ingrese número",
          colonia:"Por favor ingrese la colonia",
          cp:"Por favor ingrese código postal",
          municipio:"Por favor ingrese municipio o delegación",
          ciudad:"Por favor ingrese la ciudad donde se localiza la farmacia",
          telefono:"Ingrese el número de teléfono de la Farmacia"
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
