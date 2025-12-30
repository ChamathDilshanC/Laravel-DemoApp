<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} University - Professional Learning Platform</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-white">

    <!-- Main Content Container - 70% width, centered -->
    <div class="w-[70%] mx-auto py-12">

        <!-- Header with Logo and Navigation -->
        <div class="flex items-start justify-between mb-16">
            <!-- Left: Logo and Brand -->
            <div class="flex items-start space-x-4">
                <!-- Laravel Icon -->
                <div class="flex-shrink-0">
                    <svg class="w-16 h-16 text-[#FF2D20]" viewBox="0 0 50 52" fill="currentColor">
                        <path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"/>
                    </svg>
                </div>

                <!-- Brand Name -->
                <div class="pt-3">
                    <div class="flex items-baseline space-x-1">
                        <span class="text-xl font-bold text-gray-900">Laravel</span>
                        <span class="text-xl font-bold text-[#FF2D20]">Learning</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-0.5">Master Modern Web Development</p>
                </div>
            </div>

            <!-- Right: Navigation -->
            <div class="flex items-center space-x-8">
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="/home" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition">Home</a>
                    <a href="/courses" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition">Courses</a>
                    <a href="/about" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition">About</a>
                    <a href="/profile" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition">Community</a>
                </nav>
            </div>
        </div>

        <!-- Hero Content -->
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- Left Column: Text Content -->
            <div class="space-y-6">
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 leading-[1.1]">
                    Master Laravel<br>
                    Development in<br>
                    2025
                </h1>

                <p class="text-gray-600 leading-relaxed text-base max-w-md">
                    Learn to build modern, scalable web applications with Laravel - the PHP framework for web artisans. From beginner fundamentals to advanced techniques, gain the skills needed to create production-ready applications and advance your career as a professional developer.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-3 pt-2">
                    <a href="https://laravel.com/docs" target="_blank"
                       class="inline-flex items-center px-7 py-3.5 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-800 transition-all duration-200 shadow-lg hover:shadow-xl">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        View Documentation
                    </a>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="inline-flex items-center px-7 py-3.5 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-800 transition-all duration-200 shadow-lg hover:shadow-xl">
                                Dashboard
                            </a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="inline-flex items-center px-7 py-3.5 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-800 transition-all duration-200 shadow-lg hover:shadow-xl">
                                    Start Learning
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>

            <!-- Right Column: Illustration -->
            <div class="flex items-center justify-center">
                <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-3xl p-12 w-full h-80 flex flex-col items-center justify-center">
                    <!-- Code Icon -->
                    <svg class="w-32 h-32 text-red-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                    <p class="text-sm text-gray-400 font-medium">Build with Laravel</p>
                </div>
            </div>
        </div>

        <!-- Partner Logos Section -->
        <div class="mt-20 pt-8 border-t border-gray-200">
            <p class="text-sm text-gray-500 mb-6">Trusted by developers at leading companies</p>
            <div class="flex flex-wrap items-center justify-start gap-8 md:gap-12 opacity-30">
                <span class="text-xl font-semibold text-gray-700">Laravel</span>
                <span class="text-xl font-semibold text-gray-700">Forge</span>
                <span class="text-xl font-semibold text-gray-700">Vapor</span>
                <span class="text-xl font-semibold text-gray-700">Livewire</span>
                <span class="text-xl font-semibold text-gray-700">Jetstream</span>
                <span class="text-xl font-semibold text-gray-700">Inertia</span>
                <span class="text-xl font-semibold text-gray-700">Filament</span>
            </div>
        </div>
    </div>
    <div>
        <p class="text-sm text-gray-400 mb-6 flex justify-center align-center">Developed by Chamath Dilshan.</p>
    </div>

</body>
</html>
