<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion scolaire</title>
    @viteReactRefresh
    @vite(['resources/js/app.tsx', 'resources/css/app.css'])
</head>

<body>

    <div class="lg:grid md:grid lg:grid-cols-5 md:grid-cols-2 bg-slate-200">
        @include('layouts.sidebar')
        @include('layouts.hamburger')
        <div class="flex flex-col mx-0 col-span-4 px-0 overflow-hidden">
            @include('layouts.navbar')
            @yield('content')
        </div>

    </div>




</body>
</html>