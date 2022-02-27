@extends('layouts.szerkezet')
@section('head')
    <script src="js/melleklet.js"></script>
@endsection
@section('tartalom')


 <table class="table">
    <thead class="thead-light">
      <tr>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet1" target="_blank" data-toggle="modal" data-target="#modalLoginForm">Melleklet 1</a></td>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet2" target="_blank">Melleklet 2</a></td>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet3" target="_blank">Melleklet 3</a></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet4" target="_blank">Melleklet 4</a></td>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet5" target="_blank">Melleklet 5</a></td>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet6" target="_blank">Melleklet 6</a></td>
      </tr>
      <tr>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 7"> </td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 8"> </td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 9"> </td>
      </tr>
      <tr>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet10" target="_blank">Melleklet 10</a></td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Új melléklet"> </td>
        <td> </td>
      </tr>
    </tbody>
  </table>

  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Dolgozó nevének kiválasztása</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/melleklet1" method="get">

                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="modal-body mx-3 text-center">
                            
                          <select class="alkalmazottNevek">
                            @foreach ($alkalmazotts as $alkalmazott)
                              <option value="{{ $alkalmazott->id }}">{{ $alkalmazott->nev }}</option>
                            @endforeach
                          </select>
                            
                        </div>
                        <div class="ment text-center" style="padding: 10px">
                            <input class="btn btn-dark" type="submit" id="mentes" value="Mentés">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
  
  @endsection