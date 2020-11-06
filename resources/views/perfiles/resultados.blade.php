@extends('layouts.general')

@section('content')
<!-- BREADCRUM-->
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">Se encuentra aquí</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="/home">Inicio</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item"></i>
									busqueda de farmacias
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END BREADCRUMB-->
<div class="container">
	<div class="row justify-content-center">	
			<h2>Encuentre farmacias cercanas a su domicilio</h2>
	</div>
	<div class="row justify-content-center">	
		<form class="form-header" action="/buscar" method="POST">
			@csrf
			@method('GET')
            <input class="au-input au-input--xl" type="text" name="search" placeholder="Busqueda" />
            <button class="au-btn--submit" type="submit">
                <i class="zmdi zmdi-search"></i>
            </button>
        </form>
	</div>

	<div class="row">	
		<div class="col-12 row justify-content-center mt-3">
        <h2>Resultados de la busqueda</h2>	
		</div>
	</div>
    <div class="row mt-2">
        @forelse($farmacias as $f)
        <div class="col-xs-12 col-sm-12">
            <div class="card flex-row flex-wrap">
                <div class="card-header border-0">
                    <img src="/imgfar/{{$f->imagen}}" alt="{{$f->nombre_far}}" style="width: 200px; height: 200px;">
                </div>
                <div class="card-block px-2">
                    <h4 class="card-title">{{$f->nombre_far}}</h4>
                    <p class="card-text">Dirección</p>
                    <p class="card-text">Calle <i>{{$f->calle}}</i> #{{$f->numero}}</p>
                    <p class="card-text">Ciudad: {{$f->ciudad}} / Municipio o delegación: {{$f->municipio}}</p>
                    <p class="card-text">Código Postal: {{$f->cp}} / Telefono: {{$f->telefono_far}}</p>
                    <a href="{{$f->map_far}}" target="_blank">
                        <button class="btn btn-info"><i aria-hidden="true"></i> Ver en Mapas</button>
                    </a>
                </div>
                <div class="w-100"></div>
                <div class="card-footer w-100  btn_2">
                    Calendar+
                </div>
            </div>
        </div>
        @empty
            <h2>No hay resultados de busqueda.</h2>
        @endforelse
    </div>
</div>
@endsection