@extends('layouts.app')

@section('content') 
  @if (! have_posts())
      
 <!-- This example requires Tailwind CSS v2.0+ -->
<!--
  This indi requires updating your template:

  ```
  <html class="h-full">
  <body class="h-full">
  ```
-->
<div class="bg-white min-h-full px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
  <div class="max-w-max mx-auto">
    <main class="sm:flex">
      <p class="text-4xl font-extrabold text-primary-600 sm:text-5xl">404</p>
      <div class="sm:ml-6">
        <div class="sm:border-l sm:border-gray-200 sm:pl-6">
          <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Page not found</h1>
          <p class="mt-1 text-base text-gray-500">Please check the URL in the address bar and try again.</p>
        </div>
        <div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
         
          <a href="https://level5.co.uk/contact" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-primary-700 bg-primary-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Contact Us
          </a>
        </div>
      </div>
    </main>
  </div>
</div>

  @endif
@endsection
