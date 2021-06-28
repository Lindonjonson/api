<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pessoacurso extends Model
{
    use HasFactory;
    protected $fillable = ['pessoa_id','curso_id'];
}
