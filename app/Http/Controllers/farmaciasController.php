<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use CalendarPlus\Farmacia;
use Alert;
use Redirect,Response;
use DataTables;

class farmaciasController extends Controller
{

  /**
   * Display a datatable Roles.
   *
   * @return \Illuminate\Http\Response
   */
  public function datatable()
  {
      $farmacia=Farmacia::all();
      return Datatables::of($farmacia)
      ->addColumn('acciones','farmacias.acciones')
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
        //
        return view('farmacias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('farmacias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $farmacia = new Farmacia();
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgfar/',$foto);
            $farmacia->imagen=$foto;
        }
        $farmacia->nombre_far=$request->input('nombreFarmacia');
        $farmacia->calle=$request->input('calle');
        $farmacia->numero=$request->input('numero');
        $farmacia->colonia=$request->input('colonia');
        $farmacia->ciudad=$request->input('ciudad');
        $farmacia->cp=$request->input('cp');
        $farmacia->municipio=$request->input('municipio');
        $farmacia->telefono_far=$request->input('telefono');
        $farmacia->save();

        alert()->success('Calendar+', 'Farmacia registrada correctamente');
        return Redirect::to('/farmacias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $farmacia=Farmacia::find($id);
        return view('farmacias.show',compact('farmacia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $farmacia=Farmacia::find($id);
        return view('farmacias.edit',compact('farmacia'));
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
        //
        $farmacia=Farmacia::find($id);
        
        if($request->hasFile('imagen')){
            $file_path = public_path() . "/imgfar/$farmacia->imagen";
            \File::delete($file_path);

            $file = $request->file('imagen');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgfar/',$foto);
            $farmacia->imagen=$foto;
        }
        $farmacia->nombre_far=$request->input('nombreFarmacia');
        $farmacia->calle=$request->input('calle');
        $farmacia->numero=$request->input('numero');
        $farmacia->colonia=$request->input('colonia');
        $farmacia->ciudad=$request->input('ciudad');
        $farmacia->cp=$request->input('cp');
        $farmacia->municipio=$request->input('municipio');
        $farmacia->telefono_far=$request->input('telefono');
        $farmacia->save();

        alert()->success('Calendar+', 'Farmacia actualizada correctamente');
        return Redirect::to('/farmacias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $farmacia=Farmacia::find($id);
        $farmacia->delete();
        alert()->warning('Calendar+', 'Farmacia eliminada del registro.');
        return Redirect::to('/farmacias');
    }


    /**
     * 
     */
    
    public function farmacias()
    {
        return view('perfiles.busqueda');
    }

    /**
     * 
     * @return [array] [items farmacia]
     */
    public function search(Request $request)
    {
        $palabra = $request->get('search');
        $farmacias=Farmacia::orderBy('created_at','ASC')
                            ->search($palabra)
                            ->get();
        return view('perfiles.resultados',compact('farmacias'));
    }
}
