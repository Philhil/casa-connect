<html>
Hi {{$offer->user->first_name}},
<br>
<b>{{$requester_name}}</b> {{__('has sent a message to your offer:')}} <a href="{{route('offer.show', [$offer->id])}}">{{$offer->title}}</a>
<br>
{{__('If your offer is still available, please directly get in touch with')}} <b>{{$offer->user->first_name}}</b>. {{__('We advise you to only to reply to the e-mail address for this and not to open any links from the message')}}.
<br><br>
{{__('If your offer is no longer available, you can remove it by clicking here')}}: <a href="{{route('offer.delete', [$offer->id])}}">{{route('offer.delete', [$offer->id])}}</a>
<br><br>
{{__('The message from :name reads:', [$requester_name])}}
<br>
---------------
<br>
{{$message_text}}
<br>
---------------
<br>
<br>
<br>
Thank you for your contribution!
<br>
- The team of the casa-connect.org platform.
</html>