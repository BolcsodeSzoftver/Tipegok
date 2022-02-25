@extends('layouts.szerkezet')
@extends('layouts.torlesMegerositesDolgozo')
@extends('layouts.jovahagyasraVaroDolgozok')
@section('head')
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <script src="js/dolgozo.js"></script>
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
    <div class=row>
        <div class="col">
            <input type="text" wire:model="search" name="szo" id="szo" placeholder="Keresés..." />
        </div>   
        <div class="col">
            <button type="button" class="btn btn-primary btn-lg jovhagyas" id="kiscica" data-toggle="modal"
                data-target="#exampleModal" sytle="float:left;">
                Jóváhagyásra váró dolgozók :
                @if ($db > 0)
                    <?php echo $db; ?> <i class="fa fa-bell" style="font-size:24px;color:white"></i>
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


        @foreach ($jogosultsags as $jogosultsag)
            @if ($jogosultsag->megnevezes == 'szuperadmin')
                @if (Auth::user()->jogosultsag_id == $jogosultsag->id)
                    <tbody class="adatokDolgozo">
                        @foreach ($alkalmazotts as $data)
                            @if ($data->allapot === 1)
                                <tr class="dolgozo">
                                    <td class="modosit">
                                        <button wire:click="edit({{ $data->id }})" class="btn btn-primary modositGomb"
                                            id={{ $data->id }} type="submit" data-toggle="modal"
                                            data-target="#exampleModalLong">
                                            <i class='fa fa-edit'></i>
                                        </button>
                                    </td>
                                    <td class="torol">
                                        <button class="btn btn-primary dolgozoTorles" id={{ $data->id }} type="button"
                                            data-toggle="modal" data-target="#modalDolgozo">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                    <td class="nev" id={{ $data->id }}>{{ $data->nev }}</td>
                                    <td class="t1 allandoLakhely" id={{ $data->id }}>{{ $data->allando_lakhely }}</td>
                                    <td class="t1 telefonszam" id={{ $data->id }}>{{ $data->telefonszam }}</td>
                                    <td class="t1 anyjaNev" id={{ $data->id }}>{{ $data->anyja_neve }}</td>

                                    <td class="t2 szulN" id={{ $data->id }}>{{ $data->szul_nev }}</td>
                                    <td class="t2 szulH" id={{ $data->id }}>{{ $data->szul_hely }}</td>
                                    <td class="t2 szulI" id={{ $data->id }}>{{ $data->szul_ido }}</td>

                                    <td class="t3 cim" id={{ $data->id }}>{{ $data->allando_lakhely }}</td>
                                    <td class="t3 tartHely" id={{ $data->id }}>{{ $data->tartozkodasi_hely }}
                                    </td>

                                    <td class="t4 taj" id={{ $data->id }}>{{ $data->tajszam }}</td>
                                    <td class="t4 adoA" id={{ $data->id }}>{{ $data->adoazon_jel }}</td>
                                    <td class="t4 bankSz" id={{ $data->id }}>{{ $data->banszamla_szam }}</td>

                                    <td class="t5 nem" id={{ $data->id }}>{{ $data->nem }}</td>
                                    <td class="t5 hazas" id={{ $data->id }}>{{ $data->hazas_e }}</td>
                                    <td class="t5 gyerek" id={{ $data->id }}>
                                        {{ $data->tizenhat_alatti_gyermek }}
                                    </td>
                                    <td class="t5 polgar" id={{ $data->id }}>{{ $data->all_polgarsag }}</td>

                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                @endif
            @elseif ($jogosultsag->megnevezes == 'admin')
                @if (Auth::user()->jogosultsag_id == $jogosultsag->id)
                    @foreach ($bolcsodek as $bolcsode)
                        @if ($bolcsode->bolcsode_admin == Auth::user()->id)
                            <tbody class="adatokDolgozo">
                                @foreach ($alkalmazotts as $data)
                                    @if ($data->allapot === 1)
                                        @if ($bolcsode->id == $data->bolcsode_id)
                                            <tr class="dolgozo">
                                                <td class="modosit">
                                                    <button wire:click="edit({{ $data->id }})"
                                                        class="btn btn-primary modositGomb" id={{ $data->id }}
                                                        type="submit" data-toggle="modal" data-target="#exampleModalLong">
                                                        <i class='fa fa-edit'></i>
                                                    </button>
                                                </td>
                                                <td class="torol">
                                                    <button class="btn btn-primary dolgozoTorles" id={{ $data->id }}
                                                        type="button" data-toggle="modal" data-target="#modalDolgozo">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                                <td class="nev" id={{ $data->id }}>{{ $data->nev }}</td>
                                                <td class="t1 allandoLakhely" id={{ $data->id }}>
                                                    {{ $data->allando_lakhely }}</td>
                                                <td class="t1 telefonszam" id={{ $data->id }}>
                                                    {{ $data->telefonszam }}</td>
                                                <td class="t1 anyjaNev" id={{ $data->id }}>
                                                    {{ $data->anyja_neve }}</td>

                                                <td class="t2 szulN" id={{ $data->id }}>{{ $data->szul_nev }}
                                                </td>
                                                <td class="t2 szulH" id={{ $data->id }}>{{ $data->szul_hely }}
                                                </td>
                                                <td class="t2 szulI" id={{ $data->id }}>{{ $data->szul_ido }}
                                                </td>

                                                <td class="t3 cim" id={{ $data->id }}>
                                                    {{ $data->allando_lakhely }}</td>
                                                <td class="t3 tartHely" id={{ $data->id }}>
                                                    {{ $data->tartozkodasi_hely }}</td>

                                                <td class="t4 taj" id={{ $data->id }}>{{ $data->tajszam }}
                                                </td>
                                                <td class="t4 adoA" id={{ $data->id }}>
                                                    {{ $data->adoazon_jel }}</td>
                                                <td class="t4 bankSz" id={{ $data->id }}>
                                                    {{ $data->banszamla_szam }}</td>

                                                <td class="t5 nem" id={{ $data->id }}>{{ $data->nem }}</td>
                                                <td class="t5 hazas" id={{ $data->id }}>{{ $data->hazas_e }}
                                                </td>
                                                <td class="t5 gyerek" id={{ $data->id }}>
                                                    {{ $data->tizenhat_alatti_gyermek }}
                                                </td>
                                                <td class="t5 polgar" id={{ $data->id }}>
                                                    {{ $data->all_polgarsag }}</td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            </tbody>
                        @endif
                    @endforeach
                @endif
            @endif
        @endforeach


    </table>
    <div>
        {!! $alkalmazotts->links('pagination::bootstrap-4') !!}
    </div>

    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Dolgozó adatai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="api/dolgozo/0" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="modal-body">
                        <input type="hidden" id="dolgozoId" class="form-control" name="id" readonly>
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
                                            <input type="text" id="nev" class="form-control" name="nev" readonly>
                                            <label class="form-label" for="nev">Név</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="anyjaNeve" class="form-control" name="anyjaNeve"
                                                readonly>
                                            <label class="form-label" for="anyjaNeve">Anyja neve</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="szulN" class="form-control" name="szulN" readonly>
                                            <label class="form-label" for="szulN">Születési név</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="tel" class="form-control" name="tel" readonly>
                                            <label class="form-label" for="tel">Telefonszám</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="szulH" class="form-control" name="szulH" readonly>
                                            <label class="form-label" for="szulH">Születési hely</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="szulI" class="form-control" name="szulI" readonly>
                                            <label class="form-label" for="szulI">Születési idő</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="allPorg" class="form-control" name="allPorg" readonly>
                                            <label class="form-label" for="allPorg">Államporgárság</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="tizenhatAGy" class="form-control" name="tizenhatAGy"
                                                readonly>
                                            <label class="form-label" for="tizenhatAGy">16 éven aluli gyermekek
                                                száma</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="nem" class="form-control" name="nem" readonly>
                                            <label class="form-label" for="nem">Nem</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="hazas" class="form-control" name="hazas" readonly>
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
                                            <input value="" type="text" id="allandoLak" class="form-control"
                                                name="allandoLak" readonly>
                                            <label class="form-label" for="allandoLak">Állandó lakhely</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="tartHely" class="form-control" name="tartHely"
                                                readonly>
                                            <label class="form-label" for="tartHely">Tartózkodási hely</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="adoAzon" class="form-control" name="adoAzon" readonly>
                                            <label class="form-label" for="adoAzon">Adóazonósító</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="tajSz" class="form-control" name="tajSz" readonly>
                                            <label class="form-label" for="tajSz">Tajszám</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="bankSZ" class="form-control" name="bankSZ" readonly>
                                            <label class="form-label" for="bankSZ">Bankszámla szám</label>
                                        </div>
                                    </div>
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

            </div>
        </div>
    </div>
    <ul style="list-style-type: none;">
        <li>
            <a class="btn btn-secondary" style="width: 200px; " href="/ujDolgozo" target="_blank">Új dolgozó</a>
        </li>
    </ul>
@endsection
