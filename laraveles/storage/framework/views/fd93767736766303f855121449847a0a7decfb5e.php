
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <script src="js/ajax.js"></script>
    <script src="js/bolcsodeListazas.js"></script>
    <script src="js/script.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('tartalom'); ?>

    <h3>Bölcsőde adatok</h3>
    <div class="modositUrlap">
        <div class="row">
            <div class="col">
                <div class="form-outline" id="idB">
                    <input type="text" id="id" class="form-control" />
                    <label class="form-label" for="id">Id</label>
                </div>
                <div class="form-outline">
                    <input type="text" id="cim" class="form-control" />
                    <label class="form-label" for="cim">Cím</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="nev" class="form-control" />
                    <label class="form-label" for="nev">Név</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="agazatiAzon" class="form-control" />
                    <label class="form-label" for="agazatiAzon">Ágazati azonosító</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="feorAzon" class="form-control" />
                    <label class="form-label" for="feorAzon">FEOR azonosító</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="szgyfKod" class="form-control" />
                    <label class="form-label" for="szgyfKod">SZGYF kód</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="number" id="ferohelyekSzama" class="form-control" />
                    <label class="form-label" for="ferohelyekSzama">Férőhelyek száma</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="agazatiPotlek" class="form-control" />
                    <label class="form-label" for="agazatiPotlek">Ágazati pótlék</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <button class="btn btn-primary" id="Ujmodositadat" type="button">
                        Adatok módosítás
                    </button>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cím</th>
                <th scope="col">Név</th>
                <th scope="col">Ágazati azonosító</th>
                <th scope="col">SZGYF kód</th>
                <th scope="col">Férőhelyek száma</th>
                <th scope="col">FEOR azonosító</th>
                <th scope="col">Ágazati pótlék</th>
            </tr>
        </thead>
        <tbody>
            <tr class="adatok">
                <td class="cim"></td>
                <td class="nev"></td>
                <td class="agazati_azon"></td>
                <td class="szgyf_kod"></td>
                <td class="ferohelyek_szama"></td>
                <td class="feor"></td>
                <td class="agazati_potlek"></td>
                <td class="modosit">
                    <button class="btn btn-primary" id="modositadat" type="button">
                        Módosítás
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bibor\Desktop\bolcsodeSzoftver\resources\views/bolcsiadat.blade.php ENDPATH**/ ?>