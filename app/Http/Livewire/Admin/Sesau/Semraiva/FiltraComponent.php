<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use Livewire\Component;
use App\Models\Semraiva\Unidade;
use Dotenv\Parser\Value;

class FiltraComponent extends Component
{
    public $unidade_id;
    public $search;
    public $unidade;


    public function render()
    {
        return view('livewire.admin.sesau.semraiva.filtra-component');
    }

    public function updatedSearch($value){
        $this->emit('search', $value);
    }

    public function updatedUnidade($value){
        $this->emit('unidade', $value);
    }
}   
