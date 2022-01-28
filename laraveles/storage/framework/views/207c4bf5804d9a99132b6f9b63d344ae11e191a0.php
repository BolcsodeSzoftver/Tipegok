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
   

    <?php echo $__env->yieldContent('head'); ?>
    
</head>

<body>
    <nav class="container nav justify-content-end bg-info">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown">
                BölcsődeAdmin
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Beállítások</a>
                <a class="dropdown-item" href="#">...</a>
                <a class="dropdown-item" href="#">Kijelentkezés</a>
            </div>
        </li>
    </nav>
    <main class="container-xl mt-3 border">
        <div class="row">
            <nav class="navba col-sm-3 bg-info">
                <ul class="navbar-nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="/felhasznalo">Felhasználók</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="/dolgozo">Dolgozók</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="#">Gyerekek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="#">Beosztás</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="#">Jelenlét</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="/">Bölcsőde</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="/fenntarto">Fenntartó</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="/mellekletek">Mellékletek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="#">Statisztikák</a>
                    </li>
                </ul>
            </nav>
            <article class="col-sm-9">
                <?php echo $__env->yieldContent('tartalom'); ?>
            </article>
        </div>
    </main>
</body>

</html><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/layouts/szerkezet.blade.php ENDPATH**/ ?>