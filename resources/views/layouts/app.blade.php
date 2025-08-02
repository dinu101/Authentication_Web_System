<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Auth App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-gray-800">
                        <i class="fas fa-shield-alt mr-2"></i>AuthApp
                    </a>
                </div>
                
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-home mr-1"></i>Home
                        </a>
                        <a href="{{ route('profile') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-user mr-1"></i>Profile
                        </a>
                        <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-info-circle mr-1"></i>About
                        </a>
                        <a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-envelope mr-1"></i>Contact
                        </a>
                        <div class="relative">
                            <span class="text-gray-700 text-sm font-medium">{{ Auth::user()->name }}</span>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                                <i class="fas fa-sign-out-alt mr-1"></i>Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-sign-in-alt mr-1"></i>Login
                        </a>
                        <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-user-plus mr-1"></i>Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @if(session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} AuthApp. All rights reserved.</p>
        </div>
    </footer>
</body>
</html> 