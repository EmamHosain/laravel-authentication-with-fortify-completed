@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8 bg-slate-200">
        <h1 class="text-3xl font-semibold mb-4 text-center">User Dashboard</h1>
        <h1 class="text-3xl font-semibold mb-4 text-center">name: {{ $name ?? '' }}</h1>

    </div>
@endsection
