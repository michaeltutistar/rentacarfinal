<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservaCorreo extends Mailable
{
    use Queueable, SerializesModels;
    public $cliente;
    public $vehiculo;
    public $reservas;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($c,$v,$r)
    {
        $this->cliente=$c;
        $this->vehiculo=$v;
        $this->reservas=$r;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('dashboards.plantilla_correo');
    }
}
