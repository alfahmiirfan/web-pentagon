@props(['text', 'for'])

<div class="flex flex-col gap-1.5">
    <label for="{{ $for }}">
        {{ $text }}
    </label>

    {{ $slot }}

</div>
