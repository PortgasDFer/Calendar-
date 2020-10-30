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
                                    <a href="#">Inicio</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Perfil <i>{{$user->name}} {{$user->apellido}}</i></li>
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
	<div class="row">
		<div class="col-lg-4">
			<aside class="profile-nav alt">
                <section class="card">
                    <div class="card-header user-header alt bg-dark">
                        <div class="media">
                            <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="/avatars/{{$user->foto}}">
                            </a>
                            <div class="media-body">
                                <h2 class="text-light display-6">{{$user->name}} {{$user->apellido}}</h2>
                            </div>
                        </div>
                    </div>


                    <ul class="list-group list-group-flush">
                    	<li class="list-group-item">
                            <a href="/configuracion/{{Auth::user()->slug}}">
                               	<button class="btn btn_2">Editar datos</button>
                            </a>
                        </li>
                       <li class="list-group-item">
                            <a href="#">
                                <i class="fa fa-tasks"></i> Tratamientos activos
                                &nbsp;<span class="badge badge-danger pull-right">Proximamente...</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/medicamentos">
                                <i class="fa fa-envelope-o"></i> Mis medicamentos
                                 &nbsp;<span class="badge badge-primary pull-right">{{$medicamentos}}</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/rutinas">
                                <i class="fa fa-bell-o"></i> Rutinas
                                &nbsp;<span class="badge badge-success pull-right"> {{$rutinas}} </span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/sintomas">
                                <i class="fa fa-comments-o"></i> Seguimiento de sintomas
                                &nbsp;<span class="badge badge-success pull-right"> {{$sintomas}} </span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>
		</div>
		<div class="col-lg-8">
			<div class="task-progress">
                <h3 class="title-3">Progreso de su tratamiento </h3><small>Disponible en la siguiente versión de calendar+</small>
                <div class="au-skill-container">
                    <div class="au-progress">
                        <span class="au-progress__title">Dosis de paracetamol</span>
                        <div class="au-progress__bar">
                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="90">
                                <span class="au-progress__value js-value"></span>
                            </div>
                        </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">Dosis de amoxicilina</span>
                        <div class="au-progress__bar">
                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="85">
                                <span class="au-progress__value js-value"></span>
                            </div>
                        </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">Dosis de penicilina</span>
                        <div class="au-progress__bar">
                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="100">
                                <span class="au-progress__value js-value"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div class="row">
        @forelse($medicinas as $med)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="/fotosmed/{{$med->foto}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{$med->nombre_med}}</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div>
        </div>
        @empty
        <p>Aún no registra medicinas</p>
        @endforelse
	</div>
</div>
@endsection