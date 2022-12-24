{{--<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>--}}

@extends('layouts.main')
@section('content')
    {% if messages %}
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {% for message in messages %}
        <div class="alert {% if message.tags %} alert-{{ 'message.tags' }}{% endif %}">{{ 'message|safe' }}</div>
        {% endfor %}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    {% endif %}

    <x-component.banner></x-component.banner>

    <x-component.about></x-component.about>

    <x-component.use-content></x-component.use-content>

    <x-component.research></x-component.research>

    <x-component.social></x-component.social>

@endsection
