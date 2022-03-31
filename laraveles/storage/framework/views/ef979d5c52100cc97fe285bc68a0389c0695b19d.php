
<?php $__env->startSection('UjdolgozoTartalom'); ?>
    <form action="/ujdolgozo" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="t1">
            <div class="row">
                <div class="col-6" id="munkalatoNeve">
                    <h6>Munkáltató neve</h6>
                    <select class="custom-select" name="bolcsodeID" id="bolcsode">
                        <?php $__currentLoopData = $bolcsiID; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bolcsode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option id="bolcsode" value="<?php echo e($bolcsode->id); ?>"><?php echo e($bolcsode->nev); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="row" class="userId">
                <div class="col-6" id="munkalatoNeve">
                    <input type="text" id="form8Example1" class="form-control userId" name="userID"
                        value=<?php echo e(Auth::user()->id); ?> />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">Teljes név</label>
                        <input type="text" id="form8Example1" class="form-control" name="nev" />

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label for="telefonszam">Telefonszám:</label>
                        <input type="text" class="form-control" id="telefonszam" name="telefonszam"
                            placeholder="+36301234567" required="required">
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example2">Születési név</label>
                        <input type="text" id="form8Example2" class="form-control" name="szulNev" />

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example2">Anyja neve</label>
                        <input type="text" id="form8Example2" class="form-control" name="anyjaNeve" />
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">Születési hely</label>
                        <input type="text" id="form8Example1" class="form-control" name="szulHely" />

                    </div>
                </div>
                <div class="col">
                    <label class="form-label" for="form8Example1">Születési idő</label>
                    <input type="date" class="form-control" id="szulIdo" name="szulIdo">
                </div>
                <div class="col-4">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">Állam polgárság</label>
                        <input type="text" id="form8Example1" class="form-control" name="allPolgarsag" />
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4">
                    <p>Nem</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="no" id="no" value="N">
                        <label class="form-check-label" for="no">Nő</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ferfi" id="ferfi" value="F">
                        <label class="form-check-label" for="ferfi">Férfi</label>
                    </div>
                </div>
            </div>
        </div>


        <div class="t2">
            <label class="form-label" for="form8Example1">Állandó lakhely</label>
            <div class="row">
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label>Város</label>
                        <input name="allandoLakhely" type="text" class="form-control" id="validationTooltip03"
                            placeholder="Város" required />
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Utca</label>
                        <input name="allandoLakhely" type="text" class="form-control" id="validationTooltip04"
                            placeholder="Utca" required />
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Irányítószám</label>
                        <input name="allandoLakhely" type="text" class="form-control" id="validationTooltip05"
                            placeholder="Irányítószám" required />
                    </div>
                </div>
            </div>
            <hr />
            <label class="form-label" for="form8Example1">Tartózkodási hely</label>
            <div class="row">
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label>Város</label>
                        <input name="tartozkodasiHely" type="text" class="form-control" id="validationTooltip03"
                            placeholder="Város" required />
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Utca</label>
                        <input name="tartozkodasiHely" type="text" class="form-control" id="validationTooltip04"
                            placeholder="Utca" required />
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Irányítószám</label>
                        <input name="tartozkodasiHely" type="text" class="form-control" id="validationTooltip05"
                            placeholder="Irányítószám" required />
                    </div>
                </div>
            </div>
        </div>


        <div class="t3">
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form8Example3" class="form-control" name="adoazonJel" />
                        <label class="form-label" for="form8Example3">Adóazonósító</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form8Example4" class="form-control" name="tajszam" />
                        <label class="form-label" for="form8Example4">Tajszám</label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <input type="nev" id="form8Example1" class="form-control" name="tizenhatAlattiGyermek" />
                        <label class="form-label" for="form8Example1">16 éven aluli gyermekek száma</label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form8Example3" class="form-control" name="bakszamlaSzam" />
                        <label class="form-label" for="form8Example3">Bankszámla szám</label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4">
                    <p>Házas</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="igen" id="igen" value="i">
                        <label class="form-check-label" for="igen">igen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nem" id="nem" value="n">
                        <label class="form-check-label" for="nem">nem</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="t4">
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
            <div class="row">
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
            <button type="submit" name="mentes" id="mentes" class="mentes">Mentés</button>
        </div>
        <div class="allapot">
            <input type="text" id="form8Example3" class="form-control" name="allapot" value="0" />
            <label class="form-label" for="form8Example3">Állapot</label>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UjdolgozoSzerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/ujdolgozo.blade.php ENDPATH**/ ?>