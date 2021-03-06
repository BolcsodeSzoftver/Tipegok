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

<body id="body-pd">
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-sm-12 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <?php if(Auth::user()->id): ?>
                        <a class="navbar-brand" href="#"><?php echo e(Auth::user()->name); ?></a>
                    <?php endif; ?>
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
                                    <a class="dropdown-item" href="#">Be??ll??t??sok</a>
                                    <a class="dropdown-item" href="#">...</a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Kijelentkez??s</a>
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
                    <ul class="menu__list" id="navMenu">
                        <li class="menu__item"><a href="/dolgozo" class="menu__link">Dolgoz??k</a></li>
                        <li class="menu__item"><a href="/felhasznalo" class="menu__link">Felhaszn??l??k</a></li>
                        <li class="menu__item"><a href="<?php echo e(route('kezdolap')); ?>" class="menu__link">B??lcs??de</a></li>
                        <li class="menu__item"><a href="/fenntarto" class="menu__link">Fenntart??</a></li>
                        <li class="menu__item"><a href="/mellekletek" class="menu__link">Mell??kletek</a></li>
                    </ul>
                </nav>

            </div>
            <div class="col-sm-9">
                <article>
                    <?php echo $__env->yieldContent('tartalom'); ?>
                </article>

            </div>
        </div>
    </div> 






</body>

</html>
<?php /**PATH C:\xampp\htdocs\tipegok\Tipegok\laraveles\resources\views/layouts/szerkezet.blade.php ENDPATH**/ ?>