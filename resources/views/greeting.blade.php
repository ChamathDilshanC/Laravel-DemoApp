<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Laravel App')</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <section class="p-12 mx-auto max-w-6xl text-gray-800">
    <h1 class="text-4xl font-bold mb-6">Greeting Page</h1>
    <p class="text-lg">Hello world</p>
    <p class="mt-4 text-gray-600">Welcome, {{ $name ?? 'Guest' }}!</p>
  </section>
</body>
</html>
