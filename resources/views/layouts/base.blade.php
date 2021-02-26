<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <title>001-A: Markdown + Livewire</title>

    <link href="{{ mix('css/github-styles.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body>
    <main>
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>
