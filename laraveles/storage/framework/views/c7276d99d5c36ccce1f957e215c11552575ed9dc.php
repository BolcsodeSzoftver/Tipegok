
<?php $__env->startSection('UjdolgozoTartalom'); ?>
<div class="row">
    <div class="col">
        <div class="form-outline">
            <input type="nev" id="form8Example1" class="form-control" />
            <label class="form-label" for="form8Example1">Végzettség megnevezése</label>
        </div>
    </div>
    <div class="col">
        <div class="form-outline">
            <input type="nev" id="form8Example1" class="form-control" />
            <label class="form-label" for="form8Example1">Intizmény neve</label>
        </div>
    </div>
    <div class="col">
        <input id="datepicker" width="276" />
        <script>
            $("#datepicker").datepicker({
                uiLibrary: "bootstrap4",
            });
        </script>
        <label class="form-label" for="form8Example1">Kiadás dátuma</label>
    </div>
</div>
<hr />
<div class="row">
    <div class="col">
        <div class="form-outline">
            <input type="nev" id="form8Example1" class="form-control" />
            <label class="form-label" for="form8Example1">Pontok száma</label>
        </div>
    </div>
    <div class="col">
        <div class="form-outline">
            <input type="nev" id="form8Example1" class="form-control" />
            <label class="form-label" for="form8Example1">Bizonyitvány szám</label>
        </div>
    </div>
</div>
<hr />
<div class="row">
    <div class="col">
        <div class="form-outline">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" />
                <label class="custom-file-label" for="customFile">Fájl feltöltése</label>
            </div>
            <label class="form-label" for="form8Example1">Gyakorlati igazolás</label>
        </div>
    </div>
    <div class="col">
        <div class="form-outline">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" />
                <label class="custom-file-label" for="customFile">Fájl feltöltése</label>
            </div>
            <label class="form-label" for="form8Example1">OEP könyv</label>
        </div>
    </div>
    <div class="col">
        <div class="form-outline">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" />
                <label class="custom-file-label" for="customFile">Fájl feltöltése</label>
            </div>
            <label class="form-label" for="form8Example1">Gyakorlati igazolás</label>
        </div>
    </div>
</div>
<button class="btn btn-primary" id="gomb" type="submit">
    Új bizonyítvány felvétele
</button>
<button class="btn btn-primary" id="gomb2" type="submit" >
    Adatok feltöltése
  </button>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.UjdolgozoSzerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/ujdolgozo4.blade.php ENDPATH**/ ?>