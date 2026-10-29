<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>{{ $title }}</title>

</head>

<body> 
    <div class="min-h-screen bg-gray-700">
        
        <x-header>
            <x-slot name="button1"> tpx-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg 
                dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 
                md:mt-0 md:ml-4 
                hover:text-gray-900 hover:bg-gray-200 
                focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline </x-slot>
        </x-header>
        
        
        @if (!request()->routeIs('home'))
            <div class="py-20 px-20"> 
                {{ $slot }}
            </div>
        @else
            {{ $slot }}
        @endif


        <x-footer></x-footer>
    </div>
</body>
</html>
