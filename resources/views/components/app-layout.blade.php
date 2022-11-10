<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drag and drop table with livewire</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
@stack('styles')

 @livewireStyles
</head>

<body>
    <div class=" bg-indigo-50">
        <!-- Header -->
        <header>
            <h1 class="bg-white py-4 text-center">
                <a href="/" class="text-xl font-bold text-gray-700 cursor-pointer">LARAVEL DRAGGABLE TABLE WITH
                    LIVEWIRE</a>
            </h1>

        </header>
        <section class="min-h-screen body-font text-gray-600 ">
            <div class="container mx-auto px-5 py-10">
                <div class="m-4 flex flex-wrap">

                    {{ $slot }}

                </div>
        </section>

    </div>

    @livewireScripts
@stack('scripts')
</body>

</html>
