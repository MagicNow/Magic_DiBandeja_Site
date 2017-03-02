<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\ClientesSite;

class NovoPedidoPJ extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ClientesSite $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.pj')
                    ->with([
                        'cliente' => $this->cliente
                    ])
                    // ->cc(['fernando@magictech.co'])
                    ->from('noreply@dibandeja.com.br', 'DiBandeja')
                    ->subject('DiBandeja - Novo pedido para seu negócio');
    }
}