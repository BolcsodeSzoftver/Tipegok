@extends('layouts.szerkezet')
@section('head')
    <link rel="stylesheet" href="css/agazatiPotlek.css" />
    <script src="js/agazatiPotlek.js"></script>
    <script src="js/adminSajatAdatMegjelenit.js"></script>
@endsection
@section('tartalom')
    <table class="table table-bordered mb-5 ">
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
        <tbody class="adatok">
            @foreach ($agazatiPotlek as $agazatiP)
                <tr>
                    <td class="modositAgazatiP">
			            <button class="btn btn-primary modositGomb"  id={{ $agazatiP->id }} type="button" data-toggle="modal"
				            data-target="#exampleModalLong"><i class='fa fa-edit'></i>
			            </button>
		            </td>
                    <td class="eletkor" id={{ $agazatiP->id }}>{{ $agazatiP->eletkor }}</td>
                    <td class="a" id={{ $agazatiP->id }}>{{ $agazatiP->A }}</td>
                    <td class="b" id={{ $agazatiP->id }}>{{ $agazatiP->B }}</td>
                    <td class="c" id={{ $agazatiP->id }}>{{ $agazatiP->C }}</td>
                    <td class="d" id={{ $agazatiP->id }}>{{ $agazatiP->D }}</td>
                    <td class="e" id={{ $agazatiP->id }}>{{ $agazatiP->E }}</td>
                    <td class="f" id={{ $agazatiP->id }}>{{ $agazatiP->F }}</td>
                    <td class="g" id={{ $agazatiP->id }}>{{ $agazatiP->G }}</td>
                    <td class="h" id={{ $agazatiP->id }}>{{ $agazatiP->H }}</td>
                    <td class="i" id={{ $agazatiP->id }}>{{ $agazatiP->I }}</td>
                    <td class="j" id={{ $agazatiP->id }}>{{ $agazatiP->J }}</td>
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
                <form action="api/agazatiPotlek/0" method="post">
                @csrf
                    <input type="hidden" name="_method" value="PUT">
                        <div class="modal-body">
                            <div class="urlap">
                                <div class="row">
                                <div class="col" id="apId">
                                        <div class="form-outline">
                                            <input type="text" id="agazatiPID" class="form-control" readonly>
                                            <label class="form-label" for="agazatiPID">ID</label>
                                        </div>
                                    </div>
                                    <div class="col-7" style="transform: translateX(35%); text-align:center;">
                                        <div class="form-outline">
                                            <input type="text" id="eletkor" class="form-control" nev="eletkor" readonly style="text-align:center;">
                                            <label class="form-label" for="eletkor">Életkor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="a" class="form-control" name="A" readonly>
                                            <label class="form-label" for="a">A</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="b" class="form-control" name="B" readonly>
                                            <label class="form-label" for="b">B</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="c" class="form-control" name="C" readonly>
                                            <label class="form-label" for="c">C</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="d" class="form-control" name="D" readonly>
                                            <label class="form-label" for="d">D</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="e" class="form-control" name="E" readonly>
                                            <label class="form-label" for="e">E</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="f" class="form-control" name="F" readonly>
                                            <label class="form-label" for="f">F</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="g" class="form-control" name="G" readonly>
                                            <label class="form-label" for="g">G</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="h" class="form-control" name="H" readonly> 
                                            <label class="form-label" for="h">H</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="i" class="form-control" name="I" readonly>
                                            <label class="form-label" for="i">I</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="j" class="form-control" name="J" readonly>
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
                    </form>
            </div>
        </div>
    </div>
@endsection
