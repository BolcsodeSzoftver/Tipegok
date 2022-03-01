<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Melléklet 1</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/mellekletek_css/melleklet1.css">
    <script src="js/ajax.js"></script>
    <script src="js/mellekletAdatok.js"></script>
    <script src="js/melleklet.js"></script>
    <script src="js/mellekletAdatok.js"></script>
</head>

<body>
    <main>
        <label class="alkalmazottNevek">Válasz dolgozót: </label>
        <select class="alkalmazottNevek">
            @foreach ($alkalmazotts as $alkalmazott)
                <option class='nevekLista' value={{ $alkalmazott->id }}>{{ $alkalmazott->nev }}</option>
            @endforeach
        </select>
        <div id="export">
        <header>
            <h2>1. Melléklet</h2><br>
            <h2 class="alcim">gyvt nyilatkozat</h2>
        </header>
        
        <table>
            <tr>
                <td>Alulírott:</td>
                <td><input type="text" class="adat" id="nev"></td>
            </tr>
            <tr>
                <td>született:</td>
                <td><input type="text" class="adat" id="szulHely"></td>
            </tr>
            <tr>
                <td>születési idő:</td>
                <td><input type="text" class="adat" id="szulIdo"></td>
            </tr>
            <tr>
                <td>anyja neve:</td>
                <td><input type="text" class="adat" id="anyjaNeve"></td>
            </tr>
<<<<<<< HEAD
            </table>
            <span>.....................................................................................................................................................</span><br>
            <p>szám alatti lakos ezúton jelentem, ki hogy a Gyvt.10/A. §(1)-ben rögzített kizáró okok velem szemben
                nem<br>
                állnak fenn.</p>
            <br>
            <table>
                <tr>
                    <td>Dátum:</td>
                    <td id="belepesNap">...............................</td>
                </tr>
            </table>
            <br><br>
            <div class="alairas">
                <p><span>....................................................................</span><br>aláírás</p>
=======
            
        </table>
        <span>.....................................................................................................................................................</span><br>
        <p>szám alatti lakos ezúton jelentem, ki hogy a Gyvt.10/A. §(1)-ben rögzített kizáró okok velem szemben
            nem<br>
            állnak fenn.</p>
        <br>
        <table>
            <tr>
                <td>Dátum:</td>
                <td id="belepesNap">...............................</td>
            </tr>
        </table>
        <br><br>
        <div class="alairas">
            <p><span>....................................................................</span><br>aláírás</p>
>>>>>>> 320698ebcb274d8008ca72f1bcd1dce40c40a7f3

            </div>

        </div>
        <input type="submit" value="word exportálása" id="gomb" onclick="Export2Word('export', 'melléklet_1');">
        <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb">
    </main>
</body>

</html>
