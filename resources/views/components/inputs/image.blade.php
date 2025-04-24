@props(['placeholder' => 'Pilih File', 'label' => '', 'value' => '', 'name' => '', 'id'])

<label for="{{ $id ?? $name }}" class="flex flex-col gap-1.5" x-data="{
    previewImage: `{{ $value }}`,
    pushPreview(event) {
        const file = event.target.files[0];
        if (file) {
            this.previewImage = URL.createObjectURL(file);
        } else {
            this.previewImage = null;
        }
    }
}">
    <p>
        {{ $label }}
    </p>
    <div @class([
        'flex h-60 items-center justify-center rounded-lg border-2 border-dashed p-3' => true,
        'border-red-500' => $errors->has($name),
    ])>
        <p x-show="previewImage === ''" class="text-lg">
            {{ $placeholder }}
        </p>
        <img id="imagePreview" x-show="previewImage !== ''" x-bind:src="previewImage" class="max-h-full max-w-full">
    </div>
    <input type="file" name="{{ $name }}" id="{{ $id ?? $name }}" accept="image/*" class="hidden"
        x-on:change="pushPreview($event)">

    @error($name)
        <p class="italic text-red-500">
            {{ $message }}
        </p>
    @enderror

</label>
