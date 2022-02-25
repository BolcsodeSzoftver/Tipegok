<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jóváhagyásra váró dolgozók</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body jovahagyasDiv">
                <table class="table table-bordered mb-5" id="tabla">
                    <thead>
                        <tr class="table-active">
                            <th></th>
                            <th scope="col" sortable>Név</th>
                        </tr>
                    </thead>
                    <tbody class="adatokDolgozoAllapot">
                        @forelse ($alkalmazotts as $data)
                            @if ($data->allapot === 0)
                                <tr class="dolgozo">
                                    <td class="modositAllapot">
                                        <form action="api/dolgozo/0" method="post" class="allapotModosit">
                                            @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                            <div class="form-outline">
                                                <input type="hidden" id="allapot" class="form-control" name="allapot">
                                            </div>
                                            <button type="submit" name="submit" value="Save" id={{ $data->id }}
                                                class="btn btn-primary pipa">
                                                <span>&#10003;</span>
                                            </button>

                                        </form>
                                    </td>
                                    <td class="nev" id={{ $data->id }}>{{ $data->nev }}</td>
                                    <td class="allapot" id={{ $data->allapot }}>{{ $data->allapot }}</td>
                                </tr>
                            @endif
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezár</button>
            </div>
        </div>
    </div>
</div>
