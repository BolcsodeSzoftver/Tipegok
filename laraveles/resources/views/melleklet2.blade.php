<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mellekletek_css/melleklet2.css">
    <script src="js/melleklet.js"></script>
    <title>Melléklet 2</title>
</head>

<body>
    <main>
        <div id="export">
        <header>
            <h2>2. melléklet</h2>
            <h2>2. számú melléklet a 33/1998. (VI.24.) NM rendelethez</h2>
            <h2>Egészségügyi nyilatkozat</h2>
            <h2>(Járványügyi érdekből kiemelt munkakörben dolgozók, tanulók számára)</h2>
        </header>
        <div class="foresz">
            <article>
                <div class="szamozas">
                    <div class="egy">
                        <p>I.</p>
                    </div>
                    <div class="ketto">
                        <p>II.</p>
                    </div>
                    <div class="harom"></div>
                    <p>III.</p>
                </div>
            </article>
            <article>
                <div class="szoveg-1">
                    <p>Munkavállaló. tanuló, álláskereső vagy munkát végző személy (továbbiakban együtt: vizsgált</p>
                    <p>személy)</p>
                    </p>
                    <p>Neve: <span>.......................................................................................................................................</span></p>
                    <p>Címe: <span>.......................................................................................................................................</span></p>
                    <p>Születési helye, ideje: <span>..............................................................................................................</span></p>
                    <p>TAJ száma: <span>..............................................................................................................................</span></p>
                    <p>Munka/tevékenységi köre: <span>......................................................................................................</span></p>
                </div>
                <div class="szoveg-2">
                    <p>Munkaköri, szakmai illetve személyi higiéniés alkalmasságot elbíráló orvos</p>
                    <p>Neve: <span>.......................................................................................................................................</span></p>
                    <p>Címe: <span>.......................................................................................................................................</span></p>
                    <p>Telefonszáma: <span>..........................................................................................................................</span></p>
                </div>
                <div class="szoveg-3">
                    <p>A vizsgált személy nyilatkozata</p>
                    <p>Alulírott kötelezem magam arra hogy,</p>
                    <p>1. az alkalmassági vizsgálatot végző orvosnál soronkívüli alkalmassági vizsgálaton jelentkezem,
                        ha</p>
                    <p>magamon, vagy velem közös háztartásban élő személyen az alábbi tünetek bármelyikét észlelem:</p>
                    <p>sárgaság,</p>
                    <p>hasmenés,</p>
                    <p>hányás,</p>
                    <p>láz,</p>
                    <p>torokgyulladás,</p>
                    <p>bőrkiütés,</p>
                    <p>egyéb bőrelváltozás ( a legkisebb bőrgennyesedés, sérülés stb. is)</p>
                    <p>váladékozó szembetegség, fül- és orrfolyás</p>
                    <p>2. az alkalmassági vizsgálaton végző orvossal a munka felvétele előtt közlöm, ha időszakos</p>
                    <p>távollétem alatt (pl. szabadság) az 1. pontban felsorolt tünetek bármelyikét magamon észleltem</p>
                </div>
            </article>
        </div>
        <div class="masodresz">
            <p>Tudomásul veszem, hogy a fenti kötelezettségvállalás járványügyi érdekből kiemelt munkakörben történő</p>
            <p>foglalkoztatásom, ilyen munkaterületen tevékenységem folytatásának feltétele, és hogy az általam közölt</p>
            <p>adatokat szolgálati titokként kezelik.</p>
        </div>
        <p class="kelt">Kelt: ...........................................................................</p>
        <article class="alairas">
            <p><span>..........................................................................</span><br><span>aláírás</span></p>
        </article>

    </div>
    <input type="submit" value="word exportálása" id="gomb" onclick="Export2Word('export', 'melléklet_2');">
    <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb"> 
    </main>
    </main>
</body>

</html>