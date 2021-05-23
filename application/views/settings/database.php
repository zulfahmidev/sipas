<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-xl-8 col-lg-8 col-md-19 col-sm-12">
            <h3 class="h3 text-gray-800 my-2"><?= $judul; ?></h3>


        </div>
    </div>

</div>
</div>

<!-- Modal -->
<!-- Modal Hapus -->
<div class="modal fade" id="modalRestore" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header badge-primary">
                <h5 class="modal-title">Restore Database</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('database/restore'); ?>" method="POST">
                <div class="modal-body">
                    Apakah anda yakin ingin melakukan restore data?
                    <input type="hidden" name="filterby" value="semua">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="restore" class="btn btn-primary">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>