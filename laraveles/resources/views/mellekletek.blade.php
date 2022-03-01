@extends('layouts.szerkezet')
@section('head')
    <script src="js/melleklet.js"></script>
    <script src="js/mellekletAdatok.js"></script>

@endsection
@section('tartalom')


 <table class="table">
    <thead class="thead-light">
      <tr>
        <td><a class="btn btn-secondary" style="width: 200px; " href="/melleklet1" target="_blank"  id="melleklet1">Melleklet 1</a></td>
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

  @endsection