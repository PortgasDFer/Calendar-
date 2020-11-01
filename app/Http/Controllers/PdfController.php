<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use CalendarPlus\Medicamento;
use CalendarPlus\Rutina;
use CalendarPlus\Nota;
use CalendarPlus\Sintoma;
use CalendarPlus\User;

class PdfController extends Controller
{
    public function generar($slug)
    {
    	$user=User::where('slug','=', $slug)->firstOrFail();
    	$medicamentos=Medicamento::join('d_u_m','medicamento.id_medicamento','=','d_u_m.id_medicamento')
                            ->join('users','users.id','=','d_u_m.id_user')
                            ->select(array('medicamento.id_medicamento','medicamento.nombre_med','medicamento.cantidad_med','medicamento.fecha','medicamento.intervalo'))
                            ->where('d_u_m.id_user','=',$user->id)
                            ->get();
        $rutinas=Rutina::where('id_user','=',$user->id)->get();
        $sintomas=Sintoma::where('id_user','=',$user->id)->get();
        $view =     \View::make('pdf', compact('user','medicamentos','rutinas','sintomas'))->render();
        $pdf =      \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream("MiHistorial.pdf");
    }
}
