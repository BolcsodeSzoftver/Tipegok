@extends('layouts.szerkezet')
@section('head')
    <link rel="stylesheet" href="css/agazatiPotlek.css" />
@endsection
@section('tartalom')
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-active">
                <th></th>
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
                    <td class="modositAgazatiP">
			            <button class="btn btn-primary" id="modositadat" type="button" data-toggle="modal"
				            data-target="#exampleModalLong"><i class='fa fa-edit'></i>
			            </button>
		            </td>
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
    <div class="lapozos">
        {!! $agazatiPotlek->links('pagination::bootstrap-4') !!}
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ágazati Potlék</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                        <div class="modal-body">
                            <div class="urlap">
                                <div class="row">
                                <div class="col" id="apId">
                                        <div class="form-outline">
                                            <input type="text" id="agazatiPID" class="form-control" readonly>
                                            <label class="form-label" for="agazatiPID">ID</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="eletkor" class="form-control" readonly>
                                            <label class="form-label" for="eletkor">Életkor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="a" class="form-control" readonly>
                                            <label class="form-label" for="a">A</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="b" class="form-control" readonly>
                                            <label class="form-label" for="b">B</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="c" class="form-control" readonly>
                                            <label class="form-label" for="c">C</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="d" class="form-control" readonly>
                                            <label class="form-label" for="d">D</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="e" class="form-control" readonly>
                                            <label class="form-label" for="e">E</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="f" class="form-control" readonly>
                                            <label class="form-label" for="f">F</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="g" class="form-control" readonly>
                                            <label class="form-label" for="g">G</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="h" class="form-control" readonly>
                                            <label class="form-label" for="h">H</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="i" class="form-control" readonly>
                                            <label class="form-label" for="i">I</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="j" class="form-control" readonly>
                                            <label class="form-label" for="j">J</label>
                                        </div>
                                    </div>
                                </div>

                                <div id="ment">
                                    <input class="btn btn-dark" style="width:200px" type="submit" id="adatMentes" value="Mentés">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="adatModositEnged">
                                <button type="button" class="btn btn-primary">Adatok módosítása</button>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
                        </div>
                
            </div>
        </div>
    </div>
@endsection
