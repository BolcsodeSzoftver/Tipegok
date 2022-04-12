<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mellekletek_css/melleklet2.css">
    <title>Melléklet 2</title>
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
                    <p >Neve: <input type="text" class="adat" id="nev"></p>
                    <p class="adat">Címe: <input type="text" class="adat" id="cim"></p>
                    <p class="adat">Születési helye, ideje: <input type="text" class="adat" id="szulHely"><input type="text" class="adat" id="szulIdo"></p>
                    <p class="adat">TAJ száma: <input type="text" class="adat" id="tajSz"></p>
                    <p class="adat">Munka/tevékenységi köre: <input type="text" class="adat" id="munkaKor"></p>
                </div>
                <div class="szoveg-2" style="margin-top: 10px;">
                    <p>Munkaköri, szakmai illetve személyi higiéniés alkalmasságot elbíráló orvos</p>
                    <p >Neve: <input type="text" class="adat" id="orvosNeve"></p>
                    <p class="adat">Címe: <input type="text" class="adat" id="orvosCime"></p>
                    <p class="adat">Telefonszáma: <input type="text" class="adat" id="orvosTel"></p>
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
    <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb" class="btn btn-dark"> 
    </main>
    </main>
</body>

</html><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/melleklet2.blade.php ENDPATH**/ ?>