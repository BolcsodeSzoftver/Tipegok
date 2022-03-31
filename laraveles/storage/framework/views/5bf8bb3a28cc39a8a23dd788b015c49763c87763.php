

<?php $__env->startSection('head'); ?>
  <link rel="stylesheet" href="css/mellekletek_css/mellekletekFromazasa.css">
  <script src="js/adminSajatAdatMegjelenit.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>

  <div class="melleklet-gombok">
    <a class="btn btn-secondary" href="/melleklet1" target="_blank">Melleklet 1</a>
    <a class="btn btn-secondary" href="/melleklet2" target="_blank">Melleklet 2</a>
    <a class="btn btn-secondary" href="/melleklet3" target="_blank">Melleklet 3</a>
    <a class="btn btn-secondary" href="/melleklet4" target="_blank">Melleklet 4</a>
    <a class="btn btn-secondary" href="/melleklet5" target="_blank">Melleklet 5</a>
    <a class="btn btn-secondary" href="/melleklet6" target="_blank">Melleklet 6</a>
    <a class="btn btn-secondary" href="/melleklet10" target="_blank">Melleklet 10</a>
    <!-- <input class="btn btn-dark" style="width:200px" type="submit" value="Új melléklet"> -->
  </div>
  
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sajatAdatok', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/mellekletek.blade.php ENDPATH**/ ?>