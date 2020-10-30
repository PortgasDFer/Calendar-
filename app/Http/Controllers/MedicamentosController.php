<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str as Str;
use CalendarPlus\Medicamento;
use CalendarPlus\D_U_M;
use Carbon\Carbon;
use Alert;
use Redirect,Response;
use DataTables;

class MedicamentosController extends Controller
{
    

    public function datatable()
    {    
        $user=Auth::user();
        $medicamentos=Medicamento::join('d_u_m','medicamento.id_medicamento','=','d_u_m.id_medicamento')
                            ->join('users','users.id','=','d_u_m.id_user')
                            ->select(array('medicamento.id_medicamento','medicamento.nombre_med','medicamento.cantidad_med','medicamento.fecha','medicamento.intervalo'))
                            ->where('d_u_m.id_user','=',$user->id);
                            return Datatables::of($medicamentos)
                            ->editColumn('fecha', function ($medicamento) {
                                return $medicamento->fecha ? with(new Carbon($medicamento->fecha))->format('d/m/Y') : '';
                            })
                            ->filterColumn('fecha', function ($query, $keyword) {
                                $query->whereRaw("DATE_FORMAT(fecha,'%d/%m/%Y') like ?", ["%$keyword%"]);
                            })
                            ->addColumn('acciones','medicamentos.acciones')
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
        return view('medicamentos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('medicamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamento=new Medicamento();
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/fotosmed/',$foto);
            $medicamento->foto=$foto;
        }
        $medicamento->nombre_med=$request->input('medicamento');
        $medicamento->cantidad_med=$request->input('cantidad');
        $medicamento->fecha=$request->input('fecha');
        $medicamento->hora=$request->input('hora');
        $medicamento->intervalo=$request->input('intervalo');
        $medicamento->nota=$request->input('nota');
        $medicamento->save();
        $dum=new D_U_M();
        $dum->id_user=$request->input('id_user');
        $dum->id_medicamento=$medicamento->id_medicamento;
        $dum->save();

        alert()->success('Calendar+', 'Medicamento registrado correctamente');
        return Redirect::to('/medicamentos');


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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento=Medicamento::find($id);
        return view('medicamentos.edit', compact('medicamento'));
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
        $medicamento=Medicamento::find($id);
        if($request->hasFile('foto')){
            $file_path = public_path() . "/fotosmed/$medicamento->foto";
            \File::delete($file_path);

            $file = $request->file('foto');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/fotosmed/',$foto);
            $medicamento->foto=$foto;
        }
        $medicamento->nombre_med=$request->input('medicamento');
        $medicamento->cantidad_med=$request->input('cantidad');
        $medicamento->fecha=$request->input('fecha');
        $medicamento->hora=$request->input('hora');
        $medicamento->intervalo=$request->input('intervalo');
        $medicamento->nota=$request->input('nota');
        $medicamento->save();

        alert()->success('Calendar+', 'Medicamento actualizado correctamente');
        return Redirect::to('/medicamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamento=Medicamento::find($id);
        $dum=D_U_M::where('id_medicamento','=',$medicamento->id_medicamento);
        $dum->delete();
        $file_path = public_path() . "/fotosmed/$medicamento->foto";
            \File::delete($file_path);
        $medicamento->delete();

        alert()->warning('Calendar+', 'Medicamento eliminado');
        return Redirect::to('/medicamentos');

    }
}
