
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="css/agazatiPotlek.css" />
    <script src="js/agazatiPotlek.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-active">
                <th></th>
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
        <tbody class="adatok">
            <?php $__currentLoopData = $agazatiPotlek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agazatiP): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="modositAgazatiP">
			            <button class="btn btn-primary modositGomb"  id=<?php echo e($agazatiP->id); ?> type="button" data-toggle="modal"
				            data-target="#exampleModalLong"><i class='fa fa-edit'></i>
			            </button>
		            </td>
                    <td class="eletkor" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->eletkor); ?></td>
                    <td class="a" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->A); ?></td>
                    <td class="b" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->B); ?></td>
                    <td class="c" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->C); ?></td>
                    <td class="d" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->D); ?></td>
                    <td class="e" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->E); ?></td>
                    <td class="f" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->F); ?></td>
                    <td class="g" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->G); ?></td>
                    <td class="h" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->H); ?></td>
                    <td class="i" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->I); ?></td>
                    <td class="j" id=<?php echo e($agazatiP->id); ?>><?php echo e($agazatiP->J); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>
    </table>
    <div class="lapozos">
        <?php echo $agazatiPotlek->links('pagination::bootstrap-4'); ?>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ágazati Potlék</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                        <div class="modal-body">
                            <div class="urlap">
                                <div class="row">
                                <div class="col" id="apId">
                                        <div class="form-outline">
                                            <input type="text" id="agazatiPID" class="form-control" readonly>
                                            <label class="form-label" for="agazatiPID">ID</label>
                                        </div>
                                    </div>
                                    <div class="col-7" style="transform: translateX(35%); text-align:center;">
                                        <div class="form-outline">
                                            <input type="text" id="eletkor" class="form-control" nev="eletkor" readonly style="text-align:center;">
                                            <label class="form-label" for="eletkor">Életkor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="a" class="form-control" name="a" readonly>
                                            <label class="form-label" for="a">A</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="b" class="form-control" name="b" readonly>
                                            <label class="form-label" for="b">B</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="c" class="form-control" name="c" readonly>
                                            <label class="form-label" for="c">C</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="d" class="form-control" name="d" readonly>
                                            <label class="form-label" for="d">D</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="e" class="form-control" name="e" readonly>
                                            <label class="form-label" for="e">E</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="f" class="form-control" name="f" readonly>
                                            <label class="form-label" for="f">F</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="g" class="form-control" name="g" readonly>
                                            <label class="form-label" for="g">G</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="h" class="form-control" name="h" readonly> 
                                            <label class="form-label" for="h">H</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="i" class="form-control" name="i" readonly>
                                            <label class="form-label" for="i">I</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="j" class="form-control" name="j" readonly>
                                            <label class="form-label" for="j">J</label>
                                        </div>
                                    </div>
                                </div>

                                <div id="ment">
                                    <input class="btn btn-dark" style="width:200px" type="submit" id="adatMentes" value="Mentés">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="adatModositEnged">
                                <button type="button" class="btn btn-primary">Adatok módosítása</button>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                        </div>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Balogh.Biborka\Desktop\Tipegok\laraveles\resources\views/agazati_potlek_tablazat.blade.php ENDPATH**/ ?>