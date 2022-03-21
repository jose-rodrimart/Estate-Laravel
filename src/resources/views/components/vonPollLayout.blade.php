<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
<section>
    <nav class="md:flex md:justify-between md:items-center bg-blue-900 h-16">
        <div>
            <a href="/von-poll" class="px-1">
                <img src="/images/vonPollLogo.svg" alt="Laracasts Logo" width="165" height="16" class="bg-white mx-3">
            </a>
        </div>
    </nav>

    {{ $slot }}

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16 mx-10">
    </footer>
</section>
</body>
