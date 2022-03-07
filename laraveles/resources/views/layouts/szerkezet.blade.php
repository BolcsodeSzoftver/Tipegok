<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/szerkezet.css">
    <link rel="stylesheet" href="css/nav.css">
    @yield('head')

</head>

<body>
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-sm-12 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    @if (Auth::user()->id)
                        <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
                    @endif
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    profilom
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Beállítások</a>
                                    <a class="dropdown-item" href="#">...</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Kijelentkezés</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>



        <div class="row pr-10">

            <div class="col-sm-2" id="menu">

                <nav class="menu menu--puck">
                    <ul class="menu__list">
                        <li class="menu__item"><a href="/dolgozo" class="menu__link">Dolgozók</a></li>
                        <li class="menu__item"><a href="/felhasznalo" class="menu__link">Felhasználók</a></li>
                        <li class="menu__item"><a href="/" class="menu__link">Bölcsöde</a></li>
                        <li class="menu__item"><a href="/fenntarto" class="menu__link">Fenntartó</a></li>
                        <li class="menu__item menu__item--current"><a href="/mellekletek" class="menu__link">Mellékletek</a></li>
                    </ul>
                </nav>

            </div>
            <div class="col-sm-9">
                <article>
                    @yield('tartalom')
                </article>

            </div>
        </div>
    </div>
</body>

</html>
