<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Productos extends Model
{
    protected $table = 'productos';

    protected $fillable = ['descripcion', 'peso', 'precio', 'cantidad', 'categoria_id'];

    public $timestamps=false;

}
