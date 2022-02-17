@extends('layouts.szerkezet')
@section('head')
@endsection
@section('tartalom')

<div>
    <h3>Felhasználók</h3>
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th>Felhasználó név</th>
            <th>Email</th>
            <th>Jogosultság</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          @foreach($felhasznalok as $f)
              @if($f->jogosultsag_id==1)
                <tr>
                    <td>{{ $f->felhasznalo_nev }}</td>
                    <td>{{ $f->email }}</td>
                    <td>{{ $f->jogosultsag_id }}</td>
                </tr>
                @endif
            @endforeach
          </tr>
        </tbody>
      </table>
</div>

@endsection