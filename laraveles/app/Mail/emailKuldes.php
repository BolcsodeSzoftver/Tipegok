<?php

namespace App\Mail;

use App\Models\bolcsode;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class emailKuldes extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = config("mail.from.address");
        $nev = Auth::user();
  
        $this->subject('Sikeres felhasználó regisztráció: Bölcsineve')
                    ->view('email.ujFelhasznalo')
                    ->from($address, $nev->name);
  
        return $this;
    }
}
