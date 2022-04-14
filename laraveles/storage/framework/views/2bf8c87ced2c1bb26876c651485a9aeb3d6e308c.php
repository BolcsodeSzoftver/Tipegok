
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
                <?php $__currentLoopData = $jogosultsagok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jogosultsag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($jogosultsag->megnevezes == 'szuperadmin'): ?>
                        <?php if(Auth::user()->jogosultsag_id == $jogosultsag->id): ?>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="felhasznalo">
                                    <td class="modosit">
                                        <button class="btn btn-primary modositGomb" id=<?php echo e($userData->id); ?> type="button"
                                            data-toggle="modal" data-target="#modalLoginForm">
                                            <i class='fa fa-edit'></i>
                                        </button>
                                    </td>
                                    <td></td>
                                    <td class="nev" id=<?php echo e($userData->id); ?>><?php echo e($userData->name); ?></td>
                                    <td class="email" id=<?php echo e($userData->id); ?>><?php echo e($userData->email); ?></td>
                                    <?php if($userData->jogosultsag_id == 1): ?>
                                    <td>admin</td>
                                    <?php endif; ?>
                                    <?php if($userData->jogosultsag_id == 2): ?>
                                    <td>szuperadmin</td>
                                    <?php endif; ?>
                                    <?php if($userData->jogosultsag_id == 3): ?>
                                    <td>dolgozo</td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <?php if($jogosultsag->megnevezes == 'admin'): ?>
                        <?php if(Auth::user()->jogosultsag_id == $jogosultsag->id): ?>

                        <?php $__currentLoopData = $bolcsodek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bolcsode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($bolcsode->bolcsode_admin == Auth::user()->id): ?>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $alkalmazottak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alkalmazott): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($userData->id == $alkalmazott->users_id): ?>
                                                <?php if($alkalmazott->bolcsode_id == $bolcsode->id): ?>
                                                    <tr class="felhasznalo">
                                                        <td class="modosit">
                                                            <button class="btn btn-primary modositGomb" id=<?php echo e($userData->id); ?> type="button"
                                                            data-toggle="modal" data-target="#modalLoginForm">
                                                            <i class='fa fa-edit'></i>
                                                            </button>
                                                        </td>
                                                        <td></td>
                                                        <td class="nev" id=<?php echo e($userData->id); ?>><?php echo e($userData->name); ?></td>
                                                        <td class="email" id=<?php echo e($userData->id); ?>><?php echo e($userData->email); ?></td>
                                                        <?php if($userData->jogosultsag_id == 1): ?>
                                                            <td>admin</td>
                                                        <?php endif; ?>
                                                        <?php if($userData->jogosultsag_id == 2): ?>
                                                            <td>szuperadmin</td>
                                                        <?php endif; ?>
                                                        <?php if($userData->jogosultsag_id == 3): ?>
                                                            <td>dolgozo</td>
                                                        <?php endif; ?>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        

                        <?php endif; ?>
                    <?php endif; ?>
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
                                <input type="text" id="nameInput" class="form-control validate" name="name" value="" readonly>

                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="emailInput">Email</label>
                                <input type="email" id="emailInput" class="form-control validate" name="email" value="" readonly>

                            </div>
                            <div class="md-form mb-4">
                                <select name="jogosultsag" id=""  class="form-control">
                                    <option>Válassz Jogosultságot</option>
                                    <?php $__currentLoopData = $jogosultsagok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jogosultsag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=<?php echo e($jogosultsag->id); ?>><?php echo e($jogosultsag->megnevezes); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                        </div>
                        <div class="ment" style="padding: 10px">
                            <input class="btn btn-dark" type="submit" id="mentes" value="Mentés">
                        </div>
                        <div class="modal-footer">
                            <div class="adatModositEnged">
                                <button type="button" class="btn btn-primary" id="adatModositEnged">Adatok módosítása</button>
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