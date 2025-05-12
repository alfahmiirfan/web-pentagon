@props(['title' => config('app.name')])

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    @stack('heads')

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.9/dist/cdn.min.js"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            primary: ['Poppins', 'sans-serif'],
                        },
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

<body class="flex min-h-screen w-screen flex-col overflow-x-hidden font-primary">

    {{ $slot }}

    @stack('scripts')

</body>

</html>
