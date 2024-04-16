@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8 bg-slate-200">
        <h1 class="text-3xl font-semibold mb-4 text-center">Reset Your Password</h1>
        <form action="{{ route('password.email') }}" method="POST" class="max-w-md mx-auto">
            @csrf
           
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('email') }}">
                <div>
                    @error('email')
                        <span class=" text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
           

            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                   Send 
                </button>
               
            </div>
        </form>
    </div>
@endsection
