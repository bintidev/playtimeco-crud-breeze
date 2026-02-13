<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="public/logo.png" type="image/x-icon">

    @section('title')
        <title>PlaytimeCo</title>
    @endsection

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Signika:wght@300..700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="font-sans text-gray-900 antialiased bg-[url(/public/welcome.jpg)] bg-no-repeat bg-center bg-cover backdrop-blur-xl backdrop-brightness-100">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="mt-8">
            <a href="/">
                <x-application-logo />
            </a>
        </div>

        <div
            class="min-w-[800px] w-full sm:max-w-md m-10 p-[25px] bg-[#FFF7EC] overflow-hidden border-[5px] border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)]">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
