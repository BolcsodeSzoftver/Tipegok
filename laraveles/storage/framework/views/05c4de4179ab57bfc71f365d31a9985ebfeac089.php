
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $alkalmazott; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($d->id); ?></td>
                    <td><?php echo e($d->nev); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/pages/dolgozo.blade.php ENDPATH**/ ?>