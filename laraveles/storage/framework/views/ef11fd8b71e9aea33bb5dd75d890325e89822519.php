<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/mellekletek_css/dolgozoKivalaszt.css">
</head>

<div class="kereso_box">
  <select class="w-100" data-live-search="true">
        <option >Válaszon dolgozót</option>
    <?php $__currentLoopData = $alkalmazotts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alkalmazott): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option class='nevekLista' value=<?php echo e($alkalmazott->id); ?>><?php echo e($alkalmazott->nev); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/layouts/dolgozoKivalasztas.blade.php ENDPATH**/ ?>