@extends('layouts.general')

@section('content')
<section class="au-breadcrumb m-t-85">
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
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            @if(Auth::user()->apellido==null)
            <div class="row">
            	<div class="col-md-12">
            		<div class="alert alert-warning" role="alert">
					  Por favor complete su registro <a href="/configuracion/{{Auth::user()->slug}}" class="alert-link">haciendo click aquí</a>. .
					</div>
            	</div>
            </div>
            @endif
        </div>
    </div>
</section>
<div class="container">
	@if(Auth::user()->hasRole('admin'))
	<!-- STATISTI-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">{{$numusers}}</h2>
                            <span class="desc">Usuarios registrados</span>
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number"><span class="badge badge-danger pull-right">Proximamente...</span></h2>
                            <span class="desc">tratamientos seguidos</span>
                            <div class="icon">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">{{$numfarmacia}}</h2>
                            <span class="desc">Farmacias</span>
                            <div class="icon">
                                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">{{$nummedic}}</h2>
                            <span class="desc">Medicamentos</span>
                            <div class="icon">
                                <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--STATISTIC-->
	@else
	<div class="row">
	    <div class="col-lg-6">
	        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
	            <div class="au-card-title" style="background-image:url('images/unnamed.jpg');">
	                <div class="bg-overlay bg-overlay--blue"></div>
	                <h3>
	                    <i class="zmdi zmdi-account-calendar"></i>
	                    <?php $dt = new DateTime(); 
						echo $dt->format('d-M-Y'); ?>
	                </h3>
	                <a href="/medicamentos/create">
	                	<button class="au-btn-plus">
	                    	<i class="zmdi zmdi-plus"></i>
	                	</button>
	                </a>
	            </div>
	            <div class="au-task js-list-load">
	                <div class="au-task__title">
	                    <p>Dosis de hoy <i>{{Auth::user()->name}} {{Auth::user()->apellido}}</i></p>
	                </div>
	                <div class="au-task-list js-scrollbar3">
	                	@forelse($medicamentos as $medicamento)
	                	<div class="au-task__item au-task__item--danger">
	                        <div class="au-task__item-inner">
	                            <h5 class="task">
	                                <a href="/medicamentos/{{$medicamento->id_medicamento}}/edit">{{$medicamento->nombre_med}}</a>
	                            </h5>
	                            <span class="time">{{$medicamento->hora}}/{{$medicamento->intervalo}}</span>
	                        </div>
	                    </div>
	                	@empty
	                	No hay medicamentos aún, <a href="/medicamentos/create">registre uno aquí.</a>
	                	@endforelse
	                </div>
	                <div class="au-task__footer">
	                    <button class="au-btn au-btn-load js-load-btn">cargar más</button>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="col-lg-6">
	        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
	            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
	                <div class="bg-overlay bg-overlay--blue"></div>
	                <h3>
	                    <i class="zmdi zmdi-comment-text"></i>¿Cómo te has sentido?</h3>
	                    <a href="/sintomas/create">
	                    	<button class="au-btn-plus">
	                    		<i class="zmdi zmdi-plus"></i>
	                		</button>
	                    </a>
	            </div>
	            <div class="au-inbox-wrap js-inbox-wrap">
	                <div class="au-message js-list-load">
	                    <div class="au-message__noti">
	                        <p>
	                        	Registra aquí tus sintomas, si persisten las molestias visite a su medico.
	                        </p>
	                    </div>
	                    <div class="au-message-list">
	                        @forelse($sintomas as $s)
		                    <div class="au-task__item au-task__item--danger">
		                        <div class="au-task__item-inner">
		                            <h5 class="task">
		                                <a href="/sintomas/{{$s->id_sintomas}}">{{$s->sintoma}}</a>
		                            </h5>
		                            <span class="time">Fecha: {{$s->created_at}}</span>
		                        </div>
		                    </div>
		               		@empty
		                <p>No hay sintomas registrados.</p>
	                		@endforelse
	                    </div>
	                    <div class="au-message__footer">
	                        <button class="au-btn au-btn-load js-load-btn">cargar más</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	@endif
</div>
@endsection
