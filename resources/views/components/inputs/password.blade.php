@props(['placeholder' => 'Masukkan input', 'value' => null, 'name' => '', 'id'])

<div class="flex flex-col" x-data="{
    type: 'password'
}">
    <div @class([
        'flex items-center justify-center rounded-lg border-2' => true,
        'border-red-500' => $errors->has($name),
    ])>
        <input x-bind:type="type" name="{{ $name }}" id="{{ $id ?? $name }}"
            placeholder="{{ $placeholder }}" value="{{ $value ?? old($name, '') }}"
            class="flex-1 rounded-l-lg px-3 py-1.5">
        <img x-show="type === 'password'" src="/icons/eye-open.svg" alt="Open" x-on:click="type = 'text'"
            class="mx-1 w-5">
        <img x-show="type === 'text'" src="/icons/eye-close.svg" alt="Close" x-on:click="type = 'password'"
            class="mx-1 w-5">
    </div>

    @error($name)
        <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
            <img src="/icons/info.svg" alt="" class="w-4">
            {{ $message }}
        </p>
    @enderror

</div>
