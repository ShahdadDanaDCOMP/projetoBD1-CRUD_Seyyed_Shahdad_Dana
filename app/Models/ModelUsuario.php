<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUsuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable=['id_usuario','senha','nome'];
    public $timestamps=false;
}
