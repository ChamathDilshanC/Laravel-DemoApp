@extends('layouts.app')

@section('title', 'User Profile')

@section('username', 'Chamath')

@section('content')
  <div class="bg-white rounded-lg shadow-lg p-8">
    <div class="flex items-center gap-6 mb-8">
      <div class="w-24 h-24 bg-indigo-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
        C
      </div>
      <div>
        <h1 class="text-4xl font-bold text-gray-800">Chamath's Profile</h1>
        <p class="text-gray-600 mt-2">Full Stack Developer</p>
      </div>
    </div>

    <div class="border-t pt-6">
      <h2 class="text-2xl font-semibold mb-4 text-gray-800">About Me</h2>
      <p class="text-gray-700 leading-relaxed">
        This is an example page using the <strong>traditional Laravel layout approach</strong>
        with <code class="bg-gray-100 px-2 py-1 rounded">@@extends</code> and
        <code class="bg-gray-100 px-2 py-1 rounded">@@yield</code> directives.
      </p>
    </div>

    <div class="mt-8 grid grid-cols-3 gap-6">
      <div class="bg-indigo-50 p-6 rounded-lg text-center">
        <div class="text-3xl font-bold text-indigo-600">42</div>
        <div class="text-gray-600 mt-2">Projects</div>
      </div>
      <div class="bg-green-50 p-6 rounded-lg text-center">
        <div class="text-3xl font-bold text-green-600">1.2k</div>
        <div class="text-gray-600 mt-2">Commits</div>
      </div>
      <div class="bg-purple-50 p-6 rounded-lg text-center">
        <div class="text-3xl font-bold text-purple-600">15</div>
        <div class="text-gray-600 mt-2">Stars</div>
      </div>
    </div>
  </div>
@endsection
