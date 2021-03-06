<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/bolcsiadat.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/bolcsodeAdatLista.js"></script>
    <script src="js/bolcsodeClass.js"></script>
    <script src="js/bolcsode.js"></script>
    <script src="js/fenntListazas.js"></script>
    <script src="js/fenntClass.js"></script>
    <script src="js/fennt.js"></script>
    <title>Új bölcsőde</title>
</head>

<body>
    <main>
        <form action="/ujBolcsi" method="POST">
            @csrf
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Bölcsőde adatai
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="modositUrlap">
                            <div class="row">
                                <div class="col">

                                    <div class="form-outline">
                                        <select  name="fennt_id"  class="form-control bolcsiNev">
                                            <option>Válassz fenntartót</option>
                                            @foreach ($fenntartokId as $fenntarto)
                                                <option value="{{ $fenntarto->id }}">
                                                    {{ $fenntarto->nev }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        @error('fennt_id')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror


                                    </div>
                                </div>
                                <div class="col">

                                    <div class="form-outline">
                                        <select class="form-control bolcsiNev" name="bolcsode_admin">
                                            <option>Válassz admint</option>
                                            @foreach ($megjelenitAdminNev as $adminNev)
                                                @if ($adminNev->jogosultsag_id === 1)
                                                    <option value="{{ $adminNev->id }}">
                                                        {{ $adminNev->name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <br>
                                        @error('bolcsode_admin')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="cim" class="form-control" name="cim"
                                            value="{{ old('cim') }}" />


                                        <label class="form-label" for="cim">Cím</label>
                                        <br>
                                        @error('cim')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="nev" class="form-control" name="nev"
                                            value="{{ old('nev') }}" />
                                        <label class="form-label" for="nev">Név</label>
                                        <br>
                                        @error('nev')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="agazatiAzon" class="form-control" name="agazati_azon"
                                            value="{{ old('agazati_azon') }}" />
                                        <label class="form-label" for="agazatiAzon">Ágazati
                                            azonosító</label>
                                        <br>
                                        @error('agazati_azon')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="feorAzon" class="form-control" name="feor"
                                            value="{{ old('feor') }}" />
                                        <label class="form-label" for="feorAzon">FEOR
                                            azonosító</label>
                                        <br>
                                        @error('feor')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="szgyfKod" class="form-control" name="szgyf_kod"
                                            value="{{ old('szgyf_kod') }}" />
                                        <label class="form-label" for="szgyfKod">SZGYF
                                            kód</label>
                                        <br>
                                        @error('szgyf_kod')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="number" id="ferohelyekSzama" class="form-control"
                                            name="ferohelyek_szama" value="{{ old('ferohelyek_szama') }}" />
                                        <label class="form-label" for="ferohelyekSzama">Férőhelyek száma</label>
                                        <br>
                                        @error('ferohelyek_szama')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="agazatiPotlek" class="form-control"
                                            name="agazati_potlek" value="{{ old('agazati_potlek') }}" />
                                        <label class="form-label" for="agazatiPotlek">Ágazati pótlék</label>
                                        <br>
                                        @error('agazati_potlek')
                                            <span style="color: red">{{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <div class="col">
                            <div class="form-outline">
                                <button class="btn btn-dark" id="ujBolcsi" type="submit">
                                    Mentés
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

    </main>
</body>

</html>
