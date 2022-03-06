<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/mellekletek_css/melleklet6.css">
    <title>Dokumentum 6</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/mellekletAdatok.js"></script>
    <script src="js/melleklet.js"></script>
  </head>
  <body>
    <main>
        <label class="alkalmazottNevek">Válasz dolgozót: </label>
        <select class="alkalmazottNevek">
            <?php $__currentLoopData = $alkalmazotts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alkalmazott): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option class='nevekLista' value=<?php echo e($alkalmazott->id); ?>><?php echo e($alkalmazott->nev); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      <div id="export">
      <header>
        <h2>6. Melléklet</h2>
        <h2>NYILATKOZAT<br />TŰZ-ÉS MUNKAVÉDELMI OKTATÁSRA VONATKOZÓAN</h2>
      </header>
      <article>
        
          <p class="nev">NÉV:<input type="text" class="adat" id="nev"></p>
        <p>
          Alulírott elismerem hogy tűz esetén követendő magatartásra, a
          munkakörömmel kapcsolatos tűzvédelmi előírásokra valamint a
          készenlétben
          tartott tűzvédelmi felszerelések készültségi helyére, használatára
          vonatkozóan oktatást kaptam.
        </p>
        <p class="alahuzas">Az oktatás kiterjedt:</p>
        <ul>
          <li>- tűzvédelmi szabályzat előírásai</li>
          <li>
            - a munkáltató, munkavállaló jogainak, kötelezettségeinek
            ismertetésére
          </li>
          <li>
            - a megelőző tűzvédelmi rendelkezésekre és használati előírásokra
          </li>
          <li>- a tűzjelzés lehetőségre és módjára</li>
          <li>- tűz esetén követendő magatartásra</li>
          <li>
            - az elhelyezett tűzvédelmi felszerelések készültségi helyének és
            használatának ismeretére,
          </li>
          <li>- tűzvédelmi szakvizsgát igénylő tevékenységekre</li>
          <li>- alkalomszerű tűzveszélyes tevékenység végzésének feltételeire</li>
          <li>- a tűzvédelmi jogszabályok megszegésének következményeire.</li>
        </ul>
        <p>
          Kijelentem, hogy a munkakörömmel kapcsolatos tűzvédelmi
          előírásokat,illetőleg a tűzoltóeszközök használatát ismerem.
          Alulírott
          elismerem, hogy a munkakörömmel kapcsolatos munkavédelmi
          előírásokra
          vonatkozóan oktatást kaptam.
        </p>
        <p class="alahuzas"> Az oktatás kiterjedt:</p>
        <ul>
          <li>- a munkáltató jogainak, kötelezettségeinek ismertetésére</li>
          <li>- a munkavállaló jogainak, kötelezettségeinek ismertetésére</li>
          <li>- a munkahely és a munkafolyamat veszélyeire,</li>
          <li>
            - a munkavégzés során használt eszközök, gépek használatára, baleseti
            veszélyforrásaikra, kezelésükre
          </li>
          <li>- orvosi vizsgálatok rendjére, szabályzására</li>
          <li>
            - egyéni védőeszközök, munkaruha használatára, juttatására,
            szabályozásra,
          </li>
          <li>- a munkavégzás során betartandó előírásokra</li>
          <li>
            - a baleset megelőzési feladatokra, baleset esetén teendő feladatokra
          </li>
          <li>- az elsősegélynyújtás módjára</li>
          <li>- a közlekedés szabályaira</li>
          <li>- munkakörömmel kapcsolatos biztonsági szabályzat ismertetésére</li>
          <li>- kézi anyagmozgatás szabályaira,</li>
          <li>- létrák, használatára</li>
          <li>
            - munkakörömmel kapcsolatos munkáltatói utasítások ismertetésére
          </li>
          <li>- dohányzással kapcsolatos jogszabályi előírásokra</li>
          <li>- a munkavédelmi előírásokra megszegésének következményeire.</li>
        </ul>
        <p>
          Kijelentem, hogy a munkakörömmel kapcsolatos munkavádelmi előírásokat,
          eszközök, gépek használatát
          ismerem, azt munkavégzésem során betartom.
        </p>
        <p class="datum">Budapest,<span> ...................................................</span> </p>
      </article>
      <section>
        <p class="alairas">...................................................<br>okatást végző aláírása</p>
        <p class="alairas"><span>...................................................<br>munkavállaló aláírása</span></p>
      </section>
        </div>
        <input type="submit" value="Word exportálása" onclick="Export2Word('export', 'melleklet_6');" id="gomb">
        <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb"> 
    </main>
  </body>
</html>
<?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/melleklet6.blade.php ENDPATH**/ ?>