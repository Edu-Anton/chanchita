@component('mail::message')

![Logo de 'La Chanchita'][logo]

# Invitación: "Cumpleaños de Jimena"

Hola Juan:    

Queremos invitarte a participar de la chanchita que estamos realizando.

@component('mail::button', ['url' => '', 'color'=>'success'])
Ver la invitación
@endcomponent

Saludos,<br>
{{ config('app.name') }}

[logo]: https://lachanchita.site/storage/icono.png
@endcomponent
