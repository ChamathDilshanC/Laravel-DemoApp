<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ?? 'Laravel App' }}</title>
  <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <nav class="bg-gray-100 px-8 py-4 text-gray-700 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <img src="{{ asset('logo.png') }}" alt="Logo" class="w-10 h-10">
        <span class="font-bold text-2xl">Laravel Learning Platform</span>
      </div>
      <span>Hello, {{ $name ?? 'Guest' }}</span>
  </nav>
  <section class="p-12 mx-auto max-w-6xl text-gray-800">
    {{ $content }}
  </section>
</body>
</html>
