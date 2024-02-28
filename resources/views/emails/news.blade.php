<x-mail::message>
# Contenue du message

Titre:{{ $news->titre }}<br>
Contenue: {{ $news->contenue }}
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
