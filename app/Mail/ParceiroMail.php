<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Parceiros;

class ParceiroMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Parceiros $parceiro)
    {
        $this->parceiro = $parceiro;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.parceiro')
                    ->with([
                        'parceiro' => $this->parceiro
                    ])
                    // ->cc(['fernando@magictech.co'])
                    ->from('noreply@dibandeja.com.br', 'DiBandeja')
                    ->subject('DiBandeja - Novo parceiro');
    }
}