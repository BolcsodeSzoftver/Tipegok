
<?php $__env->startSection('head'); ?>
    <style>
        #mentes,
        .ment {
            width: 200px;
            margin: auto;
        }
    </style>
    <script src="js/felhasznalo.js"></script>
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
            <tbody class="adatok">
                    <?php $__currentLoopData = $jogosultsag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($u->jogosultsag_id == 1 and $u->jogosultsag_id == $a->id): ?>
                                <tr class="felhasznalo">
                                    <td class="modosit">
                                        <button class="btn btn-primary modositGomb" id=<?php echo e($u->id); ?> type="button"
                                            data-toggle="modal" data-target="#modalLoginForm">
                                            <i class='fa fa-edit'></i>
                                        </button>
                                    </td>
                                    <td></td>
                                    <td class="nev" id=<?php echo e($u->id); ?>><?php echo e($u->name); ?></td>
                                    <td class="email" id=<?php echo e($u->id); ?>><?php echo e($u->email); ?></td>
                                    <td><?php echo e($a->megnevezes); ?></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Felhasználók módosítása</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="api/felhasznalo/0" method="post">

                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="modal-body mx-3">
                            <input type="hidden" id="usersId" class="form-control" name="id" readonly>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="nameInput">Felhasználó
                                    név</label>
                                <input type="text" id="nameInput" class="form-control validate" name="name" value="">

                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="emailInput">Email</label>
                                <input type="email" id="emailInput" class="form-control validate" name="email" value="">

                            </div>
                        </div>
                        <div class="ment" style="padding: 10px">
                            <input class="btn btn-dark" type="submit" id="mentes" value="Mentés">
                        </div>
                        <div class="modal-footer">
                            <div class="adatModositEnged">
                                <button type="button" class="btn btn-primary" id="adatModosit">Adatok módosítása</button>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views//felhasznalo.blade.php ENDPATH**/ ?>