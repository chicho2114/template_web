<?php

namespace Tienda\Http\Controllers;

use Illuminate\Http\Request;

use Tienda\Http\Requests;
use Tienda\Http\Controllers\Controller;
use Session;
use Redirect;

class ProductosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = \Tienda\Producto::All();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
     
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        //'titulo', 'descripcion', 'precio'
        \Tienda\Producto::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'precio' => $request['precio'], 


            ]);
        Session::flash('message', 'Producto creado correctamente.');

        return Redirect::to('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
        return 'Estoy en el index';
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
