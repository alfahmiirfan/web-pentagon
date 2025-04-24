@props(['options' => [], 'value' => null, 'name' => '', 'id'])

<select name="{{ $name }}" id="{{ $id ?? $name }}" class="rounded-lg border-2 px-1" {!! $attributes !!}>

    @foreach ($options as $option)
        <option value="{{ $option }}" @selected($option === ($value ?? old($name, '')))>
            {{ $option }}
        </option>
    @endforeach

    {{ $slot }}

</select>
