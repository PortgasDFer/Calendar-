<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str as Str;
use CalendarPlus\User;
use CalendarPlus\Sintoma;
use CalendarPlus\Nota;
use Alert;
use Redirect,Response;
use DataTables;

class SintomasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $sintomas=Sintoma::where('id_user','=',$user->id)->get();
        return view('sintomas.index',compact('sintomas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('sintomas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sintoma=new Sintoma();
        $sintoma->sintoma=$request->input('sintoma');
        $sintoma->animo=$request->input('animo');
        $sintoma->temperatura=$request->input('temperatura');
        $sintoma->hidratacion=$request->input('hidratacion');
        $sintoma->id_user=$request->input('id_user');
        $sintoma->save();
        $nota=new Nota();
        $nota->nota=$request->input('nota');
        $nota->id_sintoma=$sintoma->id_sintomas;
        $nota->save();
        alert()->success('Calendar+', 'Sintoma registrado correctamente');
        return Redirect::to('/sintomas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sintoma=Sintoma::find($id);
        $nota=Nota::where('id_sintoma','=',$sintoma->id_sintomas)->firstOrFail();
        return view('sintomas.delete',compact('sintoma','nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sintoma=Sintoma::find($id);
        $nota=Nota::where('id_sintoma','=',$sintoma->id_sintomas)->firstOrFail();
        return view('sintomas.edit',compact('sintoma','nota'));
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
        $sintoma=Sintoma::find($id);
        $sintoma->sintoma=$request->input('sintoma');
        $sintoma->animo=$request->input('animo');
        $sintoma->temperatura=$request->input('temperatura');
        $sintoma->hidratacion=$request->input('hidratacion');
        $sintoma->id_user=$request->input('id_user');
        $sintoma->save();
        $nota=Nota::where('id_sintoma','=',$sintoma->id_sintomas)->firstOrFail();
        $nota->nota=$request->input('nota');
        $nota->id_sintoma=$sintoma->id_sintomas;
        $nota->save();
        alert()->success('Calendar+', 'Sintoma actualizado correctamente');
        return Redirect::to('/sintomas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sintoma=Sintoma::find($id);
        $nota=Nota::where('id_sintoma','=',$sintoma->id_sintomas)->firstOrFail();
        $nota->delete();
        $sintoma->delete();
        alert()->warning('Calendar+', 'Sintoma eliminado');
        return Redirect::to('/sintomas');
    }
}
