<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fenntartó</title>
    <link rel="stylesheet" href="formazas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <main class="container shadow p-4 mb-4 bg-white">
        <header class="text-center bg-secondary text-white">
            <h3>Fenntartó</h3>
        </header>
        <form action="/api/fenntarto" method="post">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <label class="col-sm-3" for="nev">Fenntartó neve:</label>
                        <input class="col-sm-6" type="text" id="nev" name="nev">
                    </div>
                   <div class="row"> 
                        <label class="col-sm-3" for="szekh">Székhely:</label>
                        <input class="col-sm-6" type="text" id="szekh" name="szekhely">
                   </div> 
                   <div class="row">
                        <label class="col-sm-3" for="megye">Megye:</label>
                        <input class="col-sm-6" type="text" id="megye" name="megye">
                   </div>
                   <div class="row">
                        <label class="col-sm-3" for="kepv">Képviselő:</label>
                        <input class="col-sm-6" type="text" id="kepv" name="kepviselo">
                   </div>
                   <div class="row">
                        <label class="col-sm-3" for="agazatia">Ágazati azon:</label>
                        <input class="col-sm-6" type="text" id="agazatia" name="agazati_azon">
                   </div>
                </div>
                <div class="col">
                    <div class="row">
                        <label class="col-sm-5" for="adoSzam">Adószám:</label>
                        <input class="col-sm-6" type="number" id="adoSzam" name="adoszam">
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="cegsz">Cégjegyzékszám:</label>
                        <input class="col-sm-6" type="number" id="cegsz" name="cegjegyzekszam">
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="stat">Statisztikaiszám:</label>
                        <input class="col-sm-6" type="number" id="stat" name="statisztikaiszam">
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="kormanyHivatal">Illetékes kormány hivatal:</label>
                        <input class="col-sm-6" type="text" id="kormanyHivatal" name="illetekes_kormányh">
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="bsz">Bölcsödék száma:</label>
                        <input class="col-sm-6" type="number" id="bsz" name="bolcsodek_szama">
                    </div>
                </div>
            </div>

            <fieldset class="container text-center shadow p-4 mb-4 bg-white">
                <legend>Üzemorvos:</legend>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oNeve">Név:</label>
                    <input class="col-sm-4" type="text" id="oNeve" name="uzemorvos_nev">
                </div>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oCim">Cím:</label>
                    <input class="col-sm-4" type="text" id="oCim" name="uzemorvos_cim">
                </div>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oTel">Telefonszám:</label>
                    <input class="col-sm-4" type="number" id="oTel" name="uzemorvos_telefonszam">
                </div>
            </fieldset>
            <div id="ment">
            <input class="btn btn-dark" style="width:200px" type="submit" value="Mentés">
            </div>
        </form>
    </main>
</body>
</html>