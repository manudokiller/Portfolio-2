@php
$contacts = [
    [
        'name' => 'YouTube',
        'icon' => 'fa-brands fa-youtube',
        'url' => 'https://www.youtube.com/channel/UCVIv44SbRK7YlirwidlZEAw',
        'description' => 'I like to create some useful content'
    ],
    [
        'name' => 'Twitch',
        'icon' => 'fa-brands fa-twitch',
        'url' => 'https://www.twitch.tv/manudokiller',
        'description' => 'I have found on streaming a way to entertain myself and enjoy'
    ],
    [
        'name' => 'LinkedIn',
        'icon' => 'fa-brands fa-linkedin-in',
        'url' => 'https://www.linkedin.com/in/esteban-enrique-salas-guzm%C3%A1n-862b8a101/',
        'description' => 'Here you can write me'
    ]
];
@endphp


<div class="row justify-content-center">
  @foreach ($contacts as $contact)
    <div class="col-md-4 col-5 py-2">
        <x-contact-card :icon="$contact['icon']" :url="$contact['url']" :description="$contact['description']">{{ $contact['name'] }}</x-contact-card>
    </div>
  @endforeach
</div>

