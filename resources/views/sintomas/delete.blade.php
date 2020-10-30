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
                                <li class="list-inline-item">Inicio</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    <a href="#">Mis sintomas </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
	<div class="row">
		<div class="col">
	        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
	            <div class="au-card-title" style="background-image:url('/images/dr.jpg');">
	                <div class="bg-overlay bg-overlay--blue"></div>
	                <h3>
	                    <i class="zmdi zmdi-account-calendar"></i>{{$sintoma->sintoma}}</h3>
	                <button class="au-btn-plus">
	                    <i class="zmdi zmdi-plus"></i>
	                </button>
	            </div>
	            <div class="card-body">
	            	Animo <i>{{$sintoma->animo}}</i>
	            	<hr>
	            	Temperatura <i>{{$sintoma->temperatura}}</i>
	            	<hr>
	            	Hidratación <i>{{$sintoma->hidratacion}}</i>
	            	<hr>
	            	Fecha <i>{{$sintoma->created_at}}</i>
	            	<hr>
	            	Notas:
	            	<i>{{$nota->nota}}</i>
	            	<hr>
	            	<a href="/sintomas/{{$sintoma->id_sintomas}}/edit">
	            		<button class="btn btn_2"> Editar</button>
	            	</a>
	            	<form action="/sintomas/{{$sintoma->id_sintomas}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger "> ELIMINAR</button>
                    </button>
                    </form>
	            </div>
	        </div>
		</div>
		<div class="col">
			<img src="/images/enfermera.jpg" alt="" class="img-fluid" style="width: 420px; height: 686px;">
		</div>

	</div>
</div>
@endsection