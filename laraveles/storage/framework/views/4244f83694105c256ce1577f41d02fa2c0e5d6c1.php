
<?php $__env->startSection('UjdolgozoTartalom'); ?>
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form8Example3" class="form-control" />
                <label class="form-label" for="form8Example3">Adóazonósító</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form8Example4" class="form-control" />
                <label class="form-label" for="form8Example4">Tajszám</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="nev" id="form8Example1" class="form-control" />
                <label class="form-label" for="form8Example1">16 éven aluli gyermekek száma</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form8Example3" class="form-control" />
                <label class="form-label" for="form8Example3">Bankszámla szám</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <div>
                <label class="form-label" for="form8Example1">Házas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Igen</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Nem</label>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UjdolgozoSzerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/ujdolgozo3.blade.php ENDPATH**/ ?>