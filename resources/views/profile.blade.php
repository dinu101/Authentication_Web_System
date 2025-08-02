@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <div class="text-center mb-8">
            <div class="mx-auto h-20 w-20 flex items-center justify-center rounded-full bg-blue-100 mb-4">
                <i class="fas fa-user text-blue-600 text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                {{ Auth::user()->name }}
            </h1>
            <p class="text-lg text-gray-600">
                {{ Auth::user()->email }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Profile Information -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">
                    <i class="fas fa-info-circle mr-2"></i>Profile Information
                </h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Full Name</label>
                        <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email Address</label>
                        <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->email }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Account Created</label>
                        <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->created_at->format('F j, Y \a\t g:i A') }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Last Updated</label>
                        <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->updated_at->format('F j, Y \a\t g:i A') }}</p>
                    </div>
                </div>
            </div>

            <!-- Account Actions -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">
                    <i class="fas fa-cog mr-2"></i>Account Actions
                </h2>
                <div class="space-y-4">
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <h3 class="text-sm font-medium text-blue-900 mb-2">Change Password</h3>
                        <p class="text-sm text-blue-700 mb-3">Update your account password for better security.</p>
                        <a href="{{ route('password.request') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fas fa-key mr-2"></i>Change Password
                        </a>
                    </div>

                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                        <h3 class="text-sm font-medium text-yellow-900 mb-2">Account Security</h3>
                        <p class="text-sm text-yellow-700 mb-3">Review your account security settings and recent activity.</p>
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-yellow-700 bg-yellow-100 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            <i class="fas fa-shield-alt mr-2"></i>Security Settings
                        </button>
                    </div>

                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                        <h3 class="text-sm font-medium text-red-900 mb-2">Danger Zone</h3>
                        <p class="text-sm text-red-700 mb-3">Permanently delete your account and all associated data.</p>
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <i class="fas fa-trash mr-2"></i>Delete Account
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="mt-8 bg-gray-50 rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">
                <i class="fas fa-history mr-2"></i>Recent Activity
            </h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between py-2 border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-sign-in-alt text-green-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Successfully logged in</p>
                            <p class="text-sm text-gray-500">Today at {{ now()->format('g:i A') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-user-edit text-blue-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Profile viewed</p>
                            <p class="text-sm text-gray-500">Today at {{ now()->subMinutes(5)->format('g:i A') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between py-2">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center">
                                <i class="fas fa-home text-purple-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Home page accessed</p>
                            <p class="text-sm text-gray-500">Today at {{ now()->subMinutes(10)->format('g:i A') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 