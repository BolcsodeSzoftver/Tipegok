<div class="modal fade" id="jovahagyasaraVaroDolgozoModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jóváhagyásra váró dolgozók</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body jovahagyasDiv">
                <table class="table table-bordered mb-5" id="tabla">

                    <thead>
                        <tr class="table-active">
                            <th></th>
                            <th scope="col" sortable>Név</th>
                        </tr>
                    </thead>


                    <tbody class="adatokDolgozoAllapot">
                        @if (Auth::user()->isAdmin() or Auth::user()->isSzuperAdmin())
                            @foreach ($alkalmazotts as $data)
                                @php
                                    $kiirasFeltetel = ($data->allapot == 0 and $data->bolcsode_id == Auth::user()->getBolcsodeId());
                                    if (Auth::user()->isSzuperAdmin()) {
                                        $kiirasFeltetel = $data->allapot == 0;
                                    }
                                @endphp
                                @if ($kiirasFeltetel)
                                    <tr class="dolgozo">
                                        <td class="modositAllapot">
                                            <div class="form-outline">
                                                <input type="hidden" id="allapot" class="form-control" name="allapot">
                                            </div>
                                            <button type="submit" name={{ $data->nev }} value="Save"
                                                id={{ $data->id }} data-toggle="modal" data-target="#adatok"
                                                class="btn btn-primary jovahagyasKezd">
                                                <span>&#10003;</span>
                                            </button>
                                        </td>
                                        <td class="nev" id={{ $data->id }}>
                                            {{ $data->nev }}</td>
                                        <td class="allapot" id={{ $data->allapot }}>
                                            {{ $data->allapot }}
                                        </td>
                                        <td class="id" id={{ $data->id }}>
                                            {{ $data->id }}</td>
                                        <td class="bolcsodeIdTd" id={{ $data->id }}>
                                            {{ $data->bolcsode_id }}

                                    </tr>
                                @endif
                            @endforeach
                        @endif

                    </tbody>


                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
            </div>
        </div>
    </div>
</div>


{{-- Űrlap --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" id="adatok">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dolgozó Adatai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/api/alkalmazott" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="urlap">
                        <div id="adatok">
                            <div class="col">
                                <h2 id="nevKiri" style="text-align: center"></h2>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="alkalmazottId" name="alkalmazottId">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="bolcsodeId" name="bolcsodeId">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="bruttoAlapber">Bruttó alapbér</label>
                                    <input type="text" class="form-control" id="bruttoAlapber" name="bruttoAlapber"
                                        value="{{ old('bruttoAlapber') }} 350000">
                                    @error('bruttoAlapber')
                                        <span style="color: red">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="hetiMunkaOra">Heti munkaóra</label>
                                    <input type="text" class="form-control" id="hetiMunkaOra" name="hetiMunkaOra"
                                        value="{{ old('hetiMunkaOra') }} 40">
                                    @error('hetiMunkaOra')
                                        <span style="color: red">{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="besorolasiBetu">Besorolási betű</label><br>
                                    <select id="besorolasiBetu" name="besorolasiBetu"
                                        style="width: 100%; height: 35px; border-radius: 3px;">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                        <option value="I">I</option>
                                        <option value="J">J</option>
                                    </select>
                                    @error('besorolasiBetu')
                                        <span style="color: red">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="besorolasiSzam">Besorolási szám</label>
                                    <input type="text" class="form-control" id="besorolasiSzam" name="besorolasiSzam"
                                        value="{{ old('besorolasiSzam') }} 5">
                                    @error('besorolasiSzam')
                                        <span style="color: red">{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="feorAzonosito">Feor azonosító</label>
                                <input type="text" class="form-control" id="feorAzonosito" name="feorAzonosito"
                                    value="{{ old('feorAzonosito') }} 123">
                                @error('feorAzonosito')
                                    <span style="color: red">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="evesSzabi">Éves szabadság</label>
                                <input type="text" class="form-control" id="evesSzabi" name="evesSzabi"
                                    value="{{ old('evesSzabi') }} 25">
                                @error('evesSzabi')
                                    <span style="color: red">{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="vegzettseg">Végzettség</label>
                                <input type="text" class="form-control" id="vegzettseg" name="vegzettseg"
                                    value="{{ old('vegzettseg') }} Rendszergazda">
                                @error('vegzettseg')
                                    <span style="color: red">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="szgfKod">SZGF kód</label>
                                <input type="text" class="form-control" id="szgfKod" name="szgfKod"
                                    value="{{ old('szgfKod') }} 2345">
                                @error('szgfKod')
                                    <span style="color: red">{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="munkakor">Munkakör</label>
                                <input type="text" class="form-control" id="munkakor" name="munkakor"
                                    value="{{ old('munkakor') }} Rendszergazda">
                                @error('munkakor')
                                    <span style="color: red">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="szSzakkepzet">Szakképzett</label>
                                <input type="text" class="form-control" id="szSzakkepzet" name="szSzakkepzet"
                                    value="{{ old('szSzakkepzet') }} Rendszergazda">
                                @error('szSzakkepzet')
                                    <span style="color: red">{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="belepes">Belépési nap</label>
                                <input type="date" class="form-control" id="belepes" name="belepes"
                                    value="{{ old('belepes') }}">
                                @error('belepes')
                                    <span style="color: red">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <p>Kifizetés módja</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kezpenz" id="kezpenz"
                                        value="készpénz">
                                    <label class="form-check-label" for="kezpenz">Készpénz</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="utalas" id="utalas"
                                        value="Utalás">
                                    <label class="form-check-label" for="utalas">Utalás</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                    <button type="submit" name='submit' value="Saveaa" class="btn btn-primary" data-toggle="modal"
                        id='submit'>
                        ment
                    </button>
            </form>
        </div>

    </div>
</div>
</div>
