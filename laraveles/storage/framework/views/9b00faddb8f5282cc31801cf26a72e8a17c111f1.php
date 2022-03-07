<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/Ujdolgoz.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <main>
        <article>
            <h1>Dolgozó adatai</h1>
            <form action="/api/dolgozo" method="post">
            <?php echo $__env->yieldContent('UjdolgozoTartalom'); ?>
            </form>
        </article> 
      <div class="container">
        <ul class="nav justify-content-center">
          <li class="page-item"><a class="page-link" href="#"><<</a></li>
          <li class="page-item">
            <a class="page-link" href="/ujDolgozo">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="/ujDolgozo2">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="/ujDolgozo3">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="/ujDolgozo4">4</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">>></a></li>
        </ul>
      </div>
    </main>
  </body>
</html><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/layouts/UjdolgozoSzerkezet.blade.php ENDPATH**/ ?>