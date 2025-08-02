@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <div class="text-center mb-8">
            <div class="mx-auto h-16 w-16 flex items-center justify-center rounded-full bg-green-100 mb-4">
                <i class="fas fa-info-circle text-green-600 text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                About AuthApp
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                A modern, secure authentication system built with Laravel and Tailwind CSS, designed to provide a seamless user experience.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div class="bg-blue-50 rounded-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-blue-600"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg font-medium text-gray-900">Secure Authentication</h3>
                    </div>
                </div>
                <p class="text-gray-600">
                    Built with Laravel's robust authentication system, featuring password hashing, CSRF protection, and secure session management.
                </p>
            </div>

            <div class="bg-green-50 rounded-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-green-600"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg font-medium text-gray-900">Responsive Design</h3>
                    </div>
                </div>
                <p class="text-gray-600">
                    Fully responsive design using Tailwind CSS, ensuring a great experience across all devices and screen sizes.
                </p>
            </div>

            <div class="bg-purple-50 rounded-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                            <i class="fas fa-bolt text-purple-600"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg font-medium text-gray-900">Fast & Efficient</h3>
                    </div>
                </div>
                <p class="text-gray-600">
                    Optimized for performance with efficient database queries, caching, and modern web development best practices.
                </p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-6 w-6 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-gray-900">User Registration</h3>
                            <p class="text-sm text-gray-600">Easy account creation with email validation</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-6 w-6 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-gray-900">Secure Login</h3>
                            <p class="text-sm text-gray-600">Protected authentication with remember me functionality</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-6 w-6 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-gray-900">Password Reset</h3>
                            <p class="text-sm text-gray-600">Secure password recovery via email</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-6 w-6 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-gray-900">User Profile</h3>
                            <p class="text-sm text-gray-600">Comprehensive user profile management</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-6 w-6 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-gray-900">Session Management</h3>
                            <p class="text-sm text-gray-600">Secure session handling and logout functionality</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-6 w-6 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-gray-900">Modern UI</h3>
                            <p class="text-sm text-gray-600">Beautiful, intuitive user interface</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-blue-50 rounded-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Technology Stack</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="h-12 w-12 mx-auto mb-3 flex items-center justify-center rounded-full bg-blue-100">
                        <i class="fab fa-laravel text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-900">Laravel</h3>
                    <p class="text-xs text-gray-600">PHP Framework</p>
                </div>
                <div class="text-center">
                    <div class="h-12 w-12 mx-auto mb-3 flex items-center justify-center rounded-full bg-green-100">
                        <i class="fab fa-php text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-900">PHP</h3>
                    <p class="text-xs text-gray-600">Backend Language</p>
                </div>
                <div class="text-center">
                    <div class="h-12 w-12 mx-auto mb-3 flex items-center justify-center rounded-full bg-purple-100">
                        <i class="fab fa-css3-alt text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-900">Tailwind CSS</h3>
                    <p class="text-xs text-gray-600">CSS Framework</p>
                </div>
                <div class="text-center">
                    <div class="h-12 w-12 mx-auto mb-3 flex items-center justify-center rounded-full bg-yellow-100">
                        <i class="fab fa-js text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-900">JavaScript</h3>
                    <p class="text-xs text-gray-600">Frontend Logic</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 