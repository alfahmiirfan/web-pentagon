@props(['placeholder' => 'Masukkan input', 'value' => null, 'name' => '', 'id'])

<div class="flex flex-col">
    <textarea name="{{ $name }}" id="{{ $id ?? $name }}" placeholder="{{ $placeholder }}"
        @class([
            'rounded-lg border-2 px-3 py-1.5' => true,
            'border-red-500' => $errors->has($name),
        ])>{{ $value ?? old($name, '') }}</textarea>

    @error($name)
        <p class="italic text-red-500">
            {{ $message }}
        </p>
    @enderror

</div>
