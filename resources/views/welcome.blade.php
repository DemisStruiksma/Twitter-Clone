<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Twitty</title>
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <h1 class="text-4xl">🐦</h1>
            </header>
        </section>
            <div class="container mx-auto flex justify-center">
                <div class="text-6xl font-bold">
                    Twitty
                </div>
            </div>
                <div class="container mx-auto flex justify-center">
                    <div class="mt-4 space-x-4 text-lg">
                    @auth
                        <a href="{{ route('home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    </div>
                </div>
            </body>
        </html>
