@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8 bg-slate-200">
        <h1 class="text-3xl font-semibold mb-4 text-center">Delete account</h1>
        <form action="{{ route('delete.account') }}" method="POST" class="max-w-md mx-auto">
            @csrf

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <div>
                    @error('password')
                        <span class=" text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4 flex gap-5 items-center">
                <button type="submit"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Delete account
                </button>
            </div>
        </form>
    </div>
@endsection
