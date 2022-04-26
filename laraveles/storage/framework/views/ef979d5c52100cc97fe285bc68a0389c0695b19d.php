

<?php $__env->startSection('t1'); ?>
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
                    <label class="form-label" for="nev">Teljes név</label>
                    <input type="text" id="nev" class="form-control" name="nev" value="<?php echo e(old('nev')); ?> Balogh Bíborka"
                        placeholder="Nagy Ede" />
                    <?php $__errorArgs = ['nev'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label for="telefonszam">Telefonszám:</label>
                    <input type="text" class="form-control" id="telefonszam" name="telefonszam"
                        placeholder="+36/30-111-2222" value="<?php echo e(old('telefonszam')); ?> +36/30-555-3333">
                    <?php $__errorArgs = ['telefonszam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="szul_nev">Születési név</label>
                    <input type="text" id="szulNev" class="form-control" name="szul_nev" placeholder="Nagy Ede"
                        value="<?php echo e(old('szul_nev')); ?> Balogh Bíborka" />
                    <?php $__errorArgs = ['szul_nev'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="anyja_neve">Anyja neve</label>
                    <input type="text" id="form8Example2" class="form-control" name="anyja_neve" placeholder="Kiss Anna"
                        value="<?php echo e(old('anyja_neve')); ?> Kiss Anna" />
                    <?php $__errorArgs = ['anyja_neve'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-4">
                <div class="form-outline">
                    <label class="form-label" for="szul_hely">Születési hely</label>
                    <input type="text" id="form8Example1" class="form-control" name="szul_hely" placeholder="Budapest"
                        value="<?php echo e(old('szul_hely')); ?> Budapest" />
                    <?php $__errorArgs = ['szul_hely'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
            </div>
            <div class="col">
                <label class="form-label" for="szul_ido">Születési idő</label>
                <input type="date" id="szulIdo" class="form-control" name="szul_ido" value="1980-07-22">
                <?php $__errorArgs = ['szul_ido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span style="color: red"><?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-4">
                <div class="form-outline">
                    <label class="form-label" for="all_polgarsag">Állam polgárság</label>
                    <input type="text" id="form8Example1" class="form-control" name="all_polgarsag" placeholder="Magyar"
                        value="<?php echo e(old('allPolgarsag')); ?> Magyar" />
                    <?php $__errorArgs = ['all_polgarsag'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-4">
                <p>Nem</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="no" id="no" value="Nő" value="Nő" checked>
                    <label class="form-check-label" for="no">Nő</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ferfi" id="ferfi" value="Férfi">
                    <label class="form-check-label" for="ferfi">Férfi</label>
                </div>
                <br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('t2'); ?>
    <div class="t2">
        <label class="form-label" for="form8Example1">Állandó lakhely</label>
        <div class="row">
            <div class="form-row">
                <div class="col-md-5 mb-3">
                    <label>Város</label>
                    <input name="varos" type="text" class="form-control" id="validationTooltip03" placeholder="Város"
                        value="<?php echo e(old('varos')); ?> Budapest" />
                    <?php $__errorArgs = ['varos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-2 mb-3">
                    <label>Utca</label>
                    <input name="utca" type="text" class="form-control" id="validationTooltip04" placeholder="Utca 11"
                        value="<?php echo e(old('utca')); ?> Utca 11" />
                    <?php $__errorArgs = ['utca'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Irányítószám</label>
                    <input name="iranyitoSzam" type="text" class="form-control" id="validationTooltip05"
                        placeholder="2222" value="<?php echo e(old('iranyitoSzam')); ?> 2222" />
                    <?php $__errorArgs = ['iranyitoSzam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <hr />
        <label class="form-label" for="form8Example1">Tartózkodási hely</label>
        <div class="row">
            <div class="form-row">
                <div class="col-md-5 mb-3">
                    <label>Város</label>
                    <input name="varosTart" type="text" class="form-control" id="validationTooltip03" placeholder="Város"
                        value="<?php echo e(old('varosTart')); ?> Budapest" />
                    <?php $__errorArgs = ['varosTart'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-2 mb-3">
                    <label>Utca</label>
                    <input name="utcaTart" type="text" class="form-control" id="validationTooltip04" placeholder="Utca 11"
                        value="<?php echo e(old('utcaTart')); ?> Utca 11" />
                    <?php $__errorArgs = ['utcaTart'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Irányítószám</label>
                    <input name="iranyitoSzamTart" type="text" class="form-control" id="validationTooltip05"
                        placeholder="2222" value="<?php echo e(old('iranyitoSzamTart')); ?> 2222" />
                    <?php $__errorArgs = ['iranyitoSzamTart'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('t3'); ?>
    <div class="t3">
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="adoazon_jel">Adóazonósító</label>
                    <input type="text" id="form8Example3" class="form-control" name="adoazon_jel" placeholder="1234567891"
                        value="<?php echo e(old('adoazon_jel')); ?> 1234567891" />
                    <br>
                    <?php $__errorArgs = ['adoazon_jel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form8Example4">Tajszám</label>
                    <input type="text" id="form8Example4" class="form-control" name="tajszam" placeholder="123456789"
                        value="<?php echo e(old('tajszam')); ?> 123456789" />
                    <br>
                    <?php $__errorArgs = ['tajszam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="tizenhat_alatti_gyermek">16 éven aluli gyermekek száma</label>
                    <input type="nev" id="form8Example1" class="form-control" name="tizenhat_alatti_gyermek"
                        placeholder="2" value="<?php echo e(old('tizenhat_alatti_gyermek')); ?> 0" />
                    <br>
                    <?php $__errorArgs = ['tizenhat_alatti_gyermek'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="banszamla_szam">Bankszámla szám</label>
                    <input type="text" id="form8Example3" class="form-control" name="banszamla_szam"
                        placeholder="10404072-50526871-56691003"
                        value="<?php echo e(old('banszamla_szam')); ?> 10404072-50526871-56691003" />

                    <br>
                    <?php $__errorArgs = ['banszamla_szam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-4">
                <p>Házas</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="igen" id="igen" value="igen">
                    <label class="form-check-label" for="igen">igen</label>


                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nem" id="nem" value="nem" checked>
                    <label class="form-check-label" for="nem">nem</label>
                </div>
                <br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('t4'); ?>
    <div class="t4">
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="vegzettseg">végzettség</label>
                    <input type="text" id="vegzettseg" class="form-control" name="vegzettseg" placeholder="végzettség"
                        value="<?php echo e(old('vegzettseg')); ?> Rendszergazda" />
                    <?php $__errorArgs = ['vegzettseg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="biz_intezmeny_nev">Intézmény neve</label>
                    <input type="text" id="biz_intezmeny_nev" class="form-control" name="biz_intezmeny_nev"
                        placeholder="intézmény neve" value="<?php echo e(old('biz_intezmeny_nev')); ?> Iskola" />
                    <?php $__errorArgs = ['biz_intezmeny_nev'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
            </div>
        </div>
        <hr />
        <div class="row">

            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="pontokszama">Pontok száma</label>
                    <input type="text" id="pontokszama" class="form-control" name="pontokszama" placeholder="100"
                        value="<?php echo e(old('pontokszama')); ?> 200" />
                    <?php $__errorArgs = ['pontokszama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="bizonyitvany_szam">Bizonyitvány száma</label>
                    <input type="text" id="bizonyitvany_szam" class="form-control" name="bizonyitvany_szam"
                        placeholder="1234567" value="<?php echo e(old('bizonyitvany_szam')); ?> 1234567" />
                    <?php $__errorArgs = ['bizonyitvany_szam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-6">
                <div class="form-outline">
                    <label for="kiadas_datuma">Kiadás dátuma</label>
                    <input type="date" id="start" class="form-control" name="kiadas_datuma" value="2020-06-25">
                    <?php $__errorArgs = ['kiadas_datuma'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="custom-file-label" for="customFileGyakIg">Gyakorlait igazolás</label>
                    <input type="file" class="custom-file-input" id="customFileGyakIg" name="gyakorlati_igazolas[]"
                        multiple>
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
                    <input type="file" class="custom-file-input" id="customFileDok" name="dokumentum_feltoltese[]"
                        multiple>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mentes " name="mentes" id="mentes">Mentés</button>
    </div>
    <div class="allapot">
        <input type="text" id="allapot" class="form-control" name="allapot" value="0" />
        <label class="form-label" for="allapot">Állapot</label>
    </div>
<?php $__env->stopSection(); ?>





<?php $__env->startSection('UjdolgozoTartalom'); ?>
    <form action="/ujdolgozo" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


        <?php echo $__env->yieldContent("t1"); ?>
        <?php echo $__env->yieldContent("t2"); ?>
        <?php echo $__env->yieldContent("t3"); ?>
        <?php echo $__env->yieldContent("t4"); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UjdolgozoSzerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/ujdolgozo.blade.php ENDPATH**/ ?>