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

	<div class="">	
		<div class="col-12 row justify-content-center mt-3">	
				<img src="/images/loading.gif" alt="" class="img-fluid">
		</div>
	</div>
</div>
@endsection