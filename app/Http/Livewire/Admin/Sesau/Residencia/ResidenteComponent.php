<?php

namespace App\Http\Livewire\Admin\Sesau\Residencia;

use Livewire\Component;

class ResidenteComponent extends Component
{
    public $openTipoProcesso;
    public $dados;
    public $nome,$email,$cpf,$celular,$nome_social;
    protected $listeners = [
        "openTipoProcesso" => "openTipoProcesso",
        "enviarDados" => "dadosEnviados"
    ];
    public function render()
    {
        return view('livewire.admin.sesau.residencia.residente-component');
    }

    public function openTipoProcesso()
    {
        $this->openTipoProcesso = true;
    }

    public function dadosEnviados($dados)
    {
        $this->nome = $dados['nome'];
        $this->email = $dados['email'];
        $this->cpf = $dados['cpf'];
        $this->celular = $dados['celular'];
        $this->nome_social = $dados['nome_social'];
    }
}
