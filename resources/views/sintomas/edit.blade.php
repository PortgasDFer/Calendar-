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
                                <li class="list-inline-item">Lista de roles</li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item active">
                                    <a href="#">Registrar rol</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="col-lg-12">
                <div class="card btn_2">
                    <div class="card-header ">Editar  sintoma <i>Dolor de cabeza</i></div>
                    <div class="card-body card-block">
                        <form action="/sintomas/{{$sintoma->id_sintomas}}" method="post" class="">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="sintoma" name="sintoma" value="{{$sintoma->sintoma}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="animo" name="animo" value="{{$sintoma->animo}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="hidratacion" name="hidratacion" value="{{$sintoma->hidratacion}}" class="form-control">
                                    <input type="hidden" value="{{Auth::user()->id}}" name="id_user">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="temperatura" name="temperatura" value="{{$sintoma->temperatura}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <textarea name="nota" id="" cols="30" rows="10" class="form-control">
                                        {{$nota->nota}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
@endsection