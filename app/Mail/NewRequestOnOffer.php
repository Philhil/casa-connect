<?php

namespace App\Mail;

use App\Models\Offer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRequestOnOffer extends Mailable
{
    use Queueable, SerializesModels;

    public Offer $offer;
    public String $requester_mail;
    public String $requester_name;
    public String $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Offer $offer, string $requester_mail, string $requester_name, string $message)
    {
        $this->offer = $offer;
        $this->requester_mail = $requester_mail;
        $this->requester_name = $requester_name;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->requester_mail, $this->requester_name)
            ->view('mail.offer_request')
            ->with([
                'offer' => $this->offer,
                'requester_name' => $this->requester_name,
                'message_text' => $this->message
            ])
            ->subject('CASA-Connect: New request from ' . $this->requester_name);
    }
}
