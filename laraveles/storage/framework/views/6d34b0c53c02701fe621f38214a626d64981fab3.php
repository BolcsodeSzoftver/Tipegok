<div class="modal fade" id="jovahagyasaraVaroDolgozoModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jóváhagyásra váró dolgozók</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body jovahagyasDiv">
                <table class="table table-bordered mb-5" id="tabla">

                    <thead>
                        <tr class="table-active">
                            <th></th>
                            <th scope="col" sortable>Név</th>
                        </tr>
                    </thead>


                    <tbody class="adatokDolgozoAllapot">
                        <?php if(Auth::user()->isAdmin() or Auth::user()->isSzuperAdmin()): ?>
                            <?php $__currentLoopData = $alkalmazotts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $kiirasFeltetel = ($data->allapot == 0 and $data->bolcsode_id == Auth::user()->getBolcsodeId());
                                    if (Auth::user()->isSzuperAdmin()) {
                                        $kiirasFeltetel = $data->allapot == 0;
                                    }
                                ?>
                                <?php if($kiirasFeltetel): ?>
                                    <tr class="dolgozo">
                                        <td class="modositAllapot">
                                            <div class="form-outline">
                                                <input type="hidden" id="allapot" class="form-control" name="allapot">
                                            </div>
                                            <button type="submit" name=<?php echo e($data->nev); ?> value="Save"
                                                id=<?php echo e($data->id); ?> data-toggle="modal" data-target="#adatok"
                                                class="btn btn-primary jovahagyasKezd">
                                                <span>&#10003;</span>
                                            </button>
                                        </td>
                                        <td class="nev" id=<?php echo e($data->id); ?>>
                                            <?php echo e($data->nev); ?></td>
                                        <td class="allapot" id=<?php echo e($data->allapot); ?>>
                                            <?php echo e($data->allapot); ?>

                                        </td>
                                        <td class="id" id=<?php echo e($data->id); ?>>
                                            <?php echo e($data->id); ?></td>
                                        <td class="bolcsodeIdTd" id=<?php echo e($data->id); ?>>
                                            <?php echo e($data->bolcsode_id); ?>


                                    </tr>
                                <?php endif; ?>

                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </tbody>


                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" id="adatok">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dolgozó Adatai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/api/dolgozo" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="urlap">
                        <div id="adatok">
                            <div class="col">
                                <h2 id="nevKiri" style="text-align: center"></h2>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="alkalmazottId" name="alkalmazottId">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="bolcsodeId" name="bolcsodeId">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="bruttoAlapber">Bruttó alapbér</label>
                                    <input type="text" class="form-control" id="bruttoAlapber" name="bruttoAlapber">
                                </div>
                                <div class="col">
                                    <label for="hetiMunkaOra">Heti munkaóra</label>
                                    <input type="text" class="form-control" id="hetiMunkaOra" name="hetiMunkaOra">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="besorolasiBetu">Besorolási betű</label>
                                    <input type="text" class="form-control" id="besorolasiBetu" name="besorolasiBetu">
                                </div>
                                <div class="col">
                                    <label for="besorolasiSzam">Besorolási szám</label>
                                    <input type="text" class="form-control" id="besorolasiSzam" name="besorolasiSzam">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="feorAzonosito">Feor azonosító</label>
                                <input type="text" class="form-control" id="feorAzonosito" name="feorAzonosito">
                            </div>
                            <div class="col">
                                <label for="agazataiPotlek">Ágazati pótlék</label>
                                <input type="text" class="form-control" id="agazataiPotlek" name="agazataiPotlek">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="evesSzabi">Éves szabadság</label>
                                <input type="text" class="form-control" id="evesSzabi" name="evesSzabi">
                            </div>
                            <div class="col">
                                <label for="vegzettseg">Végzettség</label>
                                <input type="text" class="form-control" id="vegzettseg" name="vegzettseg">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="szgfKod">SZGF kód</label>
                                <input type="text" class="form-control" id="szgfKod" name="szgfKod">
                            </div>
                            <div class="col">
                                <label for="munkakor">Munkakör</label>
                                <input type="text" class="form-control" id="munkakor" name="munkakor">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="szSzakkepzet">Sz_szakképzett</label>
                                <input type="text" class="form-control" id="szSzakkepzet" name="szSzakkepzet">
                            </div>
                            <div class="col">
                                <p>Kifizetés módja</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kezpenz" id="kezpenz" value="1">
                                    <label class="form-check-label" for="kezpenz">Kézpénz</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="utalas" id="utalas" value="2">
                                    <label class="form-check-label" for="utalas">Utalás</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="belepes">Belépési nap</label>
                                <input type="date" class="form-control" id="belepes" name="belepes">
                            </div>
                            <div class="col">
                                <label for="kilepes">Kilépési nap</label>
                                <input type="date" class="form-control" id="kilepes" name="kilepes">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                    <button type="submit" name='submit' value="Saveaa" class="btn btn-primary" data-toggle="modal"
                        id='submit'>
                        ment
                    </button>
            </form>
        </div>

    </div>
</div>
</div>
<?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/layouts/jovahagyasraVaroDolgozok.blade.php ENDPATH**/ ?>