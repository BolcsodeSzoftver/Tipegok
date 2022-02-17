
<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>

<div>
    <h3>Felhasználók</h3>
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th></th>
            <th></th>
            <th>Felhasználó név</th>
            <th>Email</th>
            <th>Jogosultság</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php $__currentLoopData = $felhasznalok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($f->jogosultsags==1 and $f->jogosultsags==$a->id and $f->users == $u->id): ?>
                <tr>
                  <td class="modosit">
			                  <button class="btn btn-primary" id="modositadat" type="button" data-toggle="modal"
				                      data-target="#exampleModalLong">
				                    <i class='fa fa-edit'></i>
			                  </button>
		                </td>
	                  	<td class="torol">
			                    <button class="btn btn-primary" id="toroladat" type="button">
				                  <i class="fa fa-trash"></i>
			                </button>
		                </td>
                    <td><?php echo e($u->name); ?></td>
                    <td><?php echo e($u->email); ?></td>
                    <td><?php echo e($a->megnevezes); ?></td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
        </tbody>
      </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/felhasznalo.blade.php ENDPATH**/ ?>