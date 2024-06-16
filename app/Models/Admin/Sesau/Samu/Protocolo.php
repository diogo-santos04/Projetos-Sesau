<?php

namespace App\Models\Admin\Sesau\Samu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    use HasFactory;
    protected $table = 'samu.protocolos';
    protected $fillable = ['nome', 'prazo', 'solicitacao', 'data_solicitacao', 'servidor', 'data_retirada'];
}
