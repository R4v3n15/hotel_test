<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hoteles';

    protected $primaryKey = 'idHotel';

    protected $fillable = ['googleid', 'nombre', 'text', 'direccion', 'telefono', 'lat', 'lng', 'logo', 'img', 'slug', 'estatus'];
}
