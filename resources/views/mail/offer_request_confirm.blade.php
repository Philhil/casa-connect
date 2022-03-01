<html>
Hi {{$requester_name}},
<br>
{{__('You just requested to the following offer')}}: <a href="{{route('offer.show', [$offer->id])}}">{{route('offer.show', [$offer->id])}}</a>
<br> <br>
{{__('We informed the host about your message and you mail address.')}}
{{__('Your original message is:')}}
<br>
-----------
<br>
{{$message_text}}
</html>