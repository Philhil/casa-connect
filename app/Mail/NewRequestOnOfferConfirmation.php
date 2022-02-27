<?php

namespace App\Mail;

use App\Models\Offer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRequestOnOfferConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public Offer $offer;
    public String $requester_name;
    public String $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Offer $offer, string $requester_name, string $message)
    {
        $this->offer = $offer;
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
        return $this
            ->view('mail.offer_request_confirmation')
            ->with([
                'offer' => $this->offer,
                'requester_name' => $this->requester_name,
                'message_text' => $this->message
            ])
            ->subject('CASA-Connect: request Confirmation');
    }
}
