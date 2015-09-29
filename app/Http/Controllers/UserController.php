<?php

namespace Tienda\Http\Controllers;

use Illuminate\Http\Request;
use Tienda\Http\Requests;
use Tienda\Http\Controllers\Controller;
use Session;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \Tienda\User::All();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.crear_usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Tienda\User::create([
        'name' => $request['name'],
        'apellido' => $request['apellido'],
        'email' => $request['email'],
        'password' => $request['password'], //bcrypt() <--- esto para encriptar contraseñas


        ]);

        Session::flash('message', 'Usuario registrado correctamente.');

        return Redirect::to('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \Tienda\User::find($id);
        return view('users.editar_usuario', ['user'=>$user]);
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
        $user = \Tienda\User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message', 'Usuario editado correctamente.');

        return Redirect::to('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \Tienda\User::destroy($id);

        Session::flash('message', 'Usuario eliminado correctamente.');

        return Redirect::to('/admin/users');
    }
}
