@extends('layouts.szerkezet')
@section('head')
    <!-- <style>
        #mentes,
        .ment {
            width: 200px;
            margin: auto;
        }

    </style>
    <script src="js/felhasznalo.js"></script> -->
@endsection
@section('tartalom')
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-active">
                <!-- <th></th>
                <th></th> -->
                <th scope="col">Életkor</th>
                <th scope="col">A</th>
                <th scope="col">B</th>
                <th scope="col">C</th>
                <th scope="col">D</th>
                <th scope="col">E</th>
                <th scope="col">F</th>
                <th scope="col">G</th>
                <th scope="col">H</th>
                <th scope="col">I</th>
                <th scope="col">J</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agazatiPotlek as $agazatiP)
                <tr>
                    <td>{{ $agazatiP->eletkor }}</td>
                    <td>{{ $agazatiP->A }}</td>
                    <td>{{ $agazatiP->B }}</td>
                    <td>{{ $agazatiP->C }}</td>
                    <td>{{ $agazatiP->D }}</td>
                    <td>{{ $agazatiP->E }}</td>
                    <td>{{ $agazatiP->F }}</td>
                    <td>{{ $agazatiP->G }}</td>
                    <td>{{ $agazatiP->H }}</td>
                    <td>{{ $agazatiP->I }}</td>
                    <td>{{ $agazatiP->J }}</td>
                </tr>
            @endforeach
        </thead>
    </table>
@endsection
