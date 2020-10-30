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
                                <li class="list-inline-item">Lista de usuarios</li>
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
@if(Auth::user()->hasRole('admin'))
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header btn_2 ">Datos del usuario    <img class="rounded-circle mx-auto d-block" src="/avatars/{{$user->foto}}" alt="Card image cap" style="width: 100px; height: 100px;"> <i>   {{$user->name}} {{$user->apellido}}</i></div>
                    <card class="body"> 
                        Nombre:   {{$user->name}} {{$user->apellido}}
                        <hr>    
                        Edad:  {{$user->edad}} años
                        <hr>    
                        Dirección: {{$user->direccion}}
                        <hr>    
                        Correo:  {{$user->email}}
                        <hr>    
                        <a href="/usuarios">
                            <button class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Regresar</button>
                        </a>
                    </card>
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