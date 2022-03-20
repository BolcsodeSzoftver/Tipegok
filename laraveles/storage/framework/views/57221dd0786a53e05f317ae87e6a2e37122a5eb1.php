
<?php $__env->startSection('head'); ?>
    <!-- <style>
        #mentes,
        .ment {
            width: 200px;
            margin: auto;
        }

    </style>
    <script src="js/felhasznalo.js"></script> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-active">
                <!-- <th></th>
                <th></th> -->
                <th scope="col">Életkor</th>
                <th scope="col">A</th>
                <th scope="col">B</th>
                <th scope="col">C</th>
                <th scope="col">D</th>
                <th scope="col">E</th>
                <th scope="col">F</th>
                <th scope="col">G</th>
                <th scope="col">H</th>
                <th scope="col">I</th>
                <th scope="col">J</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $agazatiPotlek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agazatiP): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($agazatiP->eletkor); ?></td>
                    <td><?php echo e($agazatiP->A); ?></td>
                    <td><?php echo e($agazatiP->B); ?></td>
                    <td><?php echo e($agazatiP->C); ?></td>
                    <td><?php echo e($agazatiP->D); ?></td>
                    <td><?php echo e($agazatiP->E); ?></td>
                    <td><?php echo e($agazatiP->F); ?></td>
                    <td><?php echo e($agazatiP->G); ?></td>
                    <td><?php echo e($agazatiP->H); ?></td>
                    <td><?php echo e($agazatiP->I); ?></td>
                    <td><?php echo e($agazatiP->J); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/agazati_potlek_tablazat.blade.php ENDPATH**/ ?>