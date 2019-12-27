<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('meta-title', 'Super blog!')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
    <nav class="bg-navigation shadow-md">
       <div class="container mx-auto flex flex-col md:flex-row items-center md:justify-between px-4 py-0">
           <div class="mb-2 md:mb-0">
               <a href="/" class="text-white no-underline text-3xl">
                   <svg class="fill-current text-3xl h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                   <span class="font-semibold text-3xl tracking-tight">
                       {{ config('app.name') }}
                   </span>
               </a>
           </div>
           <div class="text-lg">
               
               <a href="/blog" class="ml-2 no-underline text-white hover:text-grey">
                   Blog
               </a>
               @auth
                    <a href="/home" class="ml-2 no-underline text-white hover:text-grey">
                         Mon compte
                    </a>
                    <a href="/logout" class="ml-2 no-underline text-white hover:text-grey">
                        Se déconncter
                    </a>
                @else
                <a href="{{ route('login') }}" class="ml-2 no-underline text-white hover:text-grey">
                    Se connecter
                </a>
                <a href="/register" class="ml-2 no-underline text-white hover:text-grey">
                    S'enregistrer
                </a>
               @endauth
           </div>
       </div>
    </nav>
    <div>

        @component('layouts.flash')
            {!! session('message') !!}
        @endcomponent

        @yield('content')
        
    </div>

   <!-- Les restes du site... -->
   @yield('js')
   <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>