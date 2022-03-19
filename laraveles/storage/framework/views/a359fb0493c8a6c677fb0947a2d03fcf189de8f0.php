


<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="css/dolgozo.css" />
    <script src="js/dolgozo.js"></script>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>

    <div class=row>
        <h3>Doldozó adatai</h3>
    </div>
    <div class=row>
        <div class="form-group">
            <form action="/dolgozo" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Keresés" name="keresesDolgozo">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" id="keresesGomb">
                            <i class="fa fa-search"></i>
                        </button>
                        <button class="btn btn-secondary" type="submit" id="keresesToresGomb">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary btn-lg jovhagyas" id="jovahagyasGomb" data-toggle="modal"
                data-target="#jovahagyasaraVaroDolgozoModal" sytle="float:left;">
                Jóváhagyásra váró dolgozók :
                <?php if($db > 0): ?>
                    <?php echo $db; ?> <i class="fa fa-bell" style="font-size:24px;color:white"></i>
                <?php else: ?>
                    nincs
                <?php endif; ?>
            </button>
        </div>
    </div>
    <div class=row>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link" id="adatokT1">saját adatok</a></li>
            <li class="nav-item"><a class="nav-link" id="adatokT2">születési adatok</a></li>
            <li class="nav-item"><a class="nav-link" id="adatokT3">lakhely</a></li>
            <li class="nav-item"><a class="nav-link" id="adatokT4">ID</a></li>
            <li class="nav-item"><a class="nav-link" id="adatokT5">egyéb adatok</a></li>
        </ul>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-active">
                    <th></th>
                    <th></th>
                    <th scope="col" sortable>Név</th>
                    <th class="t1" sortable scope="col">Cím</th>
                    <th class="t1" sortable scope="col">Telefonszám</th>
                    <th class="t1" sortable scope="col">Anyja neve</th>

                    <th class="t2" scope="col">Születési név</th>
                    <th class="t2" scope="col">Születési hely</th>
                    <th class="t2" scope="col">Születési idő</th>

                    <th class="t3" scope="col">Állandó lakhely</th>
                    <th class="t3" scope="col">Tartozkodási hely</th>

                    <th class="t4" scope="col">Tajszám</th>
                    <th class="t4" scope="col">Adóazonosító</th>
                    <th class="t4" scope="col">Bankszámla szám</th>

                    <th class="t5" scope="col">Nem</th>
                    <th class="t5" scope="col">Házas</th>
                    <th class="t5" scope="col">16 éven aluli gyermekek száma</th>
                    <th class="t5" scope="col">Állam polgárság</th>
                </tr>
            </thead>


            <?php $__currentLoopData = $jogosultsags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jogosultsag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($jogosultsag->megnevezes == 'szuperadmin'): ?>
                    <?php if(Auth::user()->jogosultsag_id == $jogosultsag->id): ?>
                        <tbody class="adatokDolgozo">
                            <?php $__currentLoopData = $alkalmazotts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($data->allapot === 1): ?>
                                    <tr class="dolgozo">
                                        <td class="modosit">
                                            <button wire:click="edit(<?php echo e($data->id); ?>)"
                                                class="btn btn-primary modositGomb" id=<?php echo e($data->id); ?> type="submit"
                                                data-toggle="modal" data-target="#exampleModalLong">
                                                <i class='fa fa-edit'></i>
                                            </button>
                                        </td>
                                        <td class="torol">
                                            <button class="btn btn-primary dolgozoTorles" id=<?php echo e($data->id); ?>

                                                type="button" data-toggle="modal" data-target="#modalDolgozo">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                        <td class="nev" id=<?php echo e($data->id); ?>><?php echo e($data->nev); ?></td>
                                        <td class="t1 allandoLakhely" id=<?php echo e($data->id); ?>><?php echo e($data->allando_lakhely); ?>

                                        </td>
                                        <td class="t1 telefonszam" id=<?php echo e($data->id); ?>><?php echo e($data->telefonszam); ?></td>
                                        <td class="t1 anyjaNev" id=<?php echo e($data->id); ?>><?php echo e($data->anyja_neve); ?></td>

                                        <td class="t2 szulN" id=<?php echo e($data->id); ?>><?php echo e($data->szul_nev); ?></td>
                                        <td class="t2 szulH" id=<?php echo e($data->id); ?>><?php echo e($data->szul_hely); ?></td>
                                        <td class="t2 szulI" id=<?php echo e($data->id); ?>><?php echo e($data->szul_ido); ?></td>

                                        <td class="t3 cim" id=<?php echo e($data->id); ?>><?php echo e($data->allando_lakhely); ?>

                                        </td>
                                        <td class="t3 tartHely" id=<?php echo e($data->id); ?>><?php echo e($data->tartozkodasi_hely); ?>

                                        </td>

                                        <td class="t4 taj" id=<?php echo e($data->id); ?>><?php echo e($data->tajszam); ?></td>
                                        <td class="t4 adoA" id=<?php echo e($data->id); ?>><?php echo e($data->adoazon_jel); ?></td>
                                        <td class="t4 bankSz" id=<?php echo e($data->id); ?>><?php echo e($data->banszamla_szam); ?>

                                        </td>

                                        <td class="t5 nem" id=<?php echo e($data->id); ?>><?php echo e($data->nem); ?></td>
                                        <td class="t5 hazas" id=<?php echo e($data->id); ?>><?php echo e($data->hazas_e); ?></td>
                                        <td class="t5 gyerek" id=<?php echo e($data->id); ?>>
                                            <?php echo e($data->tizenhat_alatti_gyermek); ?>

                                        </td>
                                        <td class="t5 polgar" id=<?php echo e($data->id); ?>><?php echo e($data->all_polgarsag); ?>

                                        </td>

                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-secondary regisztracio">
                <a href="/felhasznaloRegisztracio" target="_blank" id="ujDolgozo">Új dolgozó regisztrálása</a>
            </button>
        </div>
        <div>
            <?php echo $alkalmazotts->links('pagination::bootstrap-4'); ?>

        </div>
    </div>
    

    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Dolgozó adatai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="api/dolgozo/0" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="modal-body">
                        <input type="hidden" id="dolgozoId" class="form-control" name="id" readonly>
                        <div class="urlap">
                            <div id="adatok1">
                                <div class="col" id="gId">
                                    <div class="form-outline">
                                        <input type="hidden" id="dolgozoId" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="nev" class="form-control" name="nev" readonly>
                                            <label class="form-label" for="nev">Név</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="anyjaNeve" class="form-control" name="anyjaNeve"
                                                readonly>
                                            <label class="form-label" for="anyjaNeve">Anyja neve</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="szulN" class="form-control" name="szulN" readonly>
                                            <label class="form-label" for="szulN">Születési név</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="tel" class="form-control" name="tel" readonly>
                                            <label class="form-label" for="tel">Telefonszám</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="szulH" class="form-control" name="szulH" readonly>
                                            <label class="form-label" for="szulH">Születési hely</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="szulI" class="form-control" name="szulI" readonly>
                                            <label class="form-label" for="szulI">Születési idő</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="allPorg" class="form-control" name="allPorg" readonly>
                                            <label class="form-label" for="allPorg">Államporgárság</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="tizenhatAGy" class="form-control" name="tizenhatAGy"
                                                readonly>
                                            <label class="form-label" for="tizenhatAGy">16 éven aluli gyermekek
                                                száma</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="nem" class="form-control" name="nem" readonly>
                                            <label class="form-label" for="nem">Nem</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="hazas" class="form-control" name="hazas" readonly>
                                            <label class="form-label" for="hazas">Házas</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div id="adatok2">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input value="" type="text" id="allandoLak" class="form-control"
                                                name="allandoLak" readonly>
                                            <label class="form-label" for="allandoLak">Állandó lakhely</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="tartHely" class="form-control" name="tartHely"
                                                readonly>
                                            <label class="form-label" for="tartHely">Tartózkodási hely</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="adoAzon" class="form-control" name="adoAzon" readonly>
                                            <label class="form-label" for="adoAzon">Adóazonósító</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="tajSz" class="form-control" name="tajSz" readonly>
                                            <label class="form-label" for="tajSz">Tajszám</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="bankSZ" class="form-control" name="bankSZ" readonly>
                                            <label class="form-label" for="bankSZ">Bankszámla szám</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ment">
                                <input class="btn btn-dark" type="submit" id="mentes" value="Mentés">
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

<?php echo $__env->make('layouts.jovahagyasraVaroDolgozok', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.torlesMegerositesDolgozo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/dolgozo.blade.php ENDPATH**/ ?>