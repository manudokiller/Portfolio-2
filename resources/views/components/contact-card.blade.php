<a href="{{ $url }}" target="_blank" title="{{ $description }}">
    <div class="card contact-card shadow-sm py-3">
        <i class="{{ $icon }} fa-2x pb-3"></i>
        {{ $slot }}
    </div>
</a>


<style>
    a {
        text-decoration: none;
    }

    .contact-card {
        min-width: 125px;
    }

</style>
