@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <div class="mx-auto h-12 w-12 flex items-center justify-center rounded-full bg-yellow-100">
                <i class="fas fa-key text-yellow-600 text-xl"></i>
            </div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Forgot your password?
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Enter your email address and we'll send you a link to reset your password.
            </p>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('password.email') }}" method="POST">
            @csrf
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email" required 
                       class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" 
                       placeholder="Email address" value="{{ old('email') }}">
            </div>

            <div>
                <button type="submit" 
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <i class="fas fa-paper-plane text-yellow-500 group-hover:text-yellow-400"></i>
                    </span>
                    Send reset link
                </button>
            </div>

            <div class="text-center">
                <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                    <i class="fas fa-arrow-left mr-1"></i>Back to login
                </a>
            </div>
        </form>
    </div>
</div>
@endsection 