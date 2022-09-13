<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Esteban Portfolio</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script src="https://kit.fontawesome.com/c179082552.js" crossorigin="anonymous"></script>

    @include('css.dark')
    @include('css')

</head>

<body>
    <div class="card shadow" id="main_card">
        <div id="pills-div" class="d-flex">
            <x-nav-pills class="px-1" id="v-pills-tab"></x-nav-pills>
            <x-nav-pills id="h-pills-tab"></x-nav-pills>
            <div class="tab-content d-flex m-auto" id="pills-tabContent">
                <x-tab-pane name="profile" active></x-tab-pane>
                <x-tab-pane name="skills"></x-tab-pane>
                <!--
                <x-tab-pane name="projects"></x-tab-pane>
                -->
                <x-tab-pane name="contact_me"></x-tab-pane>
            </div>
        </div>
    </div>
</body>

</html>
