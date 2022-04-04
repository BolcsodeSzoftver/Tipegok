@extends('layouts.UjdolgozoSzerkezet')

@section('t1')
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
                <input type="text" id="form8Example1" class="form-control userId" name="userID"
                    value={{ Auth::user()->id }} />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="nev">Teljes név</label>
                    <input type="text" id="nev" class="form-control" name="nev" value="{{ old('nev') }}" />
                    @error('nev')
                        <span style="color: red">{{ $message }} </span>
                    @enderror

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label for="telefonszam">Telefonszám:</label>
                    <input type="text" class="form-control" id="telefonszam" name="telefonszam"
                        placeholder="+36/30-111-2222" value="{{ old('telefonszam') }}">
                    @error('telefonszam')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="szul_nev">Születési név</label>
                    <input type="text" id="szulNev" class="form-control" name="szul_nev"
                        value="{{ old('szul_nev') }}" />
                    @error('szulNev')
                        <span style="color: red">{{ $message }} </span>
                    @enderror

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="anyja_neve">Anyja neve</label>
                    <input type="text" id="form8Example2" class="form-control" name="anyja_neve"
                        value="{{ old('anyja_neve') }}" />
                    @error('anyja_neve')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-4">
                <div class="form-outline">
                    <label class="form-label" for="szul_hely">Születési hely</label>
                    <input type="text" id="form8Example1" class="form-control" name="szul_hely"
                        value="{{ old('szul_hely') }}" />
                    @error('szul_hely')
                        <span style="color: red">{{ $message }} </span>
                    @enderror

                </div>
            </div>
            <div class="col">
                <label class="form-label" for="szul_ido">Születési idő</label>
                <input type="date" class="form-control" id="szulIdo" name="szul_ido" value="{{ old('szul_ido') }}">
                @error('szul_ido')
                    <span style="color: red">{{ $message }} </span>
                @enderror
            </div>
            <div class="col-4">
                <div class="form-outline">
                    <label class="form-label" for="all_polgarsag">Állam polgárság</label>
                    <input type="text" id="form8Example1" class="form-control" name="all_polgarsag"
                        value="{{ old('allPolgarsag') }}" />
                    @error('all_polgarsag')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-4">
                <p>Nem</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="no" id="no" value="N" value="{{ old('N') }}">
                    <label class="form-check-label" for="no">Nő</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ferfi" id="ferfi" value="F"
                        value="{{ old('F') }}">
                    <label class="form-check-label" for="ferfi">Férfi</label>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection

@section('t2')
    <div class="t2">
        <label class="form-label" for="form8Example1">Állandó lakhely</label>
        <div class="row">
            <div class="form-row">
                <div class="col-md-5 mb-3">
                    <label>Város</label>
                    <input name="varos" type="text" class="form-control" id="validationTooltip03" placeholder="Város"
                         />
                </div>
                <div class="col-md-2 mb-3">
                    <label>Utca</label>
                    <input name="utca" type="text" class="form-control" id="validationTooltip04" placeholder="Utca"
                         />
                </div>
                <div class="col-md-4 mb-3">
                    <label>Irányítószám</label>
                    <input name="iranyitoSzam" type="text" class="form-control" id="validationTooltip05"
                        placeholder="Irányítószám"  />
                </div>
            </div>
        </div>
        <hr />
        <label class="form-label" for="form8Example1">Tartózkodási hely</label>
        <div class="row">
            <div class="form-row">
                <div class="col-md-5 mb-3">
                    <label>Város</label>
                    <input name="varosTart" type="text" class="form-control" id="validationTooltip03" placeholder="Város"
                         />
                </div>
                <div class="col-md-2 mb-3">
                    <label>Utca</label>
                    <input name="utcaTart" type="text" class="form-control" id="validationTooltip04" placeholder="Utca"
                         />
                </div>
                <div class="col-md-4 mb-3">
                    <label>Irányítószám</label>
                    <input name="iranyitoSzamTart" type="text" class="form-control" id="validationTooltip05"
                        placeholder="Irányítószám"  />
                </div>
            </div>
            <br>
            @error('tartozkodasi_hely')
                <span style="color: red">{{ $message }} </span>
            @enderror
        </div>
    </div>
@endsection

@section('t3')
    <div class="t3">
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="adoazon_jel">Adóazonósító</label>
                    <input type="text" id="form8Example3" class="form-control" name="adoazon_jel"
                        value="{{ old('adoazon_jel') }}" />
                    <br>
                    @error('adoazon_jel')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form8Example4">Tajszám</label>
                    <input type="text" id="form8Example4" class="form-control" name="tajszam"
                        value="{{ old('tajszam') }}" />
                    <br>
                    @error('tajszam')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="tizenhat_alatti_gyermek">16 éven aluli gyermekek száma</label>
                    <input type="nev" id="form8Example1" class="form-control" name="tizenhat_alatti_gyermek"
                        value="{{ old('tizenhat_alatti_gyermek') }}" />
                    <br>
                    @error('tizenhat_alatti_gyermek')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="banszamla_szam">Bankszámla szám</label>
                    <input type="text" id="form8Example3" class="form-control" name="banszamla_szam"
                        value="{{ old('banszamla_szam') }}" />

                    <br>
                    @error('banszamla_szam')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
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
                <br>
            </div>
        </div>
    </div>
@endsection

@section('t4')
    <div class="t4">
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="vegzettseg">végzettség</label>
                    <input type="text" id="vegzettseg" class="form-control" name="vegzettseg"
                        value="{{ old('vegzettseg') }}" />
                    @error('vegzettseg')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="biz_intezmeny_nev">Intézmény neve</label>
                    <input type="text" id="biz_intezmeny_nev" class="form-control" name="biz_intezmeny_nev"
                        value="{{ old('biz_intezmeny_nev') }}" />
                    @error('biz_intezmeny_nev')
                        <span style="color: red">{{ $message }} </span>
                    @enderror

                </div>
            </div>
        </div>
        <hr />
        <div class="row">

            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="pontokszama">Pontok száma</label>
                    <input type="text" id="pontokszama" class="form-control" name="pontokszama"
                        value="{{ old('pontokszama') }}" />
                    @error('pontokszama')
                        <span style="color: red">{{ $message }} </span>
                    @enderror

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="bizonyitvany_szam">Bizonyitvány száma</label>
                    <input type="text" id="bizonyitvany_szam" class="form-control" name="bizonyitvany_szam"
                        value="{{ old('bizonyitvany_szam') }}" />
                    @error('bizonyitvany_szam')
                        <span style="color: red">{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-6">
                <div class="form-outline">
                    <label for="kiadas_datuma">Kiadás dátuma</label>
                    <input type="date" class="form-control" id="kiadas_datuma" name="kiadas_datuma"
                        value="{{ old('kiadas_datuma') }}">
                    @error('kiadas_datuma')
                        <span style="color: red">{{ $message }} </span>
                    @enderror

                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="custom-file-label" for="customFileGyakIg">Gyakorlait igazolás</label>
                    <input type="file" class="custom-file-input" id="customFileGyakIg" name="gyakorlati_igazolas[]"
                        multiple>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="custom-file-label" for="customFileOEP">OEP könyv másolat</label>
                    <input type="file" class="custom-file-input" id="customFileOEP" name="oep_konyv_masolat[]" multiple>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-outline">
                    <label class="custom-file-label" for="customFileDok">Dokumentum feltöltése</label>
                    <input type="file" class="custom-file-input" id="customFileDok" name="dokumentum_feltoltese[]"
                        multiple>
                </div>
            </div>
        </div>
        <button type="submit" name="mentes" id="mentes" class="mentes">Mentés</button>
    </div>
    <div class="allapot">
        <input type="text" id="allapot" class="form-control" name="allapot" value="0" />
        <label class="form-label" for="allapot">Állapot</label>
    </div>
@endsection





@section('UjdolgozoTartalom')
    <form action="/ujdolgozo" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        @yield("t1")
        @yield("t2")
        @yield("t3")
        @yield("t4")




    </form>
@endsection
