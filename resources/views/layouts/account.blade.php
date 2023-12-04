<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/sass/styles.scss', 'resources/js/app.js'])
        <title>@yield('page-title')</title>
    </head>

    <body>
        @include('components.header')
        <div class="account-layout">
            <div class="listings-city">
                <img class="listings-city__img"
                    src="@yield('page-bg')"
                    alt="Modern House" />
                <h1 class="listings-city__title">@yield('title')</h1>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="account__menu">
                                <h3>Welcome Back, {{ Auth::user()->name }}</h3>
                                <h2>Menu</h2>
                                <a href="{{ route('account') }}">Saved Listings</a>
                                <a href="{{ route('show-status') }}">Listings Request Status</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>