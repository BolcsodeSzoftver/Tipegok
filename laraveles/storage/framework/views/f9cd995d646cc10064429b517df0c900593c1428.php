
<?php $__env->startSection('UjdolgozoTartalom'); ?>
    <form action="/api/ujDolgozo" method="post">
        <?php echo csrf_field(); ?>
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
            <div class="row">
                <div class="col-6" id="munkalatoNeve">
                    <label class="form-label" for="form8Example1">User ID</label>
                    <input type="text" id="form8Example1" class="form-control" name="userID" />
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
                        <input type="tel" pattern="([\+](36)(20|30|70)\d{7})|((06)\d{9})" class="form-control"
                            id="telefonszam" name="telefonszam" placeholder="+36301234567" required="required">
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
                    <label>Nem</label>
                    <select class="custom-select" name="nem">
                        <option value="N">Nő</option>
                        <option value="F">Férfi</option>
                    </select>
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
                    <label>Házas</label>
                    <select class="custom-select">
                        <option>Igen</option>
                        <option>Nem</option>
                    </select>
                </div>
            </div>
            <button type="submit">Mentés</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UjdolgozoSzerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/ujDolgozo.blade.php ENDPATH**/ ?>