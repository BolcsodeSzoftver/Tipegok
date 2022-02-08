@extends('layouts.szerkezet')
@section('head')
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <script src="js/ajax.js"></script>
    <script src="js/dolgozo.js"></script>
    <script src="js/dolgozoClass.js"></script>
    <script src="js/dolgozoListazas.js"></script>
@endsection
@section('tartalom')


<h3>Doldozó adatai</h3>
<button type="button" class="btn btn-primary btn-lg" id="jovhagyas">
  Jóváhagyásra váró dolgozók
</button>

<table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Név</th>
            <th scope="col">Cím</th>
            <th scope="col">Telefonszám</th>
            <th scope="col">Anyja neve</th>
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
            <td class="nev"></td>
            <td class="cim"></td>
            <td class="tel"></td>
            <td class="anyjaNeve"></td>
           <!--  <td> -->
           
              <!-- <i class="fa fa-pencil-square-o" style="font-size: 30px; margin: 10px" class="modositD"></i> -->
              <!-- <i class="fa fa-envelope" style="font-size: 30px; margin: 10px"></i>
              <i class="fa fa-ellipsis-h" style="font-size: 30px; margin: 10px"></i> -->
            </td>
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
<input
  class="btn btn-secondary"
  style="width: 200px"
  type="submit"
  value="Új dolgozó"
/>

@endsection