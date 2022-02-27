Hi {{$offer->user->first_name}},

{{__('you got a new request on your offer')}} ({{route('offer.show', [$offer->id])}}).

{{__('If the offer is no longer available, you can remove it by clicking here')}}: {{route('offer.delete', [$offer->id])}}

{{__('Info: please do not open on any links from the message below!')}}

{{__('Original message from')}} {{$requester_name}}:
-----------

{{$message_text}}
