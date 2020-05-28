<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Ticket extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $producto;
    public $cantidad;
    public $total;
    public $fecha;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario, $producto, $cantidad, $total, $fecha)
    {
        $this->usuario = $usuario;
        $this->producto = $producto;
        $this->cantidad = $cantidad;
        $this->total = $total;
        $this->fecha = $fecha;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Ticket');
    }
}
