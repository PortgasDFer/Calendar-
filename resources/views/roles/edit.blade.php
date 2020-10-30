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
                                <li class="list-inline-item">Lista de roles</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    <a href="#">Editar rol</a>
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
                <div class="card btn_2">
                    <div class="card-header ">Editar Rol <i>{{$rol->name}}</i></div>
                    <div class="card-body card-block">
                        <form action="/roles/{{$rol->id}}" method="POST" id="registro">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="rol" name="rol" value="{{$rol->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" id="desc" name="desc" value="{{$rol->description}}" class="form-control">
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
          rol: "required",
          desc: "required"
        },
        messages: {
          rol: "Por favor ingrese un nombre al rol",
          desc:"Ingrese una descripción"
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