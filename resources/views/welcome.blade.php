<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuthApp - Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="text-center">
                <div class="mx-auto h-20 w-20 flex items-center justify-center rounded-full bg-blue-100 mb-4">
                    <i class="fas fa-shield-alt text-blue-600 text-3xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">
                    Welcome to AuthApp
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    A secure and modern authentication system
                </p>
            </div>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-xl sm:rounded-lg sm:px-10">
                <div class="text-center mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">
                        Get Started
                    </h3>
                    <p class="text-gray-600">
                        Choose an option to continue
                    </p>
                </div>

                <div class="space-y-4">
                    <a href="{{ route('login') }}" 
                       class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Sign In
                    </a>
                    
                    <a href="{{ route('register') }}" 
                       class="w-full flex justify-center py-3 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-user-plus mr-2"></i>
                        Create Account
                    </a>
                </div>

                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                            Sign in here
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto px-4">
                <div class="text-center">
                    <div class="mx-auto h-12 w-12 flex items-center justify-center rounded-full bg-green-100 mb-4">
                        <i class="fas fa-shield-alt text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Secure</h3>
                    <p class="text-sm text-gray-600">Built with industry-standard security practices</p>
                </div>
                <div class="text-center">
                    <div class="mx-auto h-12 w-12 flex items-center justify-center rounded-full bg-blue-100 mb-4">
                        <i class="fas fa-mobile-alt text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Responsive</h3>
                    <p class="text-sm text-gray-600">Works perfectly on all devices</p>
                </div>
                <div class="text-center">
                    <div class="mx-auto h-12 w-12 flex items-center justify-center rounded-full bg-purple-100 mb-4">
                        <i class="fas fa-bolt text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Fast</h3>
                    <p class="text-sm text-gray-600">Optimized for speed and performance</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
