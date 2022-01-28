@extends('layouts.szerkezet')
@section('head')
<script src="js/ajax.js"></script>

    <link rel="stylesheet" href="css/fennt.css"/>
    <script src="js/fenntClass.js"></script>
    <script src="js/fennt.js"></script>
@endsection
@section('tartalom')

          <h3>Fenntartó adatok</h3>
          <div class="fenntUrlap"></div>
          <div class="urlap" style="display: none;">
          <div class="row">
            <div class="col" id="fId">
              <div class="form-outline">
                <input type="text" id="id" class="form-control">
                <label class="form-label" for="id">ID</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="nev" class="form-control">
                <label class="form-label" for="nev">Név</label>
              </div>
            </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="kepv" class="form-control">
                  <label class="form-label" for="kepv">Képviselő</label>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="megye" class="form-control">
                <label class="form-label" for="megye">Megye</label>
              </div>
            </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="szekh" class="form-control">
                  <label class="form-label" for="szekh">Székhely</label>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="agazatia" class="form-control">
                <label class="form-label" for="agazatia">Ágazati azon</label>
              </div>
            </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="adoSzam" class="form-control">
                  <label class="form-label" for="adoSzam">Adószám</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="cegsz" class="form-control">
                  <label class="form-label" for="cegsz">Cégjegyzékszám</label>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="stat" class="form-control">
                <label class="form-label" for="stat">Statisztikaiszám</label>
              </div>
            </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="kormanyHivatal" class="form-control">
                  <label class="form-label" for="kormanyHivatal">Illetékes kormány hivatal</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="bsz" class="form-control">
                  <label class="form-label" for="bsz">Bölcsödék száma</label>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="oNev" class="form-control" value="">
                <label class="form-label" for="oNev">Orvos neve</label>
              </div>
            </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="oTel" class="form-control" value="">
                  <label class="form-label" for="oTel">Orvos telefonszáma</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="oCim" class="form-control" value="">
                  <label class="form-label" for="oCim">Orvos címe</label>
                </div>
              </div>
          </div>
          <div id="ment">
            <input class="btn btn-dark" style="width:200px" type="submit" id="adatMentes" value="Mentés">
          </div>
        </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Név</th>
                <th scope="col">Képviselő</th>
                <th scope="col">Megye</th>
                <th scope="col">Székhely</th>
                <th scope="col">Ágazati azonosító</th>
                <th scope="col">Adószám</th>
                <th scope="col">Cégjegyzékszám</th>
                <th scope="col">Statisztikaiszám</th>
                <th scope="col">Illetékes kormány hivatal</th>
                <th scope="col">Bölcsödék száma</th>
                <th scope="col">Orvos neve</th>
                <th scope="col">Orvos telefonszáma</th>
                <th scope="col">Orvos címe</th>
              </tr>
            </thead>
            <tbody id="adat"></tbody>
            <tbody id="sablon">
              <tr class="adatok">
                <td class="nev"></td>
                <td class="kepviselo"></td>
                <td class="megye"></td>
                <td class="szekhely"></td>
                <td class="agazatiA"></td>
                <td class="adoszam"></td>
                <td class="cegjSzam"></td>
                <td class="statSzam"></td>
                <td class="kHivatal"></td>
                <td class="bolcsiSzam"></td>
                <td class="oNev"></td>
                <td class="oTel"></td>
                <td class="oCim"></td>
              </tr>       
            </tbody>    
             </table>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" id="modositadat" type="button">Módosítás</button>
          </div>


@endsection