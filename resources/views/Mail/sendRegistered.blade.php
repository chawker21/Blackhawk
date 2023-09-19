@component('mail::message')
# Welcome to {{ config('app.name') }}

Thank You for Registering, I hope you enjoy the site!

@component('mail::button', ['url' => 'http://www.therockystone.com'])
Rocky Stone
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
