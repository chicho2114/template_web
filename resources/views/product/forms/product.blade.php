

    <div class="form-group">
        {!!Form::label('Titulo:', null, [ 'for'=>'titulo', 'class' => 'col-lg-2 control-label'])!!}
        {!!Form::text('titulo', null, [ 'id' => 'titulo', 'class' => 'form-control', 'required', 'placeholder'=> 'Introduzca el titulo del nuevo producto'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Descripcion:', null, [ 'for'=>'descripcion', 'class' => 'col-lg-2 control-label'])!!}
        {!!Form::textarea('descripcion', null, [ 'id' => 'descripcion', 'class' => 'form-control', 'required', 'placeholder'=> 'Introduzca la descripcion del producto'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Precio:', null,['for'=>'precio', 'class' => 'col-lg-2 control-label'])!!}
        {!!Form::text('precio',  null, [ 'id' => 'precio', 'required', 'class' => 'form-control', 'placeholder'=> 'Introduzca el precio del producto, Ej: 12000'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Imagenes: ', null,['for'=>'imagenes', 'class' => 'col-lg-2 control-label'])!!}
        {!!Form::file('imagenes' )!!}
    </div>

    <!--<div class="form-group">
        <div class="col-sm-12 text-right">
            {!!Form::reset('Limpiar campos', ['class' => 'btn btn-info preview-edit-button'])!!}
            {!!Form::submit('Crear produco', ['class' => 'btn btn-success preview-edit-button'])!!}
        </div>
    </div>-->


