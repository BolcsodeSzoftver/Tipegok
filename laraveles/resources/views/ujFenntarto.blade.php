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
        <form action="/ujFenntarto" method="post">
        @csrf
            <div class="row">
                <div class="col">
                    <div class="row">
                        <label class="col-sm-3" for="nev">Fenntartó neve:</label>
                        <input class="col-sm-6" type="text" id="nev" name="nev" value="{{ old('nev')}}">
                        @error('nev')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                    </div>
                   <div class="row"> 
                        <label class="col-sm-3" for="szekh">Székhely:</label>
                        <input class="col-sm-6" type="text" id="szekh" name="szekhely" value="{{ old('szekhely')}}">
                        @error('szekhely')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                   </div> 
                   <div class="row">
                        <label class="col-sm-3" for="megye">Megye:</label>
                        <input class="col-sm-6" type="text" id="megye" name="megye" value="{{ old('megye')}}">
                        @error('megye')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                   </div>
                   <div class="row">
                        <label class="col-sm-3" for="kepv">Képviselő:</label>
                        <input class="col-sm-6" type="text" id="kepv" name="kepviselo" value="{{ old('kepviselo')}}">
                        @error('kepviselo')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                   </div>
                   <div class="row">
                        <label class="col-sm-3" for="agazatia">Ágazati azon:</label>
                        <input class="col-sm-6" type="text" id="agazatia" name="agazati_azon" value="{{ old('agazati_azon')}}">
                        @error('agazati_azon')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                   </div>
                </div>
                <div class="col">
                    <div class="row">
                        <label class="col-sm-5" for="adoSzam">Adószám:</label>
                        <input class="col-sm-6" type="number" id="adoSzam" name="adoszam" value="{{ old('adoszam')}}">
                        @error('adoszam')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="cegsz">Cégjegyzékszám:</label>
                        <input class="col-sm-6" type="number" id="cegsz" name="cegjegyzekszam" value="{{ old('cegjegyzekszam')}}">
                        @error('cegjegyzekszam')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="stat">Statisztikaiszám:</label>
                        <input class="col-sm-6" type="number" id="stat" name="statisztikaiszam" value="{{ old('statisztikaiszam')}}">
                        @error('statisztikaiszam')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="kormanyHivatal">Illetékes kormány hivatal:</label>
                        <input class="col-sm-6" type="text" id="kormanyHivatal" name="illetekes_kormányh" value="{{ old('illetekes_kormányh')}}">
                        @error('illetekes_kormányh')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="bsz">Bölcsödék száma:</label>
                        <input class="col-sm-6" type="number" id="bsz" name="bolcsodek_szama" value="{{ old('bolcsodek_szama')}}">
                        @error('bolcsodek_szama')
                            <span style="color: red">{{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>

            <fieldset class="container text-center shadow p-4 mb-4 bg-white">
                <legend>Üzemorvos:</legend>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oNeve">Név:</label>
                    <input class="col-sm-4" type="text" id="oNeve" name="uzemorvos_nev" value="{{ old('uzemorvos_nev')}}">
                    @error('uzemorvos_nev')
                            <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oCim">Cím:</label>
                    <input class="col-sm-4" type="text" id="oCim" name="uzemorvos_cim" value="{{ old('uzemorvos_cim')}}">
                    @error('uzemorvos_cim')
                            <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oTel">Telefonszám:</label>
                    <input class="col-sm-4" type="number" id="oTel" name="uzemorvos_telefonszam" value="+36{{ old('uzemorvos_telefonszam')}}">
                    @error('uzemorvos_telefonszam')
                            <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </fieldset>
            <div id="ment">
            <input class="btn btn-dark" style="width:200px" type="submit" value="Mentés">
            </div>
        </form>
    </main>
</body>
</html>