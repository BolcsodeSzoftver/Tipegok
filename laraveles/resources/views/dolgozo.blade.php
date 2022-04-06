@extends('layouts.szerkezet')
@extends('layouts.torlesMegerositesDolgozo')
@extends('layouts.jovahagyasraVaroDolgozok')
@section('head')
    <link rel="stylesheet" href="css/dolgozo.css" />
    <script src="js/ajax.js"></script>
    <script src="js/dolgozo.js"></script>
    <script src="js/dolgozoModosit.js"></script>
    <script src="js/adminSajatAdatMegjelenit.js"></script>
    <script src="js/munkakoriAdatokModosit.js"></script>
    <script src="js/adminSajatBizonyitvany.js"></script>
@endsection
@section('tartalom')
    <div class=row>
        <h3>Dolgozó adatai</h3>


    </div>
    <div class=row>
        <div class="form-group">
            <form action="/dolgozo" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Keresés" name="keresesDolgozo">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" id="keresesGomb">
                            <i class="fa fa-search"></i>
                        </button>
                        <button class="btn btn-secondary" type="submit" id="keresesToresGomb">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary btn-lg jovhagyas" id="jovahagyasGomb" data-toggle="modal"
                data-target="#jovahagyasaraVaroDolgozoModal" sytle="float:left;">
                Jóváhagyásra váró dolgozók :
                @if ($db > 0)
                    <?php echo $db; ?> <i class="fa fa-bell" style="font-size:24px;color:white"></i>
                @else
                    nincs
                @endif
            </button>
        </div>
    </div>
    <div class=row>
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
                                            <button wire:click="edit({{ $data->id }})"
                                                class="btn btn-primary modositGomb" id={{ $data->id }} type="submit"
                                                data-toggle="modal" data-target="#exampleModalLong">
                                                <i class='fa fa-edit'></i>
                                            </button>
                                        </td>
                                        <td class="torol">
                                            <button class="btn btn-primary dolgozoTorles" id={{ $data->id }}
                                                type="button" data-toggle="modal" data-target="#modalDolgozo">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                        <td class="egyeb">
                                            <div class="dropdown">
                                                <button class="btn btn-primary">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                                <div class="dropdown-c">
                                                    <a class="hover dropdown-item bizonyitvanyokGomb" href="#"
                                                        id={{ $data->id }} data-toggle="modal"
                                                        data-target="#bizonyitvanyModal">Bizonyitvanyok</a>
                                                    <a class="hover dropdown-item dolgozoGomb" href="#"
                                                        id={{ $data->id }} data-toggle="modal"
                                                        data-target="#dolgozoModal">Munkakőri adatok</a>
                                                    <a class="hover dropdown-item orvosiAdatokGomb" href="#"
                                                        id={{ $data->id }} data-toggle="modal"
                                                        data-target="#orvosiModal">Orvosi adatok</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="nev" id={{ $data->id }}>{{ $data->nev }}</td>
                                        <td class="t1 allandoLakhely" id={{ $data->id }}>{{ $data->allando_lakhely }}
                                        </td>
                                        <td class="t1 telefonszam" id={{ $data->id }}>{{ $data->telefonszam }}</td>
                                        <td class="t1 anyjaNev" id={{ $data->id }}>{{ $data->anyja_neve }}</td>
                                        <td class="t2 szulN" id={{ $data->id }}>{{ $data->szul_nev }}</td>
                                        <td class="t2 szulH" id={{ $data->id }}>{{ $data->szul_hely }}</td>
                                        <td class="t2 szulI" id={{ $data->id }}>{{ $data->szul_ido }}</td>
                                        <td class="t3 cim" id={{ $data->id }}>{{ $data->allando_lakhely }}
                                        </td>
                                        <td class="t3 tartHely" id={{ $data->id }}>{{ $data->tartozkodasi_hely }}
                                        </td>
                                        <td class="t4 taj" id={{ $data->id }}>{{ $data->tajszam }}</td>
                                        <td class="t4 adoA" id={{ $data->id }}>{{ $data->adoazon_jel }}</td>
                                        <td class="t4 bankSz" id={{ $data->id }}>{{ $data->banszamla_szam }}
                                        </td>
                                        <td class="t5 nem" id={{ $data->id }}>{{ $data->nem }}</td>
                                        <td class="t5 hazas" id={{ $data->id }}>{{ $data->hazas_e }}</td>
                                        <td class="t5 gyerek" id={{ $data->id }}>
                                            {{ $data->tizenhat_alatti_gyermek }}
                                        </td>
                                        <td class="t5 polgar" id={{ $data->id }}>{{ $data->all_polgarsag }}
                                        </td>
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
                                                            type="submit" data-toggle="modal"
                                                            data-target="#exampleModalLong">
                                                            <i class='fa fa-edit'></i>
                                                        </button>
                                                    </td>
                                                    <td class="torol">
                                                        <button class="btn btn-primary dolgozoTorles"
                                                            id={{ $data->id }} type="button" data-toggle="modal"
                                                            data-target="#modalDolgozo">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                    <td class="egyeb">
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-bars"></i>
                                                            </button>
                                                            <div class="dropdown-c">
                                                                <a class="hover dropdown-item bizonyitvanyokGomb" href="#"
                                                                    id={{ $data->id }} data-toggle="modal"
                                                                    data-target="#bizonyitvanyModal">Bizonyitvanyok</a>
                                                                <a class="hover dropdown-item dolgozoGomb" href="#"
                                                                    id={{ $data->id }} data-toggle="modal"
                                                                    data-target="#dolgozoModal">Munkaköri adatok</a>
                                                                <a class="hover dropdown-item orvosiAdatokGomb" href="#"
                                                                    id={{ $data->id }} data-toggle="modal"
                                                                    data-target="#orvosiModal">Orvosi adatok</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nev" id={{ $data->id }}>{{ $data->nev }}
                                                    </td>
                                                    <td class="t1 allandoLakhely" id={{ $data->id }}>
                                                        {{ $data->allando_lakhely }}
                                                    </td>
                                                    <td class="t1 telefonszam" id={{ $data->id }}>
                                                        {{ $data->telefonszam }}</td>
                                                    <td class="t1 anyjaNev" id={{ $data->id }}>
                                                        {{ $data->anyja_neve }}</td>

                                                    <td class="t2 szulN" id={{ $data->id }}>
                                                        {{ $data->szul_nev }}</td>
                                                    <td class="t2 szulH" id={{ $data->id }}>
                                                        {{ $data->szul_hely }}</td>
                                                    <td class="t2 szulI" id={{ $data->id }}>
                                                        {{ $data->szul_ido }}</td>

                                                    <td class="t3 cim" id={{ $data->id }}>
                                                        {{ $data->allando_lakhely }}
                                                    </td>
                                                    <td class="t3 tartHely" id={{ $data->id }}>
                                                        {{ $data->tartozkodasi_hely }}
                                                    </td>

                                                    <td class="t4 taj" id={{ $data->id }}>
                                                        {{ $data->tajszam }}</td>
                                                    <td class="t4 adoA" id={{ $data->id }}>
                                                        {{ $data->adoazon_jel }}</td>
                                                    <td class="t4 bankSz" id={{ $data->id }}>
                                                        {{ $data->banszamla_szam }}
                                                    </td>

                                                    <td class="t5 nem" id={{ $data->id }}>{{ $data->nem }}
                                                    </td>
                                                    <td class="t5 hazas" id={{ $data->id }}>
                                                        {{ $data->hazas_e }}</td>
                                                    <td class="t5 gyerek" id={{ $data->id }}>
                                                        {{ $data->tizenhat_alatti_gyermek }}
                                                    </td>
                                                    <td class="t5 polgar" id={{ $data->id }}>
                                                        {{ $data->all_polgarsag }}
                                                    </td>

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

    </div>
    <div class="row">
            <div class="col">
                <button class="btn btn-secondary regisztracio">
                    <a href="/felhasznaloRegisztracio" target="_blank" id="ujDolgozo">Új dolgozó regisztrálása</a>
                </button>
            </div>
            <div>
                {!! $alkalmazotts->links('pagination::bootstrap-4') !!}
            </div>
        </div>


        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Dolgozó adatai</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="api/alkalmazott/0" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link dolgozoModalAdatok1" href="#">1</a></li>
                                <li class="nav-item"><a class="nav-link dolgozoModalAdatok2" href="#">2</a></li>
                            </ul>
                            <input type="hidden" id="dolgozoId" class="form-control" name="id" readonly>
                            <div class="urlap">
                                <div class="adatok1">
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
                                                <input type="text" id="allPorg" class="form-control" name="allPorg"
                                                    readonly>
                                                <label class="form-label" for="allPorg">Államporgárság</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="tizenhatAGy" class="form-control"
                                                    name="tizenhatAGy" readonly>
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
                                    <hr>
                                </div>

                                <div class="adatok2">
                                    <h5></h5>
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
                                                <input type="text" id="adoAzon" class="form-control" name="adoAzon"
                                                    readonly>
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
                                                <input type="text" id="bankSZ" class="form-control" name="bankSZ"
                                                    readonly>
                                                <label class="form-label" for="bankSZ">Bankszámla szám</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
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
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal: bizonyitvany -->
        <div class="modal fade" id="bizonyitvanyModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Dolgozó bizonyitvány(ok)
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div id="bizAdatokDolgozo"></div>
                        <div style="width: 220px; margin: auto;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal: munkaber.. -->
        <div class="modal fade" id="dolgozoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Dolgozó adatai:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="/api/dolgozo/0" method="post" class="modositDolgozo">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="modal-body">
                            <input type="hidden" id="dolgozoId" class="form-control" name="id" readonly>
                            <div class="urlap">

                                <div id="dolgozoAdatok"></div>

                                <div class="ment">
                                    <input class="btn btn-dark" type="submit" id="mentes" value="Mentés">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="adatModositEnged">
                                <button type="button" class="btn btn-primary">Adatok
                                    módosítása</button>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal: orvosi adatok -->
        <div class="modal fade" id="orvosiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Dolgozó orvosi adatok
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div id="orvosiAdatok"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                    </div>

                </div>
            </div>
        </div>



        <div class="modal fade" id="dokumentumokModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitleDokumentumok" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" id="adatokKepT1">Gyakorlati igazolás</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="adatokKepT2">OEP könyv másolat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="adatokKepT3">Egyéb dokumentumok</a>
                                </li>
                            </ul>
                        </div>


                        <div id="dokumentumok" class="dokumentumok">

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- modal : nagykep -->
        <div class="modal fade" id="dokumentumokNagyKepModal" tabindex="-1" role="dialog"
            aria-labelledby="DokumentumokNagykep" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">

                        <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <img src="" class="nagyKep" style="width: 100%;">
                        <a href="" id="letoltGomb" download><button id="letoltKep">Letöltés</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
