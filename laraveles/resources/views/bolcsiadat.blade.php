@extends('layouts.szerkezet')
@extends('layouts.torlesMegerosites')
@section('head')
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <script src="js/ajax.js"></script>
    <script src="js/bolcsodeAdatLista.js"></script>
    <script src="js/bolcsodeClass.js"></script>
    <script src="js/bolcsode.js"></script>
    <script src="js/adminSajatAdatMegjelenit.js"></script>
@endsection

@section('tartalom')
    <h3>Bölcsőde adatok</h3>
    <div class="IDk">
        <input type="text" id="userJogosultsag" value="{{ Auth::user()->jogosultsag_id }}">
        <input type="number" id="userID" value="{{ Auth::user()->id }}">
        @foreach ($jogosults as $jogosultsag)
            @if ($jogosultsag->megnevezes == 'admin')
                <input type="number" id="adminID" value="{{ $jogosultsag->id }}">
            @endif
            @if ($jogosultsag->megnevezes == 'szuperadmin')
                <input type="number" id="szuperAdminID" value="{{ $jogosultsag->id }}">
            @endif
        @endforeach
    </div>

    <form class="form" id="bolcsiForm">
        <select class="form-control col-md-4 bolcsiNev">
            <option>Válassz egy fenntartót</option>
            @foreach ($fenntartok as $fenntarto)
                <option value="{{ $fenntarto->id }}">{{ $fenntarto->nev }}</option>
            @endforeach
        </select>

    </form>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Cím</th>
                <th scope="col">Név</th>
                <th scope="col">Ágazati azonosító</th>
                <th scope="col">SZGYF kód</th>
                <th scope="col">Férőhelyek száma</th>
                <th scope="col">FEOR azonosító</th>
                <th scope="col">Ágazati pótlék</th>
            </tr>
        </thead>
    </table>
    <div>
        <button class="btn btn-secondary ujBolcsode">
            <a href="/ujBolcsi" target="_blank" id="ujBolcsi">Új bölcsőde</a>
        </button>
    </div>

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
                            <div class="form-outline">
                                <select  class="form-control fenntartoModosit" name="fenntarto" id="fenntarto">
                                    @foreach ($fenntartok as $fenntarto)
                                        <option id="fenntarto" value="{{ $fenntarto->id }}">{{ $fenntarto->nev }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-outline">
                    <button class="btn btn-dark" id="Ujmodositadat" type="button">
                        Mentés
                    </button>
                </div>


                <div class="modal-footer">
                    <div class="adatModositEnged">
                        <button id="adatokMod" type="button" class="btn btn-primary">Adatok módosítása</button>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                </div>
            </div>
        </div>
    </div>
@endsection
