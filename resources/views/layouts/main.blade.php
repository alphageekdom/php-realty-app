<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/sass/styles.scss', 'resources/js/app.js'])
        <title>Document</title>
    </head>

    <body>
        <header class="header">

            <div class="container">
                <div class="header__logo">
                    A|G Realty
                </div>

                <div class="header__menu">
                    <a href="#" class="header__menu-link header__menu-link--active">Home</a>
                    <a href="#" class="header__menu-link">Listing</a>
                    <a href="#" class="header__menu-link">Property</a>
                    <a href="#" class="header__menu-link">Pages</a>
                </div>

                <div class="header__account">
                    <div class="header__account-link"><i class="fa-solid fa-user"></i></div>
                    <div class="header__account-link"><i class="fa-solid fa-heart"></i></div>
                </div>
            </div>
        </header>
        @yield('content')
    </body>

</html>