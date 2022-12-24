{{--
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
--}}

@extends('layouts.main')
@section('content')
    <div class="login-page">
        <img src="/images/login-background.PNG" alt="">
        <div class="login-form">
            <div class="avatar">
                <img src="{% static 'images/login-avatar.PNG' %}" alt="">
            </div>
            {% if messages %}
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {% for message in messages %}
                <div class="alert {% if message.tags %} alert-{{ 'message.tags '}}{% endif %}">{{ message|safe }}</div>
                {% endfor %}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {% endif %}
            <h1>Login</h1>
            <form action="{% url 'classroom:login' %}" method="post">
                {% csrf_token %}
                <p>Username:</p>
                <input type="text" name="username" placeholder="Enter your username">
                <br>
                <br>
                <p>Password:</p>
                <input type="password" name="password" placeholder="Enter password">
                <br>
                <br>
                <input class="btn btn-primary" type="submit" name="" value="Login">
            </form>
            <a href="{% url 'classroom:signup' %}">Don't have an account.</a>
        </div>
    </div>
@endsection

