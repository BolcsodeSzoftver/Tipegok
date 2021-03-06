<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bölcsőde adat</title>
</head>
<body>
     <!-- Modal -->
     <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLongTitle">Bölcsőde adatai</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="modositUrlap">
                     <div class="row">
                         <div class="col">
                             <div class="form-outline" id="idB">
                                 <input type="text" id="id" class="form-control" readonly />
                                 <label class="form-label" for="id">Id</label>
                             </div>
                             <div class="form-outline">
                                 <input type="text" id="cim" class="form-control" readonly />
                                 <label class="form-label" for="cim">Cím</label>
                             </div>
                         </div>
                         <div class="col">
                             <div class="form-outline">
                                 <input type="text" id="nev" class="form-control" readonly />
                                 <label class="form-label" for="nev">Név</label>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col">
                             <div class="form-outline">
                                 <input type="text" id="agazatiAzon" class="form-control" readonly />
                                 <label class="form-label" for="agazatiAzon">Ágazati azonosító</label>
                             </div>
                         </div>
                         <div class="col">
                             <div class="form-outline">
                                 <input type="text" id="feorAzon" class="form-control" readonly />
                                 <label class="form-label" for="feorAzon">FEOR azonosító</label>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col">
                             <div class="form-outline">
                                 <input type="text" id="szgyfKod" class="form-control" readonly />
                                 <label class="form-label" for="szgyfKod">SZGYF kód</label>
                             </div>
                         </div>
                         <div class="col">
                             <div class="form-outline">
                                 <input type="number" id="ferohelyekSzama" class="form-control" readonly />
                                 <label class="form-label" for="ferohelyekSzama">Férőhelyek száma</label>
                             </div>
                         </div>
                         <div class="col">
                             <div class="form-outline">
                                 <input type="text" id="agazatiPotlek" class="form-control" readonly />
                                 <label class="form-label" for="agazatiPotlek">Ágazati pótlék</label>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>


             <div class="modal-footer">
                 <div class="adatModositEnged">
                     <button type="button" class="btn btn-primary">Adatok módosítása</button>
                 </div>
                 <div class="col">
                     <div class="form-outline">
                         <button class="btn btn-primary" id="Ujmodositadat" type="button">
                             Mentés
                         </button>
                     </div>
                 </div>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
             </div> 
         </div>
     </div>
 </div>
    
</body>
</html><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/layouts/bolcsodeAdatUrlap.blade.php ENDPATH**/ ?>