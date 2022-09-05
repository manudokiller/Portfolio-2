<button class="nav-link rounded-pill shadow-sm @isset($active) active @endisset" data-bs-toggle="pill"
    data-bs-target="#pills-{{ $name }}" type="button" role="tab" aria-controls="pills-{{ $name }}"
    aria-selected="false">{{ $slot }}</button>
