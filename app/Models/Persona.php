<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function Tipo(){
        return $this -> belongsTo(Tipo::class);
    }

    public function Productos(){
        return $this -> belongsToMany(Producto::class,"compras");
    }
}
