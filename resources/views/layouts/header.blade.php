<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GMP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
    </head>
    <body>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                    <img src="{{URL::asset('assets/images/logo/logo_iut_gmp.png')}}" class="h-20" alt="Logo" />
                    <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline"> <x-bxs-user class="text-[#283618]  w-5" /></a>
            </div>
        </nav>
        <nav class="bg-gray-50 dark:bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center justify-between">
                    <div>
                    <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                        <li>
                            <a href="#" class="text-[#606C38] dark:text-white hover:underline" aria-current="page">IUT</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">FORMATION</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">SCOLARITÉ</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">VIE ÉTUDIANTE</a>
                        </li>
                    </ul>
                    </div>
                    <div>
                        <x-zondicon-search  class="text-[#BC6C25] w-5"/>
                    </div>
                </div>
                
            </div>
        </nav>
      

