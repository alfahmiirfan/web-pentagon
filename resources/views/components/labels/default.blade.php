@props([
    'required' => false,
    'text',
    'for',
])

<div class="flex flex-col gap-1.5">
    <label for="{{ $for }}">
        {{ $text }}

        @if ((bool) $required !== false)
            <span class="text-red-500">*</span>
        @endif

    </label>

    {{ $slot }}

</div>
