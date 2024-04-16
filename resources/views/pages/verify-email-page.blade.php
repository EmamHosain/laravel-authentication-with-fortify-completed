@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8 bg-slate-200">
        <h1 class="text-3xl font-semibold mb-4 text-center">You must verify your email before access this page.</h1>

        <div class="text-center">
            @if (session('status') === 'verification-link-sent')
                <p class="mb-4 font-medium text-sm text-green-600">
                    A new email verification link has been emailed to you!
                </p>
            @endif
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <button class="px-6 py-2 rounded-md bg-green-500 font-bold text-white" type="submit">Verify Email</button>
            </form>
        </div>
    </div>
@endsection
