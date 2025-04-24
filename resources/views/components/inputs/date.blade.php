@props(['value', 'name', 'id'])

<div class="flex flex-col">
    <input type="date" name="{{ $name ?? '' }}" id="{{ $id ?? ($name ?? '') }}" value="{{ $value ?? old($name ?? '', '') }}" @class([
        'rounded-lg border-2 px-3 py-1.5' => true,
        'border-red-500' => $errors->has($name ?? ''),
    ])>

    @error($name ?? '')
        <p class="italic text-red-500">
            {{ $message }}
        </p>
    @enderror

</div>
