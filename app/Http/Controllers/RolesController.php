<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use CalendarPlus\Role;
use Alert;
use Redirect,Response;
use DataTables;

class RolesController extends Controller
{


    /**
     * Display a datatable Roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        $roles=Role::where('baja','=','0');
        return Datatables::of($roles)
        ->addColumn('acciones','roles.acciones')
        ->rawColumns(['acciones'])
        ->toJson();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('roles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = new Role();
        $rol->name=$request->input('rol');
        $rol->description=$request->input('desc');
        $rol->baja=0;
        $rol->save();

        alert()->success('Calendar+', 'Rol registrado correctamente');
        return Redirect::to('/roles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol=Role::find($id);
        return view('roles.show',compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol=Role::find($id);
        return view('roles.edit',compact('rol'));
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
        $rol=Role::find($id);
        $rol->name=$request->input('rol');
        $rol->description=$request->input('desc');
        $rol->baja=0;
        $rol->save();

        alert()->success('Calendar+', 'Rol actualizado correctamente');
        return Redirect::to('/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol=Role::find($id);
        $rol->baja=1;
        $rol->save();
        alert()->warning('Calendar+', 'Rol eliminado');
        return Redirect::to('/roles');
    }
}
