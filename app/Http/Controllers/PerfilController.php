<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str as Str;
use CalendarPlus\User;
use CalendarPlus\Rutina;
use CalendarPlus\Sintoma;
use CalendarPlus\Medicamento;
use CalendarPlus\D_U_M;
use CalendarPlus\Role;
use Alert;
use Redirect,Response;
use DataTables;


class PerfilController extends Controller
{
    public function miPerfil(Request $request, $slug)
    {
    	
       $user=User::where('slug','=',$slug)->firstOrFail();
       if($slug!=\Auth::user()->slug){
            alert()->success('Calendar+', 'No vas a encontrar una vulnerabilidad Garrido');
            $user=User::where('slug','=',\Auth::user()->slug)->firstOrFail();
       }
        $medicamentos=D_U_M::where('id_user','=' ,$user->id)->count();
        $rutinas=Rutina::where('id_user','=',$user->id)->count();
        $sintomas=Sintoma::where('id_user','=',$user->id)->count();
        $medicinas=Medicamento::join('d_u_m','medicamento.id_medicamento','=','d_u_m.id_medicamento')
                            ->join('users','users.id','=','d_u_m.id_user')
                            ->select(array('medicamento.id_medicamento','medicamento.nombre_med','medicamento.cantidad_med','medicamento.fecha','medicamento.intervalo','medicamento.foto','users.slug'))
                            ->where('users.slug','=',$user->slug)
                            ->get();
         alert()->success('Calendar+', 'Estas en tu perfil');
    	return view('perfiles.perfil',compact('user','rutinas','medicamentos','sintomas','medicinas'));


    }

    public function miConfiguracion($slug)
    {
    	$user=User::where('slug','=',$slug)->firstOrFail();
        if($slug!=\Auth::user()->slug){
            alert()->success('Calendar+', 'No vas a encontrar una vulnerabilidad Garrido');
            $user=User::where('slug','=',\Auth::user()->slug)->firstOrFail();
       }
    	return view('perfiles.editardatos',compact('user'));
    }

    public function actualizarDatos(Request $request, $slug)
    {
    	$user=User::where('slug','=',$slug)->firstOrFail();
         if($request->hasFile('avatar')){
            $file_path = public_path() . "/avatars/$user->foto";
            \File::delete($file_path);

            $file = $request->file('avatar');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/avatars/',$foto);
            $user->foto=$foto;
        }
        $user->name=$request->input('name');
        $user->apellido=$request->input('apellido');
        $user->email=$request->input('email');
        $user->slug=Str::slug($user->name.time());
        $user->direccion=$request->input('direccion');
        $user->edad=$request->input('edad');
        $user->baja=0;
        $user->save();

        alert()->success('Calendar+', 'Sus datos se han actualizado correctamente');
        return view('perfiles.editardatos',compact('user'));
    }

    public function cambiarPassword(Request $request, $slug)
    {
		$user=User::where('slug','=',$slug)->firstOrFail();
    	$user->password=Hash::make($request->input('confirm_password'));
    	$user->save();

    	alert()->success('Calendar+', 'Su contraseña se han actualizado correctamente');
        return view('perfiles.editardatos',compact('user'));
    }
}
