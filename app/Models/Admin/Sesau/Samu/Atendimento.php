<?php

namespace App\Models\Admin\Sesau\Samu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;
    protected $table = 'samu.atendimentos';
    protected $fillable = ['data_atendimento', 'horario', 'endereco', 'fato_acontecido', 'transportado_para', 'observacao'];
}
