
<?php $__env->startSection('UjdolgozoTartalom'); ?>
    <form action="/api/ujDolgozo2" method="post">
        <?php echo csrf_field(); ?>
        <div class="container">

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
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UjdolgozoSzerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/ujdolgozo2.blade.php ENDPATH**/ ?>