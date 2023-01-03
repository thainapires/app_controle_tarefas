@component('mail::message')
# Introdução

Corpo da mensagem.

- Opção 1
- Opção 2

@component('mail::button', ['url' => ''])
Texto do botão 1
@endcomponent

@component('mail::button', ['url' => ''])
Texto do botão 2
@endcomponent

Obrigada,<br>
{{ config('app.name') }}
@endcomponent
