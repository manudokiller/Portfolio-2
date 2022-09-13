@php
    $skills = [
        ['name' => 'Bootstrap', 'icon' => 'fa-brands fa-bootstrap'],
        ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel'],
        ['name' => 'HTML', 'icon' => 'fa-brands fa-html5'],
        ['name' => 'CSS', 'icon' => 'fa-brands fa-css3'],
        ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
        ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js-square'],
        ['name' => 'SQL', 'icon' => 'fa-solid fa-database'],
        ['name' => 'Git', 'icon' => 'fa-brands fa-git-alt']
    ];
@endphp

<div class="row justify-content-center">
    @foreach ($skills as $skill)
        <div class="col-md-3 col-4 py-2">
            <x-skill-card :icon="$skill['icon']">{{ $skill['name'] }}</x-skill-card>
        </div>
    @endforeach
</div>
