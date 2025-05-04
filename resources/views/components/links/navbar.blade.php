@props(['active', 'href', 'text'])

<a href="{{ $href }}" @class([
    'block w-full rounded-lg px-3 py-1.5' => true,
    'bg-cstm-blue-900 text-white hover:text-gray-300' => $active,
    'hover:text-cstm-blue-900' => !$active,
])>
    {{ $text }}
</a>
