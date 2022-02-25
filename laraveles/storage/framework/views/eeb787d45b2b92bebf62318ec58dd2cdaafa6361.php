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




    <?php echo $__env->yieldContent('head'); ?>

</head>

<body>
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-sm-12 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Admin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            profilom
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Beállítások</a>
                            <a class="dropdown-item" href="#">...</a>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Kijelentkezés</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row pr-10">

            <div class="col-sm-2" id="menu">

                <section>

                    <ul class="nav flex-column bg-white mb-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/felhasznalo">Felhasználók</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dolgozo">Dolgozók</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fejlesztesAlatt">Gyerekek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/fejlesztesAlatt">Beosztás</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/fejlesztesAlatt">Jelenlét</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/">Bölcsőde</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/fenntarto">Fenntartó</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/mellekletek">Mellékletek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/fejlesztesAlatt">Statisztikák</a>
                        </li>
                    </ul>

                </section>
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
<?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/layouts/szerkezet.blade.php ENDPATH**/ ?>