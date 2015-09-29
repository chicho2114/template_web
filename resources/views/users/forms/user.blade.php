<div class="form-group">
    {!!Form::label('Nombre:', null, [ 'for'=>'email', 'class' => 'col-lg-2 control-label'])!!}
    {!!Form::text('name', null, [ 'id' => 'correo', 'class' => 'form-control', 'required', 'placeholder'=> 'Introduzca el nombre del nuevo usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('Apellido:', null, [ 'for'=>'email', 'class' => 'col-lg-2 control-label'])!!}
    {!!Form::text('apellido', null, [ 'id' => 'correo', 'class' => 'form-control', 'required', 'placeholder'=> 'Introduzca el apellido del nuevo usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('Correo:', null,['for'=>'correo', 'class' => 'col-lg-2 control-label'])!!}
    {!!Form::text('email',  null, [ 'id' => 'correo', 'required', 'class' => 'form-control', 'placeholder'=> 'Introduzca el correo, EJ: nombre@gmail.com'])!!}
</div>
<div class="form-group">
    {!!Form::label('Contraseña:', null,['for'=>'email', 'class' => 'col-lg-2 control-label'])!!}
    {!!Form::password('password', [ 'id' => 'correo', 'class' => 'form-control', 'required', 'placeholder'=> 'Introduzca la contraseña'])!!}
</div>
<div class="form-group">
    {!!Form::label('Repetir Contraseña:', null,['for'=>'email', 'class' => 'col-lg-4 control-label'])!!}
    {!!Form::password('pass', [ 'id' => 'correo', 'class' => 'form-control', 'placeholder'=> 'Repetir contraseña'])!!}
</div>