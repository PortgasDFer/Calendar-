<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str as Str;
use CalendarPlus\User;
use CalendarPlus\Rutina;

use Alert;
use Redirect,Response;
use DataTables;

class RutinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();

        $rutinas=Rutina::where('id_user','=',$user->id)->get();
        return view('rutinas.index',compact('rutinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rutinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rutina=new Rutina();
        $rutina->nombre=$request->input('nombre');
        $rutina->fecha=$request->input('fecha');
        $rutina->tiempo=$request->input('tiempo');
        $rutina->id_user=$request->input('id_user');
        $rutina->save();
        alert()->success('Calendar+', 'Rutina registrada correctamente');
        return Redirect::to('/rutinas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rutina=Rutina::find($id);
        return view('rutinas.delete',compact('rutina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutina=Rutina::find($id);
        return view('rutinas.edit',compact('rutina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rutina=Rutina::find($id);
        $rutina->nombre=$request->input('nombre');
        $rutina->fecha=$request->input('fecha');
        $rutina->tiempo=$request->input('tiempo');
        $rutina->id_user=$request->input('id_user');
        $rutina->save();
        alert()->success('Calendar+', 'Rutina actualizada correctamente');
        return Redirect::to('/rutinas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rutina=Rutina::find($id);
        $rutina->delete();
        alert()->warning('Calendar+', 'Rutina eliminada');
        return Redirect::to('/rutinas');
    }
}
