<div class="modal fade " id="modalDolgozo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Törlés megerősítése</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Biztosan szeretnéd törölni?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nem</button>
                    @forelse ($alkalmazotts as $data)
                        <form action="" method="post" class="torles">
                    @endforeach
                    @csrf
                    @method("DELETE")
                    <input type="submit" class="btn btn-primary megerositTorles" value="Igen" />
                    </form>

                </div>
            </div>
        </div>
    </div>