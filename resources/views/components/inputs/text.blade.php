@props(['placeholder' => 'Masukkan input', 'value' => null, 'name' => '', 'id'])

<div class="flex flex-col">
    <input type="text" name="{{ $name }}" id="{{ $id ?? $name }}" placeholder="{{ $placeholder }}"
        value="{{ $value ?? old($name, '') }}" @class([
            'rounded-lg border-2 px-3 py-1.5' => true,
            'border-red-500' => $errors->has($name),
        ])>

    @error($name)
        <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
            <img src="/icons/info.svg" alt="" class="w-4">
            {{ $message }}
        </p>
    @enderror

</div>
