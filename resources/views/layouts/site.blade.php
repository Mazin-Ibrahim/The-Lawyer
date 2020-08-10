<!doctype html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Cairo', sans-serif;">
    <div id="app">
        <nav class="bg-gray-800 py-4">
            <div class="flex md:flex-row-reverse justify-between  items-center">
                <div class="text-white mx-8">
                    <a href=""><img src="{{ asset('image/logo.png') }}"></a>
                </div>
                <div class="md:mx-auto">
                    <a href="" class="text-white mx-4  hover:bg-gray-700 py-1 px-1 rounded">الرئيسية</a>
                    <a href="" class="text-white mx-4  hover:bg-gray-700 py-1 px-1 rounded">المحامين</a>
                    <a href="" class="text-white mx-4  hover:bg-gray-700 py-1 px-1 rounded">المدونة</a>
                    <a href="" class="text-white mx-4  hover:bg-gray-700 py-1 px-1 rounded">من نحن</a>
                    <a href="" class="text-white mx-4  hover:bg-gray-700 py-1 px-1 rounded">تواصل معنا</a>
                </div>
                <div>
                    <a href="" class="text-white mx-0 hover:bg-gray-700 py-1 px-1 rounded">تسجيل دخول</a>
                    <a href="" class="text-white mx-4 hover:bg-gray-700 py-1 px-1 rounded">سجل معنا</a>
                </div>
            </div>
        </nav>
        {{-- content --}}
        <div class=""> 
            @yield('content')
        </div>
        <footer>
            <div class="py-2 bg-gray-800">
                <h1 class="text-center text-white">منصة المحامين  الالكترونية</h1>
            </div>
        </footer>
    </div>
</body>
</html>
