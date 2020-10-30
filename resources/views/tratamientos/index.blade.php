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
                                <li class="list-inline-item">Mi tratamiento</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
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
    <div class="col-lg-6">
        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
            <div class="au-card-title" style="background-image:url('images/unnamed.jpg');">
                <div class="bg-overlay bg-overlay--blue"></div>
                <h3>
                    <i class="zmdi zmdi-account-calendar"></i>26 de junio 2020</h3>
                <button class="au-btn-plus">
                    <i class="zmdi zmdi-plus"></i>
                </button>
            </div>
            <div class="au-task js-list-load">
                <div class="au-task__title">
                    <p>Dosis de hoy <i>Dick Grayson</i></p>
                </div>
                <div class="au-task-list js-scrollbar3">
                    <div class="au-task__item au-task__item--danger">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Paracetamol 750mg</a>
                            </h5>
                            <span class="time">10:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--warning">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Penicilina</a>
                            </h5>
                            <span class="time">11:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--primary">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Paracetamol 750mg</a>
                            </h5>
                            <span class="time">04:00 PM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--success">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Treda</a>
                            </h5>
                            <span class="time">07:30 PM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--danger js-load-item">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Meeting about plan for Admin Template 2018</a>
                            </h5>
                            <span class="time">10:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--warning js-load-item">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">11:00 AM</span>
                        </div>
                    </div>
                </div>
                <div class="au-task__footer">
                    <button class="au-btn au-btn-load js-load-btn">cargar más</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="images/doctor.png" alt="" class="img-fluid">
    </div>
</div>
</div>
@endsection