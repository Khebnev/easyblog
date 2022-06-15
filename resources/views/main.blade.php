<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
            <div class="mb-2 sm:mb-0 inner">

                <a href="{{ route('home') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Laravel с нуля</a><br>
                <span class="text-xs text-grey-dark">Уроки от CutCode</span>

            </div>

            <div class="sm:mb-0 self-center">
                    <a href="{{ route("logout") }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
                

            
                    <a href="{{ route('login') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>

            </div>
        </nav>
    </body>
</html>
