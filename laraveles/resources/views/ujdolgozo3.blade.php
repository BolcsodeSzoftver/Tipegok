@extends('layouts.UjdolgozoSzerkezet')
@section('UjdolgozoTartalom')
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form8Example3" class="form-control" name="adoazon_jel"/>
                <label class="form-label" for="form8Example3">Adóazonósító</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form8Example4" class="form-control" name="tajszam"/>
                <label class="form-label" for="form8Example4">Tajszám</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="nev" id="form8Example1" class="form-control" name="tizenhat_alatti_gyermek"/>
                <label class="form-label" for="form8Example1">16 éven aluli gyermekek száma</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form8Example3" class="form-control" name="banszamla_szam"/>
                <label class="form-label" for="form8Example3">Bankszámla szám</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <div>
                <label class="form-label" for="form8Example1">Házas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hazas_e" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Igen</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hazas_e" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Nem</label>
            </div>
        </div>
    </div>

@endsection