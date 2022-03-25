
<?php
    if(!Auth::user()->regisztralFelhasznalo()){
        echo("<script>window.location.replace('/ujdolgozo')</script>");   
    }
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>szerkezet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/szerkezet.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/nav.js"></script>
    <?php echo $__env->yieldContent('head'); ?>
</head>

<body id="body-pd" id="main">
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-sm-12 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <?php if(Auth::user()->id): ?>
                        <a class="navbar-brand" href="#"><?php echo e(Auth::user()->name); ?></a>
                    <?php endif; ?>
                    <div class='nav-profilom'>
                        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown"> -->
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        profilom
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Beállítások</a>
                                        <a class="dropdown-item" href="#">...</a>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Kijelentkezés</a>
                                    </div>
                                </li>
                            </ul>
                        <!-- </div> -->
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
                        <li class="menu__item"><a href="<?php echo e(route('kezdolap')); ?>" class="menu__link">Bölcsöde</a></li>
                        <li class="menu__item"><a href="/fenntarto" class="menu__link">Fenntartó</a></li>
                        <li class="menu__item"><a href="/mellekletek" class="menu__link">Mellékletek</a></li>
                        <li class="menu__item"><a href="/agaztatiPotlek" class="menu__link">Ágazati potlék</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="col-sm-9" >
                <article id='tartalom'>
                    <?php echo $__env->yieldContent('tartalom'); ?>
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
                    <a class="hover dropdown-item" href="#">Beállítások</a>
                    <a class="hover dropdown-item" href="#">...</a>
                    <a class="hover dropdown-item" href="<?php echo e(route('logout')); ?>">Kijelentkezés</a>
                </div>
            </div>
            
            <a class="hover" href="/dolgozo"        >Dolgozók</a>
            <a class="hover" href="/felhasznalo"    >Felhasználók</a>
            <a class="hover" href="/bolcsode"       >Bölcsöde</a>
            <a class="hover" href="/fenntarto"      >Fenntartó</a>
            <a class="hover" href="/mellekletek"    >Mellékletek</a>
            <a class="hover" href="/agaztatiPotlek" >Ágazati potlék</a>
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
<?php /**PATH C:\Users\Balogh.Biborka\Desktop\Tipegok\laraveles\resources\views/layouts/szerkezet.blade.php ENDPATH**/ ?>