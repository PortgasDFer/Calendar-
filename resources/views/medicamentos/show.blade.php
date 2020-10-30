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
                                    <a href="#">Mis medicamentos: <i>Paracetamol 500mg</i> </a>
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
            <div class="card">  
                <div class="card-header btn_2"> Nombre del medicamento: <i> Paracetamol</i></div>
                <div class="card-body"> 
                        Hora inicio <i> 10:00 AM</i>
                        <hr>    
                        Intervalo de tiempo: Cada 8 horas
                        <hr>    
                        Fecha: 25/06/2020
                        <hr>    
                        <button class="btn btn_2"> Editar</button>
                        <button class="btn btn-danger"> Eliminar</button>
                </div>
            </div>
        </div>
        <div class="col">
            <img src="images/medicina.png" alt="" class="img-fluid">
        </div>
    </div>
</div>

@endsection