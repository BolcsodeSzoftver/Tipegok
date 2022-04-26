<!DOCTYPE html>
<html lang="hu">

<head>
    <style>
        #mentes {
            width: 200px;
            margin: 0 auto;
            display: block;
        }

    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Új dolgozó</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/Ujdolgoz.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="../js/ujdolgozo.js"></script>
</head>

<body>
    <main>
        <article>
            <div class="menu">
                <ul class="nav nav-tabs">
                    <li class="nav-item" id="nincsGomb">
                        <a class="nav-link active" aria-current="page" id="adatokT1">1</a>
                    </li>
                    <li class="nav-item" id="nincsGomb2">
                        <a class="nav-link" id="adatokT2">2</a>
                    </li>
                    <li class="nav-item" id="nincsGomb3">
                        <a class="nav-link " id="adatokT3">3</a>
                    </li>
                    <li class="nav-item" id="megjelenikGomb">
                        <a class="nav-link " id="adatokT4">4</a>
                    </li>
                </ul>
            </div>
            <h1>Dolgozó adatai</h1>

            @yield('UjdolgozoTartalom')

        </article>
    </main>
</body>

</html>
