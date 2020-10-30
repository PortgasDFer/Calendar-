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
                                    <a href="#">Lista de farmacias </a>
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
<div class="container">
	<div class="row">
		<div class="col">
	        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
	            <div class="au-card-title" style="background-image:url('images/dr.jpg');">
	                <div class="bg-overlay bg-overlay--blue"></div>
	                <h3>
	                    <i class="zmdi zmdi-account-calendar"></i>Farmacia parís</h3>
	                <button class="au-btn-plus">
	                    <i class="zmdi zmdi-plus"></i>
	                </button>
	            </div>
	            <div class="card-body">
	            	Nombre Farmacia parís
	            	<hr>
	            	Dirección <i>CDMX Centro. Republica de uruguay #17</i>
	            	<hr>
	            	Telefono: <i>	5559855421</i>
	            	<hr>
	            	<button class="btn btn_2"> Editar</button>
                        <button class="btn btn-danger"> Eliminar</button>
	            </div>
	        </div>
		</div>
		<div class="col">
			<img src="images/farmacia.png" alt="" class="img-fluid">
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