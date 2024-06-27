<?php

namespace App\Http\Livewire\Admin\Sesau\Residencia;

use Livewire\Component;
use App\Models\Admin\Sesau\Residencia\TipoProcesso;


class TipoProcessoComponent extends Component
{
    public $data = [
        'residencia_multiprofissional_saude_mental' => false,
        'residencia_multiprofissional_saude_familia' => false,
        'residencia_medica_psiquiatria' => false,
        'residencia_familia_comunidade' => false,
    ];
    public $tipoProcesso,$inscrito,$categoria;
    public $isInscrito;

    protected $listeners=['categoria'];

    public function render()
    {
        return view('livewire.admin.sesau.residencia.tipo-processo-component');
    }

    public function store()
    {
        $this->validate([
            'data.status'=>''
        ]);

        try {

            $tipoProcesso = TipoProcesso::create($this->data);
            session()->flash('message', '');
        } catch (\Throwable $th) {
            dd($th);
            session()->flash(
                'message',
                'Não foi possível cadastrar/atualizar informação.'
            );
        }
    }

    public function categoria($value)
    {
        $this->categoria = $value;
    }
    
    public function inscrever($value)
    {
        $this->data[$value] =  !$this->data[$value];
        $this->emit('tipoProcesso', $this->data[$value]);
    }
}
