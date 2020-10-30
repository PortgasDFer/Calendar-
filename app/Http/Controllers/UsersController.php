<?php

namespace CalendarPlus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str as Str;
use CalendarPlus\User;
use CalendarPlus\Role;
use Alert;
use Redirect,Response;
use DataTables;

class UsersController extends Controller
{
    
    /**
     * Display a datatable Usuarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        $users=User::where('baja','=',0);
        return Datatables::of($users)
        ->addColumn('acciones','users.acciones')
        ->addColumn('avatar','users.avatar')
        ->rawColumns(['acciones','avatar'])
        ->toJson();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/avatars/',$foto);
            $user->foto=$foto;
        }
        $user->name=$request->input('nombre');
        $user->apellido=$request->input('apellido');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->slug=Str::slug($user->name.time());
        $user->direccion=$request->input('direccion');
        $user->edad=$request->input('edad');
        $user->baja=0;
        $user->save();

        $user
                ->roles()
                ->attach(Role::where('name', 'user')->first());

        alert()->success('Calendar+', 'Usuario registrado correctamente');
        return Redirect::to('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('users.edit',compact('user'));
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
        $user=User::find($id);
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

        alert()->success('Calendar+', 'Usuario actualizado correctamente');
        return Redirect::to('/usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->baja=1;
        $user->save();

        alert()->warning('Calendar+', 'Usuario eliminado');
        return Redirect::to('/usuarios');
    }
}
