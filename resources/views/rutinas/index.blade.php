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
                                    <a href="#">Mis rutinas </a>
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
	            <div class="au-card-title" style="background-image:url('images/ejercicio.jpg');">
	                <div class="bg-overlay bg-overlay--blue"></div>
	                <h3>
	                    <i class="zmdi zmdi-account-calendar"></i>{{ date('d/m/Y') }} Rutinas</h3>
	                <a href="/rutinas/create">
	                	<button class="au-btn-plus">
	                    	<i class="zmdi zmdi-plus"></i>
	                	</button>
	                </a>
	            </div>
	            <div class="au-task js-list-load">
	                <div class="au-task__title">
	                    <p>Rutinas para {{Auth::user()->name}} {{Auth::user()->apellido}}</p>
	                </div>
					<div class="au-task-list js-scrollbar3">
					@forelse ($rutinas as $r)
	                    <div class="au-task__item au-task__item--danger">
	                        <div class="au-task__item-inner">
	                            <h5 class="task">
	                                <a href="/rutinas/{{$r->id_rutina}}">{{$r->nombre}}</a>
	                            </h5>
	                            <span class="time">{{$r->tiempo}}</span>
	                        </div>
	                    </div>
	                    @empty
					    <p>No hay rutinas agregadas.</p>
					@endforelse
	                </div>	                
	                <div class="au-task__footer">
	                    <button class="au-btn au-btn-load js-load-btn">Cargar más</button>
	                </div>
	            </div>
	        </div>
		</div>
		<div class="col">
			<img src="images/rutinas.png" alt="" class="img-fluid">
			<a href="/rutinas/create">
				<button class="btn btn-block btn_2">	Agregar nueva rutina</button>
			</a>
		</div>

	</div>
</div>
@endsection