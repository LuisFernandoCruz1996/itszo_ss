<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Alumno;
use Laracasts\Flash\Flash;

class AccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    use RegistersUsers;


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acceso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $alumnouser = new User;
        
        $alumnouser->id=$request->no_identificacion;
        $alumnouser->nombres=$request->nombres;
        $alumnouser->apellido_p=$request->apellido_p;
        $alumnouser->apellido_m=$request->apellido_m;
        $alumnouser->no_identificacion=$request->no_identificacion;
        $alumnouser->rol='Alumno';
        $alumnouser->password=bcrypt($request->password);
        
        $alumnouser->save();

        $alumno = new Alumno;

        $alumno->id=$request->no_identificacion;
        $alumno->no_control=$request->no_identificacion;
        $alumno->contraseña=bcrypt($request->password);

        $alumno.>save();

        return redirect()->route('alumno.index');
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
        //
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
    }
}
