<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <!-- component -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>CineVerse</title>
</head>
<!-- Content -->

<body class="font-sans bg-gray-900 text-white">
    <!-- Navbar -->
        @include('pages.partials.navbar')
    <!-- End Navbar -->
    <!-- Loader component -->
        <x-loader />
    <!-- End Navbar -->
    <!-- Content -->
        @yield('content')
    <!-- End Content -->
    <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.js"></script>
    <!-- End Scripts -->
</body>
<!-- End Content -->
<!-- Footer -->
<footer class="border border-t border-gray-800 ">
    <div class="container mx-auto text-sm px-4 py-6 text-center">
        Develop by CineVerse Teams with <a href="https://www.themoviedb.org/documentation/api" class="underline hover:text-gray-300">TMDb
            API</a>
    </div>
</footer>
<!-- End Footer -->

</html>
