
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
                        <label class="form-label" for="nev">Teljes név</label>
                        <input type="text" id="nev" class="form-control" name="nev" value="<?php echo e(old('nev')); ?>" />
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
                            placeholder="+36/30-111-2222" value="<?php echo e(old('telefonszam')); ?>">
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
                        <input type="text" id="szulNev" class="form-control" name="szul_nev"
                            value="<?php echo e(old('szul_nev')); ?>" />
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
                        <input type="text" id="form8Example2" class="form-control" name="anyja_neve"
                            value="<?php echo e(old('anyja_neve')); ?>" />
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
                        <input type="text" id="form8Example1" class="form-control" name="szul_hely"
                            value="<?php echo e(old('szul_hely')); ?>" />
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
                    <input type="date" class="form-control" id="szulIdo" name="szul_ido" value="<?php echo e(old('szul_ido')); ?>">
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
                        <input type="text" id="form8Example1" class="form-control" name="all_polgarsag"
                            value="<?php echo e(old('allPolgarsag')); ?>" />
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
                        <input class="form-check-input" type="radio" name="no" id="no" value="N"
                            value="<?php echo e(old('N')); ?>">
                        <label class="form-check-label" for="no">Nő</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ferfi" id="ferfi" value="F"
                            value="<?php echo e(old('F')); ?>">
                        <label class="form-check-label" for="ferfi">Férfi</label>
                    </div>
                    <br>
                </div>
            </div>
        </div>


        <div class="t2">
            <label class="form-label" for="allando_lakhely">Állandó lakhely</label>
            <div class="row">
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label>Város</label>
                        <input name="allando_lakhely" type="text" class="form-control" id="allandoLakhely"
                            placeholder="Város" value="<?php echo e(old('allando_lakhely')); ?>" />
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Utca</label>
                        <input name="allando_lakhely" type="text" class="form-control" id="allandoLakhely"
                            placeholder="Utca"  value="<?php echo e(old('allando_lakhely')); ?>"/>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Irányítószám</label>
                        <input name="allando_lakhely" type="text" class="form-control" id="allandoLakhely"
                            placeholder="Irányítószám"  value="<?php echo e(old('allando_lakhely')); ?>"/>
                    </div>
                </div>
            </div>
            <br>
            <?php $__errorArgs = ['allando_lakhely'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span style="color: red"><?php echo e($message); ?> </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <hr />
            <label class="form-label" for="form8Example1">Tartózkodási hely</label>
            <div class="row">
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label>Város</label>
                        <input name="tartozkodasi_hely" type="text" class="form-control" id="validationTooltip03"
                            placeholder="Város"  />
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Utca</label>
                        <input name="tartozkodasi_hely" type="text" class="form-control" id="validationTooltip04"
                            placeholder="Utca"  />
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Irányítószám</label>
                        <input name="tartozkodasi_hely" type="text" class="form-control" id="validationTooltip05"
                            placeholder="Irányítószám" />
                    </div>
                </div>
            </div>
            <br>
            <?php $__errorArgs = ['tartozkodasi_hely'];
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


        <div class="t3">
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="adoazon_jel">Adóazonósító</label>
                        <input type="text" id="form8Example3" class="form-control" name="adoazon_jel"
                            value="<?php echo e(old('adoazon_jel')); ?>" />
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
                        <input type="text" id="form8Example4" class="form-control" name="tajszam"
                            value="<?php echo e(old('tajszam')); ?>" />
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
                            value="<?php echo e(old('tizenhat_alatti_gyermek')); ?>" />
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
                            value="<?php echo e(old('banszamla_szam')); ?>" />

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
                        <input class="form-check-input" type="radio" name="igen" id="igen" value="i" value="<?php echo e(old('igen')); ?>">
                        <label class="form-check-label" for="igen">igen</label>

                        
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nem" id="nem" value="n" value="<?php echo e(old('nem')); ?>"> 
                        <label class="form-check-label" for="nem">nem</label>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div class="t4">
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">végzettség</label>
                        <input type="text" id="form8Example1" class="form-control" name="vegzettseg" value="<?php echo e(old('vegzettseg')); ?>"/>
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
                        <label class="form-label" for="form8Example1">Intézmény neve</label>
                        <input type="text" id="form8Example1" class="form-control" name="biz_intezmeny_nev" value="<?php echo e(old('biz_intezmeny_nev')); ?>"/>
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
                        <label class="form-label" for="form8Example1">Pontok száma</label>
                        <input type="text" id="form8Example1" class="form-control" name="pontokszama" value="<?php echo e(old('pontokszama')); ?>"/>
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
                        <label class="form-label" for="form8Example1">Bizonyitvány száma</label>
                        <input type="text" id="form8Example1" class="form-control" name="bizonyitvany_szam" value="<?php echo e(old('bizonyitvany_szam')); ?>"/>
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
                        <input type="date" class="form-control" id="kiadas_datuma" name="kiadas_datuma" value="<?php echo e(old('kiadas_datuma')); ?>">
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
                        <input type="file" class="custom-file-input" id="customFileOEP" name="oep_konyv_masolat[]"
                            multiple>
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
            <button type="submit" name="mentes" id="mentes" class="mentes">Mentés</button>
        </div>
        <div class="allapot">
            <input type="text" id="form8Example3" class="form-control" name="allapot" value="0" />
            <label class="form-label" for="form8Example3">Állapot</label>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UjdolgozoSzerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/ujdolgozo.blade.php ENDPATH**/ ?>