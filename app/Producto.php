<?php

namespace Tienda;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Producto extends Model
{
    protected $table = 'productos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'descripcion', 'precio', 'enlaces', 'imagenes'];

    public function setImagenesAttribute($imagenes){
        if (!empty($imagenes)) {
            $date = Carbon::now();
            $directory = $date . "-". $this->attributes['titulo'];
            \Storage::makeDirectory($directory);
            $this->attributes['imagenes'] = $directory ."/" .$imagenes->getClientOriginalName();
            $nameImage = $directory ."/" .$imagenes->getClientOriginalName();

            \Storage::disk('local')->put($nameImage, \File::get($imagenes));
   
        }
    }
}
