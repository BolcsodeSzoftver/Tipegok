@extends('layouts.UjdolgozoSzerkezet')
@section('UjdolgozoTartalom')
    <form action="/ujdolgozo" method="post">
        @csrf
        <div class="t1">
            <div class="row">
                <div class="col-6" id="munkalatoNeve">
                    <h6>Munkáltató neve</h6>
                    <select class="custom-select" name="bolcsodeID" id="bolcsode">
                        @foreach ($bolcsiID as $bolcsode)
                            <option id="bolcsode" value="{{ $bolcsode->id }}">{{ $bolcsode->nev }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row" class="userId">
                <div class="col-6" id="munkalatoNeve">
                    <input type="text" id="form8Example1" class="form-control userId" name="userID" value={{Auth::user()->id}} />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">Teljes név</label>
                        <input type="text" id="form8Example1" class="form-control" name="nev" />

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label for="telefonszam">Telefonszám:</label>
                        <input type="text" class="form-control" id="telefonszam" name="telefonszam"
                            placeholder="+36301234567" required="required">
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example2">Születési név</label>
                        <input type="text" id="form8Example2" class="form-control" name="szulNev" />

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example2">Anyja neve</label>
                        <input type="text" id="form8Example2" class="form-control" name="anyjaNeve" />
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">Születési hely</label>
                        <input type="text" id="form8Example1" class="form-control" name="szulHely" />

                    </div>
                </div>
                <div class="col">
                    <label class="form-label" for="form8Example1">Születési idő</label>
                    <input type="date" class="form-control" id="szulIdo" name="szulIdo">
                </div>
                <div class="col-4">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">Állam polgárság</label>
                        <input type="text" id="form8Example1" class="form-control" name="allPolgarsag" />
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4">
                    <p>Nem</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="no" id="no" value="N">
                        <label class="form-check-label" for="no">Nő</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ferfi" id="ferfi" value="F">
                        <label class="form-check-label" for="ferfi">Férfi</label>
                    </div>
                </div>
            </div>
        </div>


        <div class="t2">
            <label class="form-label" for="form8Example1">Állandó lakhely</label>
            <div class="row">
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label>Város</label>
                        <input name="allandoLakhely" type="text" class="form-control" id="validationTooltip03"
                            placeholder="Város" required />
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Utca</label>
                        <input name="allandoLakhely" type="text" class="form-control" id="validationTooltip04"
                            placeholder="Utca" required />
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Irányítószám</label>
                        <input name="allandoLakhely" type="text" class="form-control" id="validationTooltip05"
                            placeholder="Irányítószám" required />
                    </div>
                </div>
            </div>
            <hr />
            <label class="form-label" for="form8Example1">Tartózkodási hely</label>
            <div class="row">
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label>Város</label>
                        <input name="tartozkodasiHely" type="text" class="form-control" id="validationTooltip03"
                            placeholder="Város" required />
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Utca</label>
                        <input name="tartozkodasiHely" type="text" class="form-control" id="validationTooltip04"
                            placeholder="Utca" required />
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Irányítószám</label>
                        <input name="tartozkodasiHely" type="text" class="form-control" id="validationTooltip05"
                            placeholder="Irányítószám" required />
                    </div>
                </div>
            </div>
        </div>


        <div class="t3">
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form8Example3" class="form-control" name="adoazonJel" />
                        <label class="form-label" for="form8Example3">Adóazonósító</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form8Example4" class="form-control" name="tajszam" />
                        <label class="form-label" for="form8Example4">Tajszám</label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <input type="nev" id="form8Example1" class="form-control" name="tizenhatAlattiGyermek" />
                        <label class="form-label" for="form8Example1">16 éven aluli gyermekek száma</label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form8Example3" class="form-control" name="bakszamlaSzam" />
                        <label class="form-label" for="form8Example3">Bankszámla szám</label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4">
                    <p>Házas</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="igen" id="igen" value="i">
                        <label class="form-check-label" for="igen">igen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nem" id="nem" value="n">
                        <label class="form-check-label" for="nem">nem</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="allapot">
            <input type="text" id="form8Example3" class="form-control" name="allapot" value="0" />
            <label class="form-label" for="form8Example3">Állapot</label>
        </div>
        <button type="submit" name="mentes" id="mentes">Mentés</button>
    </form>
@endsection
