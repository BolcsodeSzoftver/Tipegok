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
        <label class="alkalmazottNevek">Válasz dolgozót: </label>
        <select class="alkalmazottNevek">
            @foreach ($alkalmazotts as $alkalmazott)
                <option class='nevekLista' value={{ $alkalmazott->id }}>{{ $alkalmazott->nev }}</option>
            @endforeach
        </select>
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
    <input type="submit" value="word exportálása" id="gomb" onclick="Export2Word('export', 'melléklet_4');">
    <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb"> 
    </main>
    </main>
</body>
</html>