@props(['options', 'name', 'id'])

<select name="{{ $name ?? '' }}" id="{{ $id ?? ($name ?? '') }}" class="rounded-lg border-2 px-1">

    @foreach ($options ?? [] as $option)
        <option value="{{ $option }}">
            {{ $option }}
        </option>
    @endforeach

    {{ $slot }}

</select>
