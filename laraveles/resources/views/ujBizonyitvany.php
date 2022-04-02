<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új bizonyítvány</title>
    <link rel="stylesheet" href="css/UjBiz.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <main class="container shadow p-4 mb-4 bg-white">
        <header class="text-center bg-secondary text-white">
            <h3>Új bizonyítvány</h3>
        </header>
<form action="/ujdolgozo" method="post" enctype="multipart/form-data">
    <!-- {{ csrf_field() }} -->
    <div>
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form8Example1" class="form-control" name="vegzettseg" />
                    <label class="form-label" for="form8Example1">végzettség</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form8Example1" class="form-control" name="biz_intezmeny_nev" />
                    <label class="form-label" for="form8Example1">Intézmény neve</label>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">

            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form8Example1" class="form-control" name="pontokszama" />
                    <label class="form-label" for="form8Example1">Pontok száma</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form8Example1" class="form-control" name="bizonyitvany_szam" />
                    <label class="form-label" for="form8Example1">Bizonyitvány száma</label>
                </div>
            </div>
        </div>
        <hr />
        <div class="row" id="datum">
            <div class="col-6">
                <div class="form-outline">
                    <input type="date" class="form-control" id="kiadas_datuma" name="kiadas_datuma">
                    <label for="kiadas_datuma">Kiadás dátuma</label>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="custom-file-label" for="customFileGyakIg">Gyakorlait igazolás</label>
                    <input type="file" class="custom-file-input" id="customFileGyakIg" name="gyakorlati_igazolas[]" multiple>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="custom-file-label" for="customFileOEP">OEP könyv másolat</label>
                    <input type="file" class="custom-file-input" id="customFileOEP" name="oep_konyv_masolat[]" multiple>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="custom-file-label" for="customFileDok">Dokumentum feltöltése</label>
                    <input type="file" class="custom-file-input" id="customFileDok" name="dokumentum_feltoltese[]" multiple>
                </div>
            </div>
        </div>
        <div id="mentesDiv">
            <button type="submit" name="mentes" id="mentes" class="mentes">Mentés</button>
        </div>
    </div>
    

</form>
</main>
</body>
</html>