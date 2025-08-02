@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <div class="text-center">
            <div class="mx-auto h-16 w-16 flex items-center justify-center rounded-full bg-blue-100 mb-4">
                <i class="fas fa-home text-blue-600 text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                Welcome back, {{ Auth::user()->name }}!
            </h1>
            <p class="text-lg text-gray-600 mb-8">
                You are successfully logged in to your account.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg p-6 text-white">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-user text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium">Profile</h3>
                        <p class="text-blue-100">Manage your account</p>
                    </div>
                </div>
                <a href="{{ route('profile') }}" class="mt-4 inline-flex items-center text-sm font-medium text-blue-100 hover:text-white">
                    View profile <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg p-6 text-white">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium">About</h3>
                        <p class="text-green-100">Learn more about us</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="mt-4 inline-flex items-center text-sm font-medium text-green-100 hover:text-white">
                    Read more <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg p-6 text-white">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-envelope text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium">Contact</h3>
                        <p class="text-purple-100">Get in touch with us</p>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="mt-4 inline-flex items-center text-sm font-medium text-purple-100 hover:text-white">
                    Contact us <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="bg-gradient-to-r from-red-500 to-red-600 rounded-lg p-6 text-white">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-sign-out-alt text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium">Logout</h3>
                        <p class="text-red-100">Sign out of your account</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="inline-flex items-center text-sm font-medium text-red-100 hover:text-white">
                        Sign out <i class="fas fa-arrow-right ml-1"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-12 bg-gray-50 rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Account Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->name }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->email }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Member Since</label>
                    <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->created_at->format('F j, Y') }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Last Updated</label>
                    <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->updated_at->format('F j, Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 