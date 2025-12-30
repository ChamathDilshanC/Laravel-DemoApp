<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Laravel App')</title>
  <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  {{-- Navigation Bar --}}
  <nav class="bg-indigo-600 px-8 py-4 text-white flex items-center justify-between shadow-lg">
      <div class="flex items-center gap-3">
        <img src="{{ asset('logo.png') }}" alt="Logo" class="w-10 h-10">
        <span class="font-bold text-2xl">Brand</span>
      </div>
      <div class="flex items-center gap-4">
        <a href="/" class="hover:text-indigo-200 transition">Home</a>
        <a href="/about" class="hover:text-indigo-200 transition">About</a>
        <a href="/profile" class="hover:text-indigo-200 transition">Profile</a>
        <span class="ml-4 bg-indigo-700 px-4 py-2 rounded-full">
          Hello, @yield('username', 'Guest')
        </span>
      </div>
  </nav>

  {{-- Main Content Area --}}
  <main class="p-12 mx-auto max-w-6xl">
    @yield('content')
  </main>

  {{-- Footer --}}
  <footer class="bg-gray-800 text-white text-center py-6 mt-12">
    <p>&copy; {{ date('Y') }} Laravel App. All rights reserved.</p>
  </footer>
</body>
</html>
