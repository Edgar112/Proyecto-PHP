<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //permite relacionar la fabrica de modelos con las instancias
    use HasFactory;

    //indicamos la tabla clientes
    protected $table="clientes";

    //indicamos el PK
    protected $primaryKey="clienteId";

    //indica que los campos create_at y update_at no se actualice automáticamente
    public $timestamps=false;

    //insert/update por asignación masiva
    protected $guarded=[];
}