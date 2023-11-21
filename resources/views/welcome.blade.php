<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
        

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <nav class="navbar player navbarre" style="background-color: #7c3b27; width: 100%;">
                  <div class="position-text">     
                        @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10" >
                                        @auth
                                    
                                            @if (Auth::user()->role == 1 )
                                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                            @endif

                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                 </div>


            
    <a class="navbar-brand" href="../../index.php">
        <img alt="logo" class="d-inline-block align-top logo" src="../images/harasstic.png">
    </a>
    <a class="mr-5" href="parameters.html" style="color: #3aa0ab; text-decoration: none;">
        <h1><strong>JOUER</strong></h1>
    </a>
</nav>
<div class="texte mt-4">
    <strong>Pour vous rendre content de votre niveau d'etude :</strong>
</div>
<div style="display: flex; width: 100%; justify-content: space-evenly;">
    

    @foreach($distinctSubCategories as $subCategory)
    <div class="choc-data">
        <a href="{{url('/quiz', $subCategory)}}" class="explanation">{{ $subCategory }}</a>
    </div>
@endforeach
    
</div>

<!-- <div style="display: flex; width: 100%; justify-content: center;">
    <div class="choc-data">
        <div class="percentage">QUI ?</div>
        <div class="explanation">
        </div>
    </div>
</div> -->
<div class="regle" style="text-decoration: underline;">
    <strong></strong>
</div>
<div class="explanation_jeu" style="display: flex;">
    <strong> description du jeux</strong>
</div>
<div class="texte mt-3">
    <a href="parameters.html">
        <button class="btn" style="font-size: 30px; background-color: #3aa0ab; color: aliceblue;" type="button">JOUER</button>
    </a>
</div>
<script crossorigin="anonymous"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
-->
            
        </div>

    </body>
</html>
