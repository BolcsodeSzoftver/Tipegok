
<?php $__env->startSection('head'); ?>
<script src="js/ajax.js"></script>
<script src="js/felhasznalo.js"></script>
<script src="js/felhasznaloClass.js"></script>
<script src="js/felhasznaloListazas.js"></script>

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
                <tr class="adatok">
                    <?php $__currentLoopData = $felhasznalok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($f->jogosultsags == 1 and $f->jogosultsags == $a->id and $f->users == $u->id): ?>
                <tr>
                    <td class="modosit">
                        <button class="btn btn-primary" id="modositadat" type="button" data-toggle="modal"
                            data-target="#modalLoginForm">
                            <i class='fa fa-edit'></i>
                        </button>
                    </td>
                    <td class="torol">
                        <button class="btn btn-primary" id="toroladat" type="button">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                    <td class="nev"><?php echo e($u->name); ?></td>
                    <td class="email"><?php echo e($u->email); ?></td>
                    <td><?php echo e($a->megnevezes); ?></td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
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
                    <form action="">
                        <div class="modal-body mx-3">
                          <div class="col" id="usersId">
                            <div class="form-outline" id="usersId">
                                <input type="text" id="usersId" class="form-control" readonly>
                                <label class="form-label" for="usersId">ID</label>
                            </div>
                        </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="name">Felhasználó
                                    név</label>
                                <input type="text" id="name" class="form-control validate" value="">

                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="email">Email</label>
                                <input type="email" id="email" class="form-control validate" value="">

                            </div>
                           
                        </div>
                        <div class="ment" style="padding: 10px">
                            <input class="btn btn-dark" style="width:200px;" type="submit" class="adatMentes"
                                value="Mentés">
                        </div>
                        <div class="modal-footer">
                            <div class="adatModositEnged">
                                <button type="button" class="btn btn-primary">Adatok módosítása</button>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/felhasznalo.blade.php ENDPATH**/ ?>