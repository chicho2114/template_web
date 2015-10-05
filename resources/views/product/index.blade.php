@extends('layouts.admin')
                

@section('content')
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZO CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<!-- Page Heading -->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de productos
        </h1>
        <ol class="breadcrumb">
                <li >
                     <a href={{URL::to('/admin/')}}><i class="fa fa-fw fa-file-text-o"></i>  Inicio </a>
                </li>
               <li class="active">
                     <i class="fa  "></i>Lista de productos
                </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< FINAL CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

@include('alerts.success')

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<div class="row">
    <div class="col-lg-12"> 
    <div class="panel-body form-horizontal payment-form"> 


<table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Titulo del producto</th>
                <th>Precio</th>
                <th>Fecha de creación</th>
            </tr>
        </thead>
        @foreach($products as $product)
        <tbody>
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->titulo}}</td>
            <td>{{$product->precio}}</td>
            <td>{{$product->created_at}}</td>

        <td>
            {!!link_to_route('admin.product.edit', $title = 'Editar', $parameters = $product->id, $attributes = ['class'=>'btn btn-info preview-add-button'])!!}
            {!!link_to_action('ProductosController@destroy', $title = 'Eliminar', $parameters = $product->id, $attributes = ['class'=>'btn btn-danger preview-add-button', 'method'=>'DELETE'])!!}
        </td>
        </tr>



        </tbody>
        @endforeach
</table>

{!! $products->render() !!}
        
         
    </div>
    </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< TERMINA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
@stop