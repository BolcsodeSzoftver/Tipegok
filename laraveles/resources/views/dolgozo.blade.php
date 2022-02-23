@extends('layouts.szerkezet')
@extends('layouts.torlesMegerosites')
@section('head')
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <script src="js/ajax.js"></script>
    <script src="js/dolgozo.js"></script>
    <script src="js/dolgozoClass.js"></script>
    <script src="js/dolgozoListazas.js"></script>
@endsection
@section('tartalom')
    <h3>Doldozó adatai</h3>
    <?php
    $db = 0;
    ?>
    @foreach ($alkalmazott as $alkalmazott)
        @if ($alkalmazott->allapot == 0)
            <?php
            $db++;
            ?>
        @endif
    @endforeach
    <div class="row">
        <div class="col">
            <input type="text" wire:model="search" name="szo" id="szo" placeholder="Keresés..." />
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary btn-lg" id="jovhagyas">
                Jóváhagyásra váró dolgozók
                @if ($db > 0)
                    : <?php echo $db; ?> <i class="fa fa-bell" style="font-size:24px;color:white"></i>
                @else
                    nincs
                @endif
            </button>
        </div>
    </div>

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
        <tbody>
            @forelse ($alkalmazotts as $data)
                <tr>
                    <td class="modosit">
                        <button class="btn btn-primary modositGomb" id="modositadat" type="button" data-toggle="modal"
                            data-target="#exampleModalLong">
                            <i class='fa fa-edit'></i>
                        </button>
                    </td>
                    <td class="torol">
                        <button class="btn btn-primary" id="toroladat" type="button" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                    <th>{{ $data->nev }}</th>
                    <td class="t1" id="allandoLakhely">{{ $data->allando_lakhely }}</td>
                    <td class="t1" id="telefonszam">{{ $data->telefonszam }}</td>
                    <td class="t1" id="anyjaNev">{{ $data->anyja_neve }}</td>

                    <td class="t2" id="szulN">{{ $data->szul_nev }}</td>
                    <td class="t2" id="szulH">{{ $data->szul_hely }}</td>
                    <td class="t2" id="szulI">{{ $data->szul_ido }}</td>

                    <td class="t3" id="cim">{{ $data->allando_lakhely }}</td>
                    <td class="t3" id="tartHely">{{ $data->tartozkodasi_hely }}</td>

                    <td class="t4" id="taj">{{ $data->tajszam }}</td>
                    <td class="t4" id="adoA">{{ $data->adoazon_jel }}</td>
                    <td class="t4" id="bankSz">{{ $data->banszamla_szam }}</td>

                    <td class="t5" id="nem">{{ $data->nem }}</td>
                    <td class="t5" id="hazas">{{ $data->hazas_e }}</td>
                    <td class="t5" id="gyerek">{{ $data->tizenhat_alatti_gyermek }}</td>
                    <td class="t5" id="polgar">{{ $data->all_polgarsag }}</td>
                </tr>
            @empty
                <tr>
                    <td>
                        <div class="flex justify-center items-center">
                            <span class="font-medium text-cool-gray-400">Nincs ilyen dolgozo</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div>
        {!! $alkalmazotts->links('pagination::bootstrap-4') !!}
    </div>

    <!-- <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ $alkalmazotts->nextPageUrl() }}">Next</a></li>
                
                <li class="page-item"><a class="page-link" href="{{ $alkalmazotts->previousPageUrl() }}">Previous</a></li>
            </ul> -->

    <!-- <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th id="dNev" scope="col">Név</th>
                    
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
              </table> -->

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

                <div class="modal-body">
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
                                        <label class="form-label" for="tizenhatAGy">16 éven aluli gyermekek
                                            száma</label>
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

                        <hr>

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
                            <input class="btn btn-dark" style="width:200px;" type="submit" class="adatMentes"
                                value="Mentés">
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

    <!-- <div class="container">
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
        </div> -->

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
@endsection
