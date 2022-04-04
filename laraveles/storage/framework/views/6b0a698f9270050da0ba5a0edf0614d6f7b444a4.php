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
                        <form action="" method="post" class="torles">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input type="submit" class="btn btn-primary megerositTorles" value="Igen" />
                    </form>

                </div>
            </div>
        </div>
    </div><?php /**PATH C:\Users\hallgato\Documents\balogh_biborka\Tipegok\laraveles\resources\views/layouts/torlesMegerositesDolgozo.blade.php ENDPATH**/ ?>