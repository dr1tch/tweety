<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-gray-900 ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="min-h-screen font-sans">
    <div id="app">
      <section class="px-8 py-4 mb-4">
        <header class=" flex justify-content container mx-auto">
          <div class="lg:w-1/8">
            <h1 class="md:flex">
              <img
                class="h-8 mt-2"
                src="/media/twitter.svg"
                alt=""
              >
              <span class="py-2 mx-2 font-bold text-2xl">Tweety</span>
            </h1>
          </div>
          <div class="shadow-md bg-tran rounded-lg p-6  lg:flex-1 mx-20">
              Home
          </div>
          <div class="lg:w-1/5">
            <input
            class="bg-tran mt-2 p-4 text-lg w-full rounded-lg"
             type="text"
             name=""
             value=""
             placeholder="Search"
             >
          </div>

        </header>
      </section>
      <section class="px-8">
        <main class="container mx-auto">
          <div class="lg:flex lg:justify-between">
              <div class="lg:w-1/6">
                  @include('_sidebar-links')
              </div>
              <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                @yield('content')
              </div>

                <div class="lg:w-1/6 bg-tran p-4 rounded-lg h-full">
                      @include('_friends-list')
                </div>

        </main>
      </section>
    </div>
</body>
</html>
