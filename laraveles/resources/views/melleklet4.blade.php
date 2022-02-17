<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Melléklet 4</title>
    <link rel="stylesheet" href="css/mellekletek_css/melleklet4.css">
    <script src="js/melleklet.js"></script>
</head>
<body>
    <main>
        <div id="export">
        <header>
            <h2>4.MELLÉKLET</h1>
    </header>
        <article>
            <h3>NYILATKOZAT A HELYETTESÍTÉSRŐL</h2>
            <p>Alulírott: <span>....................................</span></p>
            <p>Anyja neve: <span>....................................</span></p>
            <p>Születési hely:<span>.........................</span> idő: <span>............................</span></p>
            <p>
                Nyilatkozom arról, hogy a <br><span> .................................... </span> minden bölcsödéjében vállalom a helyettesítést.
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