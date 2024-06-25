<?php

namespace App\Http\Livewire\Admin\Sesau\Residencia;

use Livewire\Component;
use App\Models\Admin\Sesau\Residencia\TipoProcesso;


class TipoProcessoComponent extends Component
{
    public $data;
    public $tipoProcesso;
    public $isInscrito;

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
            // $this->emit('openTipoProcesso');
            // $this->emit(
            //     'enviarDados',
            //     [
            //         'nome' => $this->data['nome'],
            //         'nome_social' => $this->data['nome_social'],
            //         'celular' => $this->data['celular'],
            //         'email'=> $this->data['email'],
            //         'cpf'=> $this->data['cpf'],
            //     ]
            // );
            session()->flash('message', '');
        } catch (\Throwable $th) {
            dd($th);
            session()->flash(
                'message',
                'Não foi possível cadastrar/atualizar informação.'
            );
        }
    }

    public function inscrito()
    {
        $this->data['residencia_familia_comunidade'] = true;
    }
    
}
