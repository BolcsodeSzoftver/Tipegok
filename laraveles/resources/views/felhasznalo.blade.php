@extends('layouts.szerkezet')
@section('head')
@endsection
@section('tartalom')

<div>
    <h3>Felhasználók</h3>
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th></th>
            <th></th>
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
            @if($f->jogosultsags==1 and $f->jogosultsags==$a->id and $f->users == $u->id)
                <tr>
                  <td class="modosit">
			                  <button class="btn btn-primary" id="modositadat" type="button" data-toggle="modal"
				                      data-target="#exampleModalLong">
				                    <i class='fa fa-edit'></i>
			                  </button>
		                </td>
	                  	<td class="torol">
			                    <button class="btn btn-primary" id="toroladat" type="button">
				                  <i class="fa fa-trash"></i>
			                </button>
		                </td>
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