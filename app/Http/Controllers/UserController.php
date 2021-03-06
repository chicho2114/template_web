<?php

namespace Tienda\Http\Controllers;

use Illuminate\Http\Request;
use Tienda\Http\Requests;
use Tienda\Http\Requests\UserCreateRequest;
use Tienda\Http\Requests\UserUpdateRequest;
use Tienda\Http\Controllers\Controller;
use Session;
use Redirect;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \Tienda\User::paginate(8);
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
    public function store(UserCreateRequest $request)
    {
        \Tienda\User::create([
        'name' => $request['name'],
        'apellido' => $request['apellido'],
        'email' => $request['email'],
        'password' => bcrypt($request['password']), //bcrypt() <--- esto para encriptar contraseñas


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
    public function update(UserUpdateRequest $request, $id)
    {
        $request['password'] = bcrypt($request['password']);
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
