
<?php $__env->startSection('head'); ?>
    <script src="js/melleklet.js"></script>
    <script src="js/mellekletAdatok.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>


 <table class="table">
    <thead class="thead-light">
      <tr>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet1" target="_blank">Melleklet 1</a></td>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet2" target="_blank">Melleklet 2</a></td>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet3" target="_blank">Melleklet 3</a></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet4" target="_blank">Melleklet 4</a></td>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet5" target="_blank">Melleklet 5</a></td>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet6" target="_blank">Melleklet 6</a></td>
      </tr>
      <tr>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet10" target="_blank">Melleklet 10</a></td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Új melléklet"> </td>
        <td> </td>
      </tr>
    </tbody>
  </table>

  
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/mellekletek.blade.php ENDPATH**/ ?>