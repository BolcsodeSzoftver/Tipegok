

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <script src="js/ajax.js"></script>
    <script src="js/bolcsodeAdatLista.js"></script>
    <script src="js/bolcsodeClass.js"></script>
    <script src="js/bolcsode.js"></script>
    <!-- <script src="js/fenntListazas.js"></script>
    <script src="js/fenntClass.js"></script>
    <script src="js/fennt.js"></script> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tartalom'); ?>
    <h3>Bölcsőde adatok</h3>
    <div class="IDk">
    <input type="text" id="userJogosultsag" value="<?php echo e(Auth::user()->jogosultsag_id); ?>">
    <input type="number" id="userID" value="<?php echo e(Auth::user()->id); ?>">
    <?php $__currentLoopData = $jogosults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jogosultsag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($jogosultsag->megnevezes=='admin'): ?>
        <input type="number" id="adminID" value="<?php echo e($jogosultsag->id); ?>">
        <?php endif; ?>
        <?php if($jogosultsag->megnevezes=='szuperadmin'): ?>
        <input type="number" id="szuperAdminID" value="<?php echo e($jogosultsag->id); ?>">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <form class="form" id="bolcsiForm">
        <label for="bolcsi">Fenntartókhoz tartozó bölcsödék:</label>
        <select class="bolcsiNev">

            <?php $__currentLoopData = $fenntartok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fenntarto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($fenntarto->id); ?>"><?php echo e($fenntarto->nev); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Cím</th>
                <th scope="col">Név</th>
                <th scope="col">Ágazati azonosító</th>
                <th scope="col">SZGYF kód</th>
                <th scope="col">Férőhelyek száma</th>
                <th scope="col">FEOR azonosító</th>
                <th scope="col">Ágazati pótlék</th>
            </tr>
        </thead>
    </table>

    <ul style="list-style-type: none;">
        <li>
            <a class="btn btn-secondary" id="ujBolcsiGomb" style="width: 200px; " href="/ujBolcsi" target="_blank">Új
                bölcsőde</a>
        </li>
    </ul>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Bölcsőde adatai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modositUrlap">
                        <div class="row">
                            <div class="col">
                                <div class="form-outline" id="idB">
                                    <input type="text" id="id" class="form-control" readonly />
                                    <label class="form-label" for="id">Id</label>
                                </div>
                                <div class="form-outline">
                                    <input type="text" id="cim" class="form-control" readonly />
                                    <label class="form-label" for="cim">Cím</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="nev" class="form-control" readonly />
                                    <label class="form-label" for="nev">Név</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="agazatiAzon" class="form-control" readonly />
                                    <label class="form-label" for="agazatiAzon">Ágazati azonosító</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="feorAzon" class="form-control" readonly />
                                    <label class="form-label" for="feorAzon">FEOR azonosító</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="szgyfKod" class="form-control" readonly />
                                    <label class="form-label" for="szgyfKod">SZGYF kód</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="number" id="ferohelyekSzama" class="form-control" readonly />
                                    <label class="form-label" for="ferohelyekSzama">Férőhelyek száma</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="agazatiPotlek" class="form-control" readonly />
                                    <label class="form-label" for="agazatiPotlek">Ágazati pótlék</label>
                                </div>
                            </div>
                            <div class="form-outline">
                                

                                <select class="fenntartoModosit" name="fenntarto" id="fenntarto">
                                    <?php $__currentLoopData = $fenntartok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fenntarto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option id="fenntarto" value="<?php echo e($fenntarto->id); ?>"><?php echo e($fenntarto->nev); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <div class="adatModositEnged">
                        <button id="adatokMod" type="button" class="btn btn-primary">Adatok módosítása</button>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <button class="btn btn-primary" id="Ujmodositadat" type="button">
                                Mentés
                            </button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.torlesMegerosites', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/bolcsiadat.blade.php ENDPATH**/ ?>