<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table='equipo';
    protected $fillable=['numero_serie','descripcion','costo'];
}