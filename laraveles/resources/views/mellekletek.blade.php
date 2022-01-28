@extends('layouts.szerkezet')
@section('tartalom')


 <table class="table">
    <thead class="thead-light">
      <tr>
        <td> <input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 1"> </td>
        <td> <input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 2"> </td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 3"> </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 4"> </td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 5"> </td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 6"> </td>
      </tr>
      <tr>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 7"> </td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 8"> </td>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 9"> </td>
      </tr>
      <tr>
        <td><input class="btn btn-dark" style="width:200px" type="submit" value="Melléklet 10"> </td>
        <td><input class="btn btn-secondary" style="width:200px" type="submit" value="Új melléklet"> </td>
        <td> </td>
      </tr>
    </tbody>
  </table>
  
  @endsection