<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    protected $table = 'categorias';

    protected $fillable = [
        'nome',
        'descricao',
        'maximo_horas',
        'curso_id'
    ];

    public function user()
    {
        return $this->belongsTo(Curso::class);
    }
}
