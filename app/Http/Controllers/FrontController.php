<?php

namespace Tienda\Http\Controllers;

use Illuminate\Http\Request;

use Tienda\Http\Requests;
use Tienda\Http\Controllers\Controller;
use Session;
use Mail;
use Redirect;

class FrontController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only' => 'indexAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = \Tienda\Producto::All();

        return view('index', compact('products'));
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function prueba()
    {
        return view('prueba');
    }

    public function preview()
    {   
    }


    public function contenido()
    {
        return view('layouts.principal');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function indexAdmin()
    {
        return view('administracion');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Mail::send('correo', $request->all(), function($message){
            $message->to('argenis1493@gmail.com');
            $message->subject('Correo de contacto');
        });
        Session::flash('message', 'Mensaje enviado correctamente');
        return Redirect::to('/contacto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = \Tienda\Producto::find($id);
        return view('preview', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
