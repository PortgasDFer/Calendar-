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
                                <li class="list-inline-item">Lista de Farmacias</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    Consultar Farmacia <i>{{$farmacia->nombre_far}}</i>
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
                    <div class="card-header btn_2">Consultar Farmacia <i>{{$farmacia->nombre_far}}</i>
                        <hr>
                        <img src="/imgfar/{{$farmacia->imagen}}" alt="" class="img-fluid" style="height: 150px; width: 150px;">
                    </div>
                    <div class="card-body card-block">
                        Nombre de la Farmacia: <i>{{$farmacia->nombre_far}}</i>
                        <hr>
                        Dirección: <i>{{$farmacia->calle}} #{{$farmacia->numero}} <br>Colonia:{{$farmacia->colonia}} <br>Ciudad:{{$farmacia->ciudad}} <br>Delegación o municipio: {{$farmacia->municipio}} <br>Código postal: {{$farmacia->cp}}</i>
                        <hr>
                        Teléfono: <i>{{$farmacia->telefono_far}}</i>
                        <hr>
                        <a href="/farmacias">
                            <button class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button>
                        </a>
                    </div>
                    </div>
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