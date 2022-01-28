@extends('layouts.szerkezet')
@section('head')
    <link rel="stylesheet" href="css/bolcsiadat.css" />
@endsection
@section('tartalom')


<h3>Doldozó adatai</h3>
<button type="button" class="btn btn-primary btn-lg" id="jovhagyas">
  Jóváhagyásra váró dolgozók
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Név</th>
      <th scope="col">E-mail</th>
      <th scope="col">Cím</th>
      <th scope="col">Telefonszám</th>
      <th scope="col">Műveletek</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>
        <i
          class="fa fa-pencil-square-o"
          style="font-size: 30px; margin: 10px"
          id="modositD"
        ></i>
        <i
          class="fa fa-envelope"
          style="font-size: 30px; margin: 10px"
        ></i>
        <i
          class="fa fa-ellipsis-h"
          style="font-size: 30px; margin: 10px"
        ></i>
      </td>
    </tr>
    <tr>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>
        <i
          class="fa fa-pencil-square-o"
          style="font-size: 30px; margin: 10px"
          id="modositD"
        ></i>
        <i
          class="fa fa-envelope"
          style="font-size: 30px; margin: 10px"
        ></i>
        <i
          class="fa fa-ellipsis-h"
          style="font-size: 30px; margin: 10px"
        ></i>
      </td>
    </tr>
    <tr>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>VALAMI</td>
      <td>
        <i
          class="fa fa-pencil-square-o"
          style="font-size: 30px; margin: 10px"
          id="modositD"
        ></i>
        <i
          class="fa fa-envelope"
          style="font-size: 30px; margin: 10px"
        ></i>
        <i
          class="fa fa-ellipsis-h"
          style="font-size: 30px; margin: 10px"
        ></i>
      </td>
    </tr>
  </tbody>
</table>
<div class="container">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#"><<</a></li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">...</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">10</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">>></a></li>
  </ul>
</div>
<input
  class="btn btn-secondary"
  style="width: 200px"
  type="submit"
  value="Új dolgozó"
/>

@endsection