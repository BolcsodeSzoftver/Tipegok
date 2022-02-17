

@extends('layouts.UjdolgozoSzerkezet')
@section('UjdolgozoTartalom')
    <div class="row">
        
        <div class="col-6">
            <div class="form-outline">
                <input type="text" id="form8Example1" class="form-control" name="nev"/>
                <label class="form-label" for="form8Example1">Teljes név</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form8Example2" class="form-control" name="szul_nev"/>
                <label class="form-label" for="form8Example2">Születési név</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form8Example2" class="form-control" name="anyja_neve"/>
                <label class="form-label" for="form8Example2">Anyja neve</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-4">
            <div class="form-outline">
                <input type="text" id="form8Example1" class="form-control" name="szul_hely"/>
                <label class="form-label" for="form8Example1">Születési hely</label>
            </div>
        </div>
        <div class="col">
            <input id="datepicker" width="276" name="szul_ido"/>
            <script>
                $('#datepicker').datepicker({
                    uiLibrary: 'bootstrap4'
                });
            </script>
            <label class="form-label" for="form8Example1">Születési idő</label>
        </div>
        <div class="col-4">
            <div class="form-outline">
                <input type="text" id="form8Example1" class="form-control" name="all_polgarsag"/>
                <label class="form-label" for="form8Example1">Állam polgárság</label>
            </div>
        </div>
    </div>
    </div>
    <hr />
    <div class="row">
       <!--  <div class="col">
            <div class="form-outline">
                <input type="email" id="form8Example1" class="form-control" name=""/>
                <label class="form-label" for="form8Example1">Email cím</label>
            </div>
        </div> -->
        <div class="col">
            <div class="form-outline">
                <input type="tel" id="form8Example2" class="form-control" name="telefonszam"/>
                <label class="form-label" for="form8Example2">Telefonszám</label>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <label class="form-label" for="form8Example4">Nem</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nem" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Nő</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nem" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Férfi</label>
            </div>
        </div>
    </div>
@endsection