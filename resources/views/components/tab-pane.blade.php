<div class="tab-pane fade text-center @isset($active) show active @endisset"
    id="pills-{{ $name }}" role="tabpanel" aria-labelledby="pills-{{ $name }}-tab" tabindex="0" hidden>
    <x-dynamic-component :component="$name"></x-dynamic-component>
</div>
