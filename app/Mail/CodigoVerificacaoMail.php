<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CodigoVerificacaoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $codigo;

    public function __construct($codigo)
    {
        $this->codigo = $codigo;
    }

    public function build()
    {
        return $this->subject('Seu código de ativação - Beth Cientista')
                    ->html("<h2>Seu código de verificação é: <strong>{$this->codigo}</strong></h2><p>Insira este código na tela para concluir seu cadastro.</p>");
    }
}
