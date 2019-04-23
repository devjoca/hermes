<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="font-sans">
    <div class="min-h-screen md:flex">
        <div class="flex-none w-full md:max-w-xs bg-black text-white">
            <div class="px-10 py-6 bg-teal-dark">
                <h2><span class="font-mono">Hermes</span>⚡</h2>
            </div>
            <div class="mt-10 px-6 py-5 text-lg font-semibold border-indigo-light border-l-8 bg-grey-darkest cursor-pointer">
                <svg class="align-middle w-5 h-5 mr-2 fill-current text-white inline-block" enable-background="new 0 0 372 372" version="1.1" viewBox="0 0 372 372" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m320 19.6h-268c-25.12 0-52 13.68-52 52v179.68c0 38.32 26.88 52 52 52h99.2v33.12h-16.48c-4.418 0-8 3.582-8 8s3.582 8 8 8h105.6c4.418 0 8-3.582 8-8s-3.582-8-8-8h-19.52v-33.12h99.2c38.32 0 52-26.88 52-52v-179.68c0-38.32-26.88-52-52-52zm-115.2 316.8h-37.6v-33.12h37.6v33.12zm151.2-85.12c0 10.8-3.52 36-36 36h-268c-10.8 0-36-3.52-36-36v-11.44h340v11.44zm0-27.36h-340v-152c0-32.48 25.2-36 36-36h268c10.8 0 36 3.52 36 36v152z" />
                    <path d="m315.69 57.359c-3.532-2.654-8.547-1.942-11.201 1.59-3e-3 4e-3 -6e-3 7e-3 -8e-3 0.011h0.4l-59.68 80-28-36.4c-1.458-1.897-3.689-3.042-6.08-3.12-2.381-0.068-4.669 0.93-6.24 2.72l-45.601 51.84-33.44-57.12c-1.426-2.405-4.004-3.891-6.8-3.92-2.808-0.016-5.42 1.441-6.88 3.84l-55.2 89.2c-2.841 3.384-2.4 8.43 0.984 11.271s8.43 2.4 11.271-0.984c0.573-0.682 1.027-1.455 1.345-2.287l48-78.24 32 55.12c2.231 3.814 7.131 5.096 10.945 2.865 0.724-0.424 1.377-0.959 1.935-1.585l46.56-52.08 28.56 37.12c1.634 1.85 3.937 2.972 6.4 3.12 2.49-0.025 4.826-1.208 6.32-3.2l66-88.56c2.654-3.532 1.942-8.547-1.59-11.201z" />
                </svg>
                <span>Apps</span>
            </div>
            <div class="mt-10 mb-5 px-6 py-5 text-lg font-semibold cursor-pointer pin-b fixed text-center w-1/5">
                <a class="text-white no-underline" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <svg class="align-middle w-4 h-4 text-white fill-current text-right" enable-background="new 0 0 471.2 471.2" version="1.1" viewBox="0 0 471.2 471.2" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m227.62 444.2h-122.9c-33.4 0-60.5-27.2-60.5-60.5v-296.2c0-33.4 27.2-60.5 60.5-60.5h124.9c7.5 0 13.5-6 13.5-13.5s-6-13.5-13.5-13.5h-124.9c-48.3 0-87.5 39.3-87.5 87.5v296.2c0 48.3 39.3 87.5 87.5 87.5h122.9c7.5 0 13.5-6 13.5-13.5s-6.1-13.5-13.5-13.5z" />
                    <path d="m450.02 226.1l-85.8-85.8c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l62.8 62.8h-273.9c-7.5 0-13.5 6-13.5 13.5s6 13.5 13.5 13.5h273.9l-62.8 62.8c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l85.8-85.8c5.4-5.4 5.4-14 0.1-19.2z" />
                </svg>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <div id="app" class="flex-1 bg-grey-lightest text-grey-darkest pl-10">
            @yield('body')
        </div>
    </div>
</body>
<script src="{{ mix('js/app.js') }}"></script>

</html>
