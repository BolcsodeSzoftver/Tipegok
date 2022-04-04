<!-- Modal: sajat adat -->
<div class="modal fade" id="sajatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Saját adatok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="api/alkalmazott/0" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link dolgozoModalAdatok1" href="#">1</a></li>
                        <li class="nav-item"><a class="nav-link dolgozoModalAdatok2" href="#">2</a></li>
                        <li class="nav-item"><a class="nav-link dolgozoModalAdatok3" href="#">3</a></li>
                        <?php $__currentLoopData = $alkalmazotts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($data->users_id == Auth::user()->id): ?>
                        <li class="nav-item"><a class="nav-link bizonyitvanyokGomb" href="#" id=<?php echo e($data->id); ?>>4</a></li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <input type="hidden" id="dolgozoId" class="form-control" name="id" readonly>
                    <div class="urlap">
                        <?php $__currentLoopData = $alkalmazotts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($data->users_id == Auth::user()->id): ?>
                                <div class="adatok1">
                                    <div class="col" id="gId">
                                        <div class="form-outline">
                                            <input type="hidden" id="dolgozoId" class="form-control"
                                                value=<?php echo e($data->id); ?> readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="nev"
                                                    value=<?php echo e($data->nev); ?> readonly>
                                                <label class="form-label" for="nev">Név</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="anyjaNeve"
                                                    value=<?php echo e($data->anyja_neve); ?> readonly>
                                                <label class="form-label" for="anyjaNeve">Anyja neve</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="szulN"
                                                    value=<?php echo e($data->szul_nev); ?> readonly>
                                                <label class="form-label" for="szulN">Születési név</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="tel"
                                                    value=<?php echo e($data->telefonszam); ?> readonly>
                                                <label class="form-label" for="tel">Telefonszám</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="szulH"
                                                    value=<?php echo e($data->szul_hely); ?> readonly>
                                                <label class="form-label" for="szulH">Születési hely</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="szulI"
                                                    value=<?php echo e($data->szul_ido); ?> readonly>
                                                <label class="form-label" for="szulI">Születési idő</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="allPorg"
                                                    value=<?php echo e($data->all_polgarsag); ?> readonly>
                                                <label class="form-label" for="allPorg">Államporgárság</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="tizenhatAGy"
                                                    value=<?php echo e($data->tizenhat_alatti_gyermek); ?> readonly>
                                                <label class="form-label" for="tizenhatAGy">16 éven aluli gyermekek
                                                    száma</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="nem"
                                                    value=<?php echo e($data->nem); ?> readonly>
                                                <label class="form-label" for="nem">Nem</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="hazas"
                                                    value=<?php echo e($data->hazas_e); ?> readonly>
                                                <label class="form-label" for="hazas">Házas</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                                <div class="adatok2">
                                    <h5></h5>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="allandoLak"
                                                    value=<?php echo e($data->allando_lakhely); ?> readonly>
                                                <label class="form-label" for="allandoLak">Állandó lakhely</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="tartHely"
                                                    value=<?php echo e($data->tartozkodasi_hely); ?> readonly>
                                                <label class="form-label" for="tartHely">Tartózkodási hely</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="adoAzon"
                                                    value=<?php echo e($data->adoazon_jel); ?> readonly>
                                                <label class="form-label" for="adoAzon">Adóazonósító</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="tajSz"
                                                    value=<?php echo e($data->tajszam); ?> readonly>
                                                <label class="form-label" for="tajSz">Tajszám</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" class="form-control" name="bankSZ"
                                                    value=<?php echo e($data->banszamla_szam); ?> readonly>
                                                <label class="form-label" for="bankSZ">Bankszámla szám</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                                <div class="adatok3">
                                <label for="">Munkaköri adtok</label>
                                <?php $__currentLoopData = $dolgozok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dolgozo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($dolgozo->alkalmazott_id == $data->id): ?>
                                        <div class="row">
							                <div class="col">
							                    <div class="form-outline">
                                                    <input type="text" class="form-control" name=<?php echo e($dolgozo->brutto_alapber); ?> value=<?php echo e($dolgozo->brutto_alapber); ?> readonly>
                                                    <label class="form-label" for=<?php echo e($dolgozo->brutto_alapber); ?>>Bruttó alapbér</label>
                                                </div>
                                            </div>
                                            <div class="col">
							                    <div class="form-outline">
                                                    <input type="text" class="form-control" name=<?php echo e($dolgozo->heti_munkaora); ?> value=<?php echo e($dolgozo->heti_munkaora); ?> readonly>
                                                    <label class="form-label" for=<?php echo e($dolgozo->heti_munkaora); ?>>Heti munkaóra</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
							                <div class="col">
							                    <div class="form-outline">
                                                    <input type="text" class="form-control" name=<?php echo e($dolgozo->besorolas_betu); ?> value=<?php echo e($dolgozo->besorolas_betu); ?> readonly>
                                                    <label class="form-label" for=<?php echo e($dolgozo->besorolas_betu); ?>>Besorolás betű</label>
                                                </div>
                                            </div>
                                            <div class="col">
							                    <div class="form-outline">
                                                    <input type="text" class="form-control" name=<?php echo e($dolgozo->besorolas_szam); ?> value=<?php echo e($dolgozo->besorolas_szam); ?> readonly>
                                                    <label class="form-label" for=<?php echo e($dolgozo->besorolas_szam); ?>>Besorolás szám</label>
                                                </div>
                                            </div>
                                            <div class="col">
							                    <div class="form-outline">
                                                    <input type="text" class="form-control" name=<?php echo e($dolgozo->agazati_potlek); ?> value=<?php echo e($dolgozo->agazati_potlek); ?> readonly>
                                                    <label class="form-label" for=<?php echo e($dolgozo->agazati_potlek); ?>>Ágazati pótlék</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
							                <div class="col">
							                    <div class="form-outline">
                                                    <input type="text" class="form-control" name=<?php echo e($dolgozo->feor_azon); ?> value=<?php echo e($dolgozo->feor_azon); ?> readonly>
                                                    <label class="form-label" for=<?php echo e($dolgozo->feor_azon); ?>>Feor azonosító</label>
                                                </div>
                                            </div>
                                            <div class="col">
							                    <div class="form-outline">
                                                    <input type="text" class="form-control" name=<?php echo e($dolgozo->eves_szabi); ?> value=<?php echo e($dolgozo->eves_szabi); ?> readonly>
                                                    <label class="form-label" for=<?php echo e($dolgozo->eves_szabi); ?>>Éves szabadság</label>
                                                </div>
                                            </div>
                                            <div class="col">
							                    <div class="form-outline">
                                                    <input type="text" class="form-control" name=<?php echo e($dolgozo->vegzettseg); ?> value=<?php echo e($dolgozo->vegzettseg); ?> readonly>
                                                    <label class="form-label" for=<?php echo e($dolgozo->vegzettseg); ?>>Végzettség</label>
                                                </div>
                                            </div>
                                        </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                        <div class="adatok4">
                            <label for="">Bizonyitvagy(ok)</label>
                            <div id="bizAdatok"></div>
                            <div style="width: 220px; margin: auto;">
                        <button class="btn btn-secondary ujBizGomb" style="width: 200px; margin: auto;">
                            <a href="/ujBizonyitvany" target="_blank" style="color: white; text-decoration: none;">Új bizonyítvány</a></li>
                        </button>
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
            </form>

        </div>
    </div>
</div><?php /**PATH C:\Users\hallgato\Documents\balogh_biborka\Tipegok\laraveles\resources\views/layouts/sajatAdatok.blade.php ENDPATH**/ ?>