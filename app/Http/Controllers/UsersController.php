<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::orderBy('rol','ASC')->where('rol', 'Jefe')->orWhere('rol','Otro')->paginate(5);
        
        return view('admin.index')->with('users',$users);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.createotro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $otro = new User;
        
        $otro->id=$request->no_identificacion;
        $otro->nombres=$request->nombres;
        $otro->apellido_p=$request->apellido_p;
        $otro->apellido_m=$request->apellido_m;
        $otro->no_identificacion=$request->no_identificacion;
        $otro->rol='Otro';
        $otro->carrera='otro';

        $otro->password=bcrypt($request->password);
        
        $otro->save();

        Flash::success("¡Se ha registrado el usuario de forma exitosa!");
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $otro= User::find($id);

        return view('admin.users.editotro')->with('user', $otro);
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
        $otro = User::find($id);
        $otro->nombres=$request->nombres;
        $otro->apellido_p=$request->apellido_p;
        $otro->apellido_m=$request->apellido_m;
        $otro->no_identificacion=$request->no_identificacion;
        $otro->rol='Otro';
        $otro->carrera='otro';
        $otro->password=bcrypt($request->password);
        $otro->save();
        Flash::warning('¡El usuario '. $otro->nombres. ' ha sido editado de forma correcta!');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $otro = User::find($id);
        $otro->delete();
        Flash::error('¡El usuario '. $otro->nombres. ' ha sido eliminado de forma correcta!');
        return redirect()->route('users.index');
    }
}
