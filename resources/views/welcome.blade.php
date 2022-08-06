<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script src="https://kit.fontawesome.com/c179082552.js" crossorigin="anonymous"></script>

    @include('css.dark')

</head>

<body class="dark">
    <div class="card shadow-lg" id="main_card">
        <div id="pills-div" class="d-flex">

            <x-nav-pills class="px-1" id="v-pills-tab"></x-nav-pills>
            <x-nav-pills id="h-pills-tab"></x-nav-pills>

            <div class="tab-content d-flex m-auto" id="pills-tabContent">
                <x-tab-pane active name="profile">
                    <img src="{{ asset('storage/avatar.svg') }}" class="rounded mx-auto d-block img-fluid"
                        style="max-height: 20vh" alt="Manudo Killer">
                    <div class="text-center">
                        <h2>Manudo Killer</h2>
                        <span>Developer</span>
                        <h3>Who am I?</h3>
                        <span>I'm a freelancer based in Costa Rica. I help convert a vision and an
                            idea into meaningful and useful products.</span>
                    </div>
                </x-tab-pane>
                <x-tab-pane name="skills">
                    <div class="row justify-content-center">
                        @foreach ($skills as $skill)
                            <div class="col-md-3 col-4 py-2">
                                <x-skill-card :icon="$skill['icon']">{{ $skill['name'] }}</x-skill-card>
                            </div>
                        @endforeach
                    </div>
                </x-tab-pane>
                <x-tab-pane name="projects">
                    My Projects
                </x-tab-pane>
                <x-tab-pane name="contact_me">
                    <a href="https://www.twitch.tv/manudokiller_"><i class="fa-brands fa-twitch"></i>Twitch</a>
                    <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i> YouTube</a>
                </x-tab-pane>
            </div>
        </div>
    </div>

</body>

</html>
