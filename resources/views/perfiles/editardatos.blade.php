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
                                <li class="list-inline-item">Inicio</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Mi perfil</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    <a href="#">Editar usuario <i>  {{$user->name}} {{$user->apellido}}</i> </a>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Configuración personal</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted m-b-15">Puede administrar sus datos de contacto, establecer una nueva contraseña o solicitar la eliminación de su cuenta.</p>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mis datos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cambiar contraseña</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Solicitar eliminación</a>
                                </li>
                            </ul>
                            <div class="tab-content pl-3 p-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3>Editar datos</h3>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header btn_2">Editar mis datos    
                                                @if(Auth::user()->foto==null)
                                                    <img src="/avatars/default.png" alt="{{Auth::user()->name}} {{Auth::user()->apellido}}"  style="width: :200px; height:  200px;"/>
                                                @else
                                                    <img src="/avatars/{{Auth::user()->foto}}" alt="{{Auth::user()->name}} {{Auth::user()->apellido}}" style="width: :200px; height:  200px;"/>
                                                @endif 
                        <i>  {{$user->name}} {{$user->apellido}}</i></div>
                                            <div class="card-body card-block">
                                                <form action="/actualizar/{{$user->slug}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                   <div class="form-group">
                                                    Nombre
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    Apellido
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <input type="text" id="apellido" name="apellido" value="{{$user->apellido}}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                    Foto de perfil
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <input type="file" id="avatar" name="avatar" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    Email
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </div>
                                                            <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    Edad
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <input type="text" id="edad" name="edad" value="{{$user->edad}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    Dirección
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <input type="text" id="direccion" name="direccion" value="{{$user->direccion}}" class="form-control">
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
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3>Cambiar contraseña</h3>
                                    <p>Ingrese su nueva contraseña</p>
                                    <form action="/cambiarPassword/{{$user->slug}}" method="POST" id="passwords">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar contraseña" class="form-control">
                                            </div>
                                        </div>
                                        <button class="btn btn_2 btn-block" type="submit">Confirmar password</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <h3>Solicitar eliminación</h3>
                                    <p>Su cuenta será eliminada en cuanto un administrador lo apruebe en un lapso de 20 a 30 días.</p>
                                </div>
                            </div>
                        </div>
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
      $( "#passwords" ).validate( {
        rules: {
            password: {
                required: true,
                minlength: 8
            },
            confirm_password: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            }
        },
        messages: {
            password: {
                required: "Por favor ingrese una contraseña",
                minlength: "La contraseña debe ser de al menos 8 caracteres"
            },
            confirm_password: {
                required: "Por favor ingrese una contraseña",
                minlength: "La contraseña debe ser de al menos 8 caracteres",
                equalTo: "Por favor introduzca la misma contraseña en ambos campos"
            }
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