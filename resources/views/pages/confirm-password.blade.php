@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8 bg-slate-200">
        <h1 class="text-3xl font-semibold mb-4 text-center">Delete account page</h1>

        <div class=" w-96 mx-auto">
            <form action="{{ route('password.confirm') }}" method="POST">
                @csrf
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
                <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-md font-bold">Delete account</button>
            </form>
        </div>

    </div>
@endsection
