
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <script src="js/ajax.js"></script>
    <script src="js/dolgozo.js"></script>
    <script src="js/dolgozoClass.js"></script>
    <script src="js/dolgozoListazas.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tartalom'); ?>


<h3>Doldozó adatai</h3>
<button type="button" class="btn btn-primary btn-lg" id="jovhagyas">
  Jóváhagyásra váró dolgozók
</button>
<br>
<ul class="nav nav-tabs">
  <li class="nav-item"><a class="nav-link" id="adatokT1">adatok1</a></li>
  <li class="nav-item"><a class="nav-link" id="adatokT2">adatok2</a></li>
  <li class="nav-item"><a class="nav-link" id="adatokT3">adatok3</a></li>
  <li class="nav-item"><a class="nav-link" id="adatokT4">adatok4</a></li>
  <li class="nav-item"><a class="nav-link" id="adatokT5">adatok5</a></li>
</ul>
<table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Név</th>
            
              <th class="t1" scope="col">Cím</th>
              <th class="t1" scope="col">Telefonszám</th>
              <th class="t1" scope="col">Anyja neve</th>

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
          <tbody >
          <tr class="adatok">
            <td class="modosit">
              <button class="btn btn-primary" id="modositadat" type="button" data-toggle="modal"
                  data-target="#exampleModalLong">
                  <i class='fa fa-edit'></i>
              </button>
          </td>
          <td class="torol">
              <button class="btn btn-primary" id="toroladat" type="button">
                  <i class="fa fa-trash"></i>
              </button>
          </td>
            <td id="nev"></td>
            
              <td class="t1" id="cim"></td>
              <td class="t1" id="tel"></td>
              <td class="t1" id="anyjaNeve"></td>
            
              <td class="t2" id="szulN"></td>
              <td class="t2" id="szulH"></td>
              <td class="t2" id="szulI"></td>
           
              <td class="t3" id="cim"></td>
              <td class="t3" id="tartHely"></td>
            
              <td class="t4"id="taj"></td>
              <td class="t4"id="adoA"></td>
              <td class="t4"id="bankSz"></td>
           
              <td class="t5" id="nem"></td>
              <td class="t5" id="hazas"></td>
              <td class="t5" id="gyerek"></td>
              <td class="t5" id="polgar"></td>
            
          </tr>
        </tbody>
      </table>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Fenntartó adatai</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <button id="urlap1">1</button>
              <button id="urlap2">2</button>
              <div class="modal-body" >
                  <div class="urlap">
                    <div id="adatok1">
                      <div class="row">
                          <div class="col" id="gId">
                              <div class="form-outline">
                                  <input type="text" id="id" class="form-control" readonly>
                                  <label class="form-label" for="id">ID</label>
                              </div>
                          </div>
                          <div class="col">
                              <div class="form-outline">
                                  <input type="text" id="nev" class="form-control" readonly>
                                  <label class="form-label" for="nev">Név</label>
                              </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                                <input type="text" id="anyjaNeve" class="form-control" readonly>
                                <label class="form-label" for="anyjaNeve">Anyja neve</label>
                            </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col">
                          <div class="form-outline">
                              <input type="text" id="szulN" class="form-control" readonly>
                              <label class="form-label" for="szulN">Születési név</label>
                          </div>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                            <input type="text" id="tel" class="form-control" readonly>
                            <label class="form-label" for="tel">Telefonszám</label>
                        </div>
                    </div>
                      </div>
  
                      <div class="row">
                        <div class="col">
                          <div class="form-outline">
                              <input type="text" id="szulH" class="form-control" readonly>
                              <label class="form-label" for="szulH">Születési hely</label>
                          </div>
                      </div>
                      <div class="col">
                          <div class="form-outline">
                              <input type="text" id="szulI" class="form-control" readonly>
                              <label class="form-label" for="szulI">Születési idő</label>
                          </div>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                            <input type="text" id="allPorg" class="form-control" readonly>
                            <label class="form-label" for="allPorg">Államporgárság</label>
                        </div>
                    </div>
                      </div>
  
                      <div class="row">
                        <div class="col">
                          <div class="form-outline">
                              <input type="text" id="tizenhatAGy" class="form-control" readonly>
                              <label class="form-label" for="tizenhatAGy">16 éven aluli gyermekek száma</label>
                          </div>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                            <input type="text" id="nem" class="form-control" readonly>
                            <label class="form-label" for="nem">Nem</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="hazas" class="form-control" readonly>
                            <label class="form-label" for="hazas">Házas</label>
                        </div>
                    </div>
                    </div>
                    </div>

                    <div id="adatok2">
                      <div class="row">
                          <div class="col">
                            <div class="form-outline">
                                <input type="text" id="allandoLak" class="form-control" readonly>
                                <label class="form-label" for="allandoLak">Állandó lakhely</label>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-outline">
                              <input type="text" id="tartHely" class="form-control" readonly>
                              <label class="form-label" for="tartHely">Tartózkodási hely</label>
                          </div>
                      </div>
                    </div>
                      
                    <div class="row">
                      <div class="col">
                        <div class="form-outline">
                            <input type="text" id="adoAzon" class="form-control" readonly>
                            <label class="form-label" for="adoAzon">Adóazonósító</label>
                        </div>
                    </div>
                    <div class="col">
                      <div class="form-outline">
                          <input type="text" id="tajSz" class="form-control" readonly>
                          <label class="form-label" for="tajSz">Tajszám</label>
                      </div>
                  </div>
                  </div>
  
                  <div class="row">
                    <div class="col">
                      <div class="form-outline">
                          <input type="text" id="bankSZ" class="form-control" readonly>
                          <label class="form-label" for="bankSZ">Bankszámla szám</label>
                      </div>
                  </div>
                </div>
                  </div>
                      
                      <div class="ment">
                          <input class="btn btn-dark" style="width:200px;" type="submit" class="adatMentes" value="Mentés">
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

<div class="container">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#"><<</a></li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">...</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">10</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">>></a></li>
  </ul>
</div>
<!-- <input
  class="btn btn-secondary"
  style="width: 200px"
  type="submit"
  value="Új dolgozó"
/> -->
<ul style="list-style-type: none;">
  <li>
    <a class="btn btn-secondary" style="width: 200px; " href="/ujDolgozo" target="_blank">Új dolgozó</a>
  </li>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.szerkezet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kiss Niki\Desktop\Tipegok\laraveles\resources\views/dolgozo.blade.php ENDPATH**/ ?>