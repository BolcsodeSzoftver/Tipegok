
<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>

<div>
    <h3>Felhasználók</h3>
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th>Felhasználó név</th>
            <th>Email</th><!-- 
            <th>Jogosultság</th> -->
          </tr>
        </thead>
        <tbody>
          <tr>
          <!-- <?php $__currentLoopData = $felhasznalok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> -->
            <?php $__currentLoopData = $u; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uuuu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <!-- <?php if($f->jogosultsag_id==1 and $f->jogosultsag_id==$a->id): ?> -->
                <tr>
                    <td><?php echo e($uuuu->name); ?></td>
                    <td><?php echo e($uuuu->email); ?></td><!-- 
                    <td><?php echo e($a->megnevezes); ?></td> -->
                </tr>
                <!-- <?php endif; ?> -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
          </tr>
        </tbody>
      </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/felhasznalo.blade.php ENDPATH**/ ?>