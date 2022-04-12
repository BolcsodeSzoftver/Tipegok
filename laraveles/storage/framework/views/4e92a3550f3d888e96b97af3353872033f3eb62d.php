<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Melléklet 4</title>
    <link rel="stylesheet" href="css/mellekletek_css/melleklet4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/mellekletAdatok.js"></script>
    <script src="js/melleklet.js"></script>
</head>
<body>
    <main>
        <?php echo $__env->make('layouts.dolgozoKivalasztas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="export">
        <header>
            <h2>4.MELLÉKLET</h1>
        </header>
        <article>
            <h3>NYILATKOZAT A HELYETTESÍTÉSRŐL</h2>
            <p>Alulírott: <input type="text" class="adat" id="nev"></p>
            <p>Anyja neve: <input type="text" class="adat" id="anyjaNeve"></p>
            <p>Születési hely:<input type="text" class="adat" id="szulHely"> idő: <input type="text" class="adat" id="szulIdo"></p>
            <p>
                Nyilatkozom arról, hogy a <input type="text" class="adat" id="fenntartoNev" style="text-align:center;"> minden bölcsödéjében vállalom a helyettesítést.
            </p>
            <p class="datum">Budapest, <span>....................</span></p>
            <p><span>....................................</span></p>
            <p>Helyettes</p>
        </article>

    </div>
    <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb" class="btn btn-dark"> 
    </main>
    </main>
</body>
</html><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/melleklet4.blade.php ENDPATH**/ ?>