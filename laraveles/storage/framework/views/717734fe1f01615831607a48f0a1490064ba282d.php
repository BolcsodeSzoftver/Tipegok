<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melléklet 5</title>
    <link rel="stylesheet" href="css/mellekletek_css/melleklet5.css">
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
            <h2>5. Melléklet</h2><br>
            <h2 class="alcim">képzési nyilatkozat</h2>
        </header>
        <table>
            <tr>
                <td>Alulírott,</td>
            </tr>
            <tr>
                <td>Név:</td>
                <td class="teljesNev"><input type="text" class="adat" id="nev"></td>
            </tr>
            <tr>
                <td>Születési hely, idő:</td>
                <td id="szHely_szIdo"><input type="text" class="adat" id="szulHely"><input type="text" class="adat" id="szulIdo"></td>
            </tr>
            <tr>
                <td>Anyja neve:</td>
                <td id="aNev"><input type="text" class="adat" id="anyjaNeve"></td>
            </tr>
            <tr>
                <td>Cím:</td>
                <td id="allHely"><input type="text" class="adat" id="cim"></td>
            </tr>
        </table>
        <p>nyilatkozom, hogy a "bölcsődei szolátltatást nyújó személy" munkakör betöltéséhet szükséges 100 órás<br>
            képzést 6 hónapon belül elévgzem vagy beiratkozom kisgyermekgondozó-nevelő képzésre.</p>
        <br>
        <table>
            <tr>
                <td>Budapest,</td>
                <td id="belepesNap">...............................</td>
            </tr>
        </table>
        <br><br>
        <div class="alairas">
            <p><span>....................................................................</span><br></p>
        </div>

    </div>
    <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb" class="btn btn-dark"> 
    </main>
    </main>
</body>

</html><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/melleklet5.blade.php ENDPATH**/ ?>