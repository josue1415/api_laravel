<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombres',
        'usuario',
    ];

    // public function perfil_microempresa()
    // {
    //     return $this->hasOne(MicroempresasPerfil::class, 'id', 'microempresa_perfil_id');
    // }
}
