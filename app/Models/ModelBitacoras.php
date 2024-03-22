<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBitacoras extends Model
{
    use HasFactory;

    protected $table = 'bitacoras';

    protected $fillable = [
        'descripcion_bitacora',
        'id_usuario'
    ];

    public function UsuarioBitacora(){
        return $this->hasOne(User::class,'id','id_usuario');
    }
}
