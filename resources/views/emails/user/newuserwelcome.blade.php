@component('mail::message')
# Introduction

Soon we'll have new destination in a bid, for now here's the hint: it has a legendary surf scene and golden crescent beaches that span more than 120 miles

@component('mail::button', ['url' => 'http://travel/home'])
BACK TO SITE
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
