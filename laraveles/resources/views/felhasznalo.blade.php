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
            @foreach($admin as $a)
            @foreach($user as $u)
              @if($f->jogosultsag_id==1 and $f->jogosultsag_id==$a->id)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $a->megnevezes }}</td>
                </tr>
                @endif
                @endforeach
              @endforeach
            @endforeach
          </tr>
        </tbody>
      </table>
</div>

@endsection