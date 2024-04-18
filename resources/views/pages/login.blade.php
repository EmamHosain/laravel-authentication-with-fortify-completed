@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8 bg-slate-200">
        <h1 class="text-3xl font-semibold mb-4 text-center">User Login</h1>
        <form action="{{ route('login') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email or Username</label>
                <input type="text" id="email" name="email" placeholder="Enter your email or username"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('email') }}">
                <div>
                    @error('email')
                        <span class=" text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('password') }}">
                <div>
                    @error('password')
                        <span class=" text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4 flex gap-5 items-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Login
                </button>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="flex items-center">
                            <input type="checkbox" id="remember_me" name="remember"
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-200 dark:focus:border-indigo-500">
                            <span class="ml-2 text-sm">Remember me</span>
                        </label>
                    </div>

                    <a href="{{ route('password.request') }}" class="font-medium underline text-blue-800">Forgotten
                        Password?</a>
                </div>
            </div>
        </form>
    </div>
@endsection
