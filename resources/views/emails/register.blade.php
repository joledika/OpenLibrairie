@component('mail::message')
# Valider ton compte

Salut {{ $user->name }},
cliquer sur le boutton ci dessous pour valider ton compte!

@component('mail::button', ['url' => route('confirmation',[$user,$user->token])])
Valider mon compte
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
