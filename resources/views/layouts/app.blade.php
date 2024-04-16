<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>auth with fortify</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto px-4 py-4">
        <nav class="flex items-center justify-between py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <span class="text-xl font-semibold">Logo</span>
            </div>

            <!-- Navigation Links -->
            <ul class="flex items-center space-x-4">
                <li><a href="/" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Dashboard</a></li>
                <li><a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-500">Register</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Login</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Logout</a></li>

            </ul>
        </nav>
    </div>
    @yield('content')
</body>

</html>
