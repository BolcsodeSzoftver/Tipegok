<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mellekletek_css/melleklet3.css">
    <title>Melléklet 3</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/mellekletAdatok.js"></script>
    <script src="js/melleklet.js"></script>
</head>
<body>
    <main>
        @include('layouts.dolgozoKivalasztas')
        <div id="export">
        <header>
        <h2>3. melléklet</h2>
        <h2>Házi orvosi igazolás</h2>
        </header>
        <article>
            <p class="szoveg">Alulírott <input type="text" class="adat" id="orvosNeve"> háziorvos igazolom, hogy  <input type="text" class="adat" id="nev">nem<br>szenved fertőző betegségben, egészségi állapota nem veszélyezteti az ellátandó gyermeket. Családi <br>bölcsödében dolgozhat.</p>

        </article>
        <article class="datum">
            <p><span>..................................,</span> 20 <span>......................</span></p>
        </article>
        <article class="haziorvos">
            <p><span>..........................................................................</span><br>háziorvos</p>
        </article>

    </div>
    <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb" class="btn btn-dark"> 
    </main>
    </main>
</body>
</html>