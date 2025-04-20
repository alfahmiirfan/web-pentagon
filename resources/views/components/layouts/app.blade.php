@props(['title'])

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.9/dist/cdn.min.js"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            // green
                            'cstm-green-900': '#018864',
                            'cstm-green-50': '#F6F8F7',

                            // blue
                            'cstm-blue-900': '#075186',
                        }
                    }
                }
            }
        </script>
    @endif

</head>

<body class="flex min-h-screen w-screen flex-col overflow-x-hidden">

    {{ $slot }}

    @stack('scripts')

</body>

</html>
