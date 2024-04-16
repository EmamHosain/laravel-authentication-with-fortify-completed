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


                @guest
                    <li><a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-500">Register</a></li>
                    <li><a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-500">Login</a></li>
                @endguest

                @auth
                    <li><a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-500">Dashboard</a></li>
                    <li><a href="{{ route('password.confirm') }}" class="text-gray-700 hover:text-blue-500">Account Delete</a></li>

                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn px-4 py-2 bg-green-500 text-white hover:bg-green-400 hover:text-black" type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

            </ul>
        </nav>
    </div>
    @yield('content')
</body>

</html>
