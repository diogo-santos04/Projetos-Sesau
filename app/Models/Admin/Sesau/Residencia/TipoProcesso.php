<?php

namespace App\Models\Admin\Sesau\Residencia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProcesso extends Model
{
    use HasFactory;
    protected $table="residencia.tipoProcesso";
    protected $fillable = ['nome','residencia_familia_comunidade', 'residencia_psiquiatria', 'status'];
    public $rules=[
        'nome'=> 'required',
    ];
}
