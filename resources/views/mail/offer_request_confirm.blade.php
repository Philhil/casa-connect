Hi {{$requester_name}},

{{__('you just requested to the following offer')}}: ({{route('offer.show', [$offer->id])}}).

{{__('We informed the host about your message and you mail Adress.')}}

{{__('Your original message')}}
-----------

{{$message_text}}
