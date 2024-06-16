<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['title','text','icon','cor'];
}
