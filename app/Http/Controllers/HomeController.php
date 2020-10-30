<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str as Str;
use CalendarPlus\User;
use CalendarPlus\Medicamento;
use CalendarPlus\Farmacia;
use CalendarPlus\Sintoma;
use CalendarPlus\Nota;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);

        $numusers=User::count();
        $numfarmacia=Farmacia::count();
        $nummedic=Medicamento::count();
        $user=Auth::user();
        $medicamentos=Medicamento::join('d_u_m','medicamento.id_medicamento','=','d_u_m.id_medicamento')
                            ->join('users','users.id','=','d_u_m.id_user')
                            ->select(array('medicamento.id_medicamento','medicamento.nombre_med','medicamento.cantidad_med','medicamento.fecha','medicamento.intervalo','medicamento.hora'))
                            ->where('d_u_m.id_user','=',$user->id)
                            ->get();
        $sintomas=Sintoma::where('id_user','=',$user->id)->get();
        //return $medicamentos;
        alert()->basic('Calendar+', 'Bienvenido');
        return view('home',compact('sintomas','medicamentos','numusers','numfarmacia','nummedic'));
    }

    public function tratamiento()
    {
        return view('proximamente');
    }
}
