<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fenntartó</title>
    <link rel="stylesheet" href="formazas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <main class="container shadow p-4 mb-4 bg-white">
        <header class="text-center bg-secondary text-white">
            <h3>Fenntartó</h3>
        </header>
        <form action="/ujFenntarto" method="post">
        <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <label class="col-sm-3" for="nev">Fenntartó neve:</label>
                        <input class="col-sm-6" type="text" id="nev" name="nev" value="<?php echo e(old('nev')); ?>">
                        <?php $__errorArgs = ['nev'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                   <div class="row"> 
                        <label class="col-sm-3" for="szekh">Székhely:</label>
                        <input class="col-sm-6" type="text" id="szekh" name="szekhely" value="<?php echo e(old('szekhely')); ?>">
                        <?php $__errorArgs = ['szekhely'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div> 
                   <div class="row">
                        <label class="col-sm-3" for="megye">Megye:</label>
                        <input class="col-sm-6" type="text" id="megye" name="megye" value="<?php echo e(old('megye')); ?>">
                        <?php $__errorArgs = ['megye'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>
                   <div class="row">
                        <label class="col-sm-3" for="kepv">Képviselő:</label>
                        <input class="col-sm-6" type="text" id="kepv" name="kepviselo" value="<?php echo e(old('kepviselo')); ?>">
                        <?php $__errorArgs = ['kepviselo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>
                   <div class="row">
                        <label class="col-sm-3" for="agazatia">Ágazati azon:</label>
                        <input class="col-sm-6" type="text" id="agazatia" name="agazati_azon" value="<?php echo e(old('agazati_azon')); ?>">
                        <?php $__errorArgs = ['agazati_azon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>
                </div>
                <div class="col">
                    <div class="row">
                        <label class="col-sm-5" for="adoSzam">Adószám:</label>
                        <input class="col-sm-6" type="number" id="adoSzam" name="adoszam" value="<?php echo e(old('adoszam')); ?>">
                        <?php $__errorArgs = ['adoszam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="cegsz">Cégjegyzékszám:</label>
                        <input class="col-sm-6" type="number" id="cegsz" name="cegjegyzekszam" value="<?php echo e(old('cegjegyzekszam')); ?>">
                        <?php $__errorArgs = ['cegjegyzekszam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="stat">Statisztikaiszám:</label>
                        <input class="col-sm-6" type="number" id="stat" name="statisztikaiszam" value="<?php echo e(old('statisztikaiszam')); ?>">
                        <?php $__errorArgs = ['statisztikaiszam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="kormanyHivatal">Illetékes kormány hivatal:</label>
                        <input class="col-sm-6" type="text" id="kormanyHivatal" name="illetekes_kormányh" value="<?php echo e(old('illetekes_kormányh')); ?>">
                        <?php $__errorArgs = ['illetekes_kormányh'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="row"> 
                        <label class="col-sm-5" for="bsz">Bölcsödék száma:</label>
                        <input class="col-sm-6" type="number" id="bsz" name="bolcsodek_szama" value="<?php echo e(old('bolcsodek_szama')); ?>">
                        <?php $__errorArgs = ['bolcsodek_szama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>

            <fieldset class="container text-center shadow p-4 mb-4 bg-white">
                <legend>Üzemorvos:</legend>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oNeve">Név:</label>
                    <input class="col-sm-4" type="text" id="oNeve" name="uzemorvos_nev" value="<?php echo e(old('uzemorvos_nev')); ?>">
                    <?php $__errorArgs = ['uzemorvos_nev'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oCim">Cím:</label>
                    <input class="col-sm-4" type="text" id="oCim" name="uzemorvos_cim" value="<?php echo e(old('uzemorvos_cim')); ?>">
                    <?php $__errorArgs = ['uzemorvos_cim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="row-cols-6">
                    <label class="col-sm-2" for="oTel">Telefonszám:</label>
                    <input class="col-sm-4" type="number" id="oTel" name="uzemorvos_telefonszam" value="+36<?php echo e(old('uzemorvos_telefonszam')); ?>">
                    <?php $__errorArgs = ['uzemorvos_telefonszam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </fieldset>
            <div id="ment">
            <input class="btn btn-dark" style="width:200px" type="submit" value="Mentés">
            </div>
        </form>
    </main>
</body>
</html><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/ujFenntarto.blade.php ENDPATH**/ ?>