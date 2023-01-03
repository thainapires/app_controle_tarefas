@component('mail::message')
# Introdução

Corpo da mensagem.

@component('mail::button', ['url' => ''])
Texto do botão
@endcomponent

Obrigada,<br>
{{ config('app.name') }}
@endcomponent
