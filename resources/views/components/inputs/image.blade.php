@props(['placeholder', 'label', 'name', 'id'])

<label for="{{ $id ?? ($name ?? '') }}" class="flex flex-col gap-1.5">
    <p>
        {{ $label ?? '' }}
    </p>
    <div class="flex h-52 items-center justify-center rounded-lg border-2 border-dashed">
        <p class="text-lg">
            {{ $placeholder ?? 'Pilih File' }}
        </p>
    </div>
    <input type="file" name="{{ $name ?? '' }}" id="{{ $id ?? ($name ?? '') }}" accept="image/*" class="hidden">

    @error($name ?? '')
        <p class="italic text-red-500">
            {{ $message }}
        </p>
    @enderror

</label>
