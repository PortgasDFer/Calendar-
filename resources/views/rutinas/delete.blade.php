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
                                    <a href="/rutinas">Mis rutinas </a>
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
                <div class="card-header btn_2"> Rutina: <i> {{$rutina->nombre}}</i></div>
                <div class="card-body"> 
                        Nombre: <i> {{$rutina->nombre}}</i>
                        <hr>    
                        Tiempo: {{$rutina->tiempo}}
                        <hr>    
                        Fecha: {{$rutina->Fecha}}
                        <hr>    
                        <a href="/rutinas/{{$rutina->id_rutina}}/edit"><button class="btn btn_2 btn-block"> EDITAR</button></a>
                        <div></div>
                        <form action="/rutinas/{{$rutina->id_rutina}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger "> ELIMINAR</button>
                        </button>
                        </form>
                        
                </div>
            </div>
        </div>
        <div class="col">
            <img src="/images/rutinas.png" alt="" class="img-fluid">
        </div>
    </div>
</div>

@endsection