


<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="css/fennt.css" />
    <script src="js/ajax.js"></script>
    <script src="js/fenntClass.js"></script>
    <script src="js/fenntListazas.js"></script>
    <script src="js/fennt.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>
    <h3>Fenntartó adatok</h3>
    <div class="IDk">
        <input type="text" id="userJogosultsag" value="<?php echo e(Auth::user()->jogosultsag_id); ?>">
        <?php $__currentLoopData = $bolcsodek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bolcsode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($bolcsode->bolcsode_admin == Auth::user()->id): ?>
                <input type="text" id="fenntID" value="<?php echo e($bolcsode->fennt_id); ?>">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $jogosults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jogosultsag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($jogosultsag->megnevezes == 'admin'): ?>
                <input type="number" id="adminID" value="<?php echo e($jogosultsag->id); ?>">
            <?php endif; ?>
            <?php if($jogosultsag->megnevezes == 'szuperadmin'): ?>
                <input type="number" id="szuperAdminID" value="<?php echo e($jogosultsag->id); ?>">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Név</th>
                <th scope="col">Képviselő</th>
                <th scope="col">Adószám</th>

            </tr>
        </thead>
        <tbody id="adatFenntarto"></tbody>
        <tbody id="sablonFenntarto">
            <tr class="adatokFenntarto">
                <td class="modosit">
                    <button class="btn btn-primary" id="modositadat" type="button" data-toggle="modal"
                        data-target="#exampleModalLong">
                        <i class='fa fa-edit'></i>
                    </button>
                </td>
                <td class="torol">
                    <button class="btn btn-primary" id="toroladat" type="button" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
                <td class="nev"></td>
                <td class="kepviselo"></td>
                <td class="adoszam"></td>

            </tr>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Fenntartó adatai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="urlap">
                        <div class="row">
                            <div class="col" id="fId">
                                <div class="form-outline">
                                    <input type="text" id="Fenntartoid" class="form-control" readonly>
                                    <label class="form-label" for="Fenntartoid">ID</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="nev" class="form-control" readonly>
                                    <label class="form-label" for="nev">Név</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="kepv" class="form-control" readonly>
                                    <label class="form-label" for="kepv">Képviselő</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="megye" class="form-control" readonly>
                                    <label class="form-label" for="megye">Megye</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="szekh" class="form-control" readonly>
                                    <label class="form-label" for="szekh">Székhely</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="agazatia" class="form-control" readonly>
                                    <label class="form-label" for="agazatia">Ágazati azon</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="adoSzam" class="form-control" readonly>
                                    <label class="form-label" for="adoSzam">Adószám</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="cegsz" class="form-control" readonly>
                                    <label class="form-label" for="cegsz">Cégjegyzékszám</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="stat" class="form-control" readonly>
                                    <label class="form-label" for="stat">Statisztikaiszám</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="kormanyHivatal" class="form-control" readonly>
                                    <label class="form-label" for="kormanyHivatal">Illetékes kormány hivatal</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="bsz" class="form-control" readonly>
                                    <label class="form-label" for="bsz">Bölcsödék száma</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="oNev" class="form-control" value="" readonly>
                                    <label class="form-label" for="oNev">Orvos neve</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="oTel" class="form-control" value="" readonly>
                                    <label class="form-label" for="oTel">Orvos telefonszáma</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="oCim" class="form-control" value="" readonly>
                                    <label class="form-label" for="oCim">Orvos címe</label>
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
    <div>
        <button  class="btn btn-secondary ujFenntarto" >
            <a href="/ujFenntarto" target="_blank" id="ujFenn">Új fenntartó</a>
        </button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sajatAdatok', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.torlesMegerosites', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/fenntarto.blade.php ENDPATH**/ ?>