<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\FornecedoresSite;

class Fornecedor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(FornecedoresSite $fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.fornecedor')
                    ->with([
                        'fornecedor' => $this->fornecedor
                    ])
                    ->from('noreply@dibandeja.com.br', 'DiBandeja')
                    ->subject('DiBandeja - Novo fornecedor');
    }
}