<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFilme extends Model
{   
    use HasFactory;
    protected $table = 'filmes';
    public $timestamps=false;
    protected $fillable=['id_filme','titulo','ano','sinopse'];

    /*
    public function tenhoFilmeGenero()
    {
        return $this->belongsToMany(ModelGenero::class);
    }
    */
   
}