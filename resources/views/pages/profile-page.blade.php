@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8 bg-slate-200">
        <h1 class="text-3xl font-semibold mb-4 text-center">User Profile</h1>
        <div>
            @if (session('status') === 'profile-information-updated')
                <span class="block font-bold text-green-500 text-center">Profile has been updated successfully.</span>
            @endif
        </div>
        <form action="{{ route('user-profile-information.update') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ $user_informations->username }}">
                <div>
                    @error('name')
                        <span class=" text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ $user_informations->name }}">
                <div>
                    @error('name')
                        <span class=" text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ $user_informations->email }}">
                <div>
                    @error('email')
                        <span class=" text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-4 flex gap-5 items-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update
                </button>
                <div>
                    <a href="{{ route('update_password') }}" class="font-bold hover:text-blue-600 underline">Do you want to update your password?</a><br>
                    <a href="{{ route('delete.account') }}" class="font-bold text-red-500 hover:text-red-600 underline">Do you want to delete your account?</a>

                </div>
            </div>
        </form>
    </div>
@endsection
