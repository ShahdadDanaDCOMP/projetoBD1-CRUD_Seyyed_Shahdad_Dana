<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelGenero extends Model
{
    use HasFactory;
    protected $table = 'generos';

    /*
    public function souGeneroFilme()
    {
        return $this->belongsToMany(ModelFilme::class);
    }
    */
}
