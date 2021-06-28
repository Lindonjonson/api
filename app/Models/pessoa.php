<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pessoa extends Model
{
    use HasFactory;
    protected $fillable = ['nome','telefone','cpf'];

        public function pessoacurso()
        {
            return $this->belongsToMany(curso::class, 'pessoacursos', 'pessoa_id', 'curso_id');
        }
    
}
