 @php
    if(!Auth::user()->regisztralFelhasznalo()){
        echo("<script>window.location.replace('/ujdolgozo')</script>");   
    } 
    if(Auth::user()->isDolgozo()){
        echo("<script>window.location.replace('/sikeresAdatKitoltesDolgozo')</script>");   
    }

@endphp 
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>szerkezet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/szerkezet.css">
    <link rel="stylesheet" href="css/nav.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/dolgozo.js"></script>
    <script src="js/nav.js"></script>
    @yield('head')
</head>

<body id="body-pd" id="main">
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-sm-12 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    @if (Auth::user()->id)
                        <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
                    @endif
                    <div class='nav-profilom'>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    profilom
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target=".jelszoModositModal">Jelszó modosítása</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Kijelentkezés</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button class="openbtn" onclick="openNav()">☰</button>
                </nav>
            </div>
        </div>

        <div class="row pr-12 ">

            <div class="col-sm-2" id="menu">
                <nav class="menu menu--puck">
                    <ul class="menu__list" id="navMenu">
                        <li class="menu__item"><a href="/dolgozo" class="menu__link">Dolgozók</a></li>
                        <li class="menu__item"><a href="/felhasznalo" class="menu__link">Felhasználók</a></li>
                        <li class="menu__item"><a href="/bolcsode" class="menu__link">Bölcsőde</a></li>
                        <li class="menu__item"><a href="/fenntarto" class="menu__link">Fenntartó</a></li>
                        <li class="menu__item"><a href="/mellekletek" class="menu__link">Mellékletek</a></li>
                        <li class="menu__item"><a href="/agaztatiPotlek" class="menu__link">Ágazati pótlék</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-sm-9">
                <article id='tartalom'>
                    @yield('tartalom')
                </article>
            </div>
        </div>

    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div id="jobb-menu"></div>
        <div class="dropdown">
            <a class="hover" class="dropbtn" href="#">Profilom <i class='fa fa-angle-down'></i></a>
            <div class="dropdown-content">
                <a class="hover dropdown-item" href="#">Jelszó modosítása</a>
                <a class="hover dropdown-item" href="{{ route('logout') }}">Kijelentkezés</a>
            </div>
        </div>

        <a class="hover" href="/dolgozo">Dolgozók</a>
        <a class="hover" href="/felhasznalo">Felhasználók</a>
        <a class="hover" href="/bolcsode">Bölcsöde</a>
        <a class="hover" href="/fenntarto">Fenntartó</a>
        <a class="hover" href="/mellekletek">Mellékletek</a>
        <a class="hover" href="/agaztatiPotlek">Ágazati potlék</a>
    </div>
    <div class="modal fade jelszoModositModal" tabindex="-1" role="dialog" aria-labelledby="jelszoModositModal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h6 style="text-align: center">Jelszó módosítás</h6>

                            </div>
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                action="/felhasznaloRegisztracio/{{ Auth::user()->id }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label>Régi jelszó :</label>
                                    <input type="password" id="first-name" class="form-control"
                                        placeholder="Régi jelszó" name="regiJelszo">
                                </div>
                                <div class="form-group">
                                    <label>Új jelszó :</label>
                                    <input type="password" id="first-name" placeholder="Új jelszó"
                                        class="form-control" name="ujJelszo">
                                </div>
                                <div class="form-group">
                                    <label>Új jelszó megerősítése :</label>
                                    <input type="password" id="first-name" class="form-control"
                                        placeholder="Új jelszó megerősítése" name="jelszoMegerosites">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-dark" id="menetesJelszo">Mentés</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>




</body>

</html>
