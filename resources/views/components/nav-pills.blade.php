<div class="nav nav-pills @isset($class) {{ $class }} @endisset" id="{{ $id }}"
    role="tablist" hidden>
    <x-nav-link name="profile" active>About Me</x-nav-link>
    <x-nav-link name="skills">Skills</x-nav-link>
    <!--
    <x-nav-link name="projects">Projects</x-nav-link>
    -->
    <x-nav-link name="contact_me">Contact Me</x-nav-link>
</div>
