<div class="container">
    <br><br><br>
    <?php if ($this->session->flashdata('message')): ?>
        <?= $this->session->flashdata('message'); ?>
    <?php endif; ?>
    <?php echo form_open('home/carimasuk', ['class' => 'd-flex']);?>
        <input class="form-control me-2" name="cari" type="search" placeholder="Cari" aria-label="Search">
        <button class="btn btn-primary" type="submit">Cari</button>
    <?php echo form_close();?>
    <br>
    <div class="card">
        <div class="card-header">
            Data Kos
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered text-center" style="overflow-y: hidden">
                    <thead class="table" style="background-color: #cccccc;">
                        <tr>
                            <td width='25px'>No</td>
                            <td>Nama Kos</td>
                            <td>Pemilik</td>
                            <td>Telepon</td>
                            <td>Status</td>
                            <td width='200px'>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($data_kos) && !empty($data_kos)): ?>
                            <?php $no=1; ?>
                            <?php foreach($data_kos as $data): ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data->nama; ?></td>
                                    <td><?php echo $data->nama_pemilik; ?></td>
                                    <td><?php echo $data->telepon; ?></td>
                                    <td>
                                    <?php if ($data->status == 'pending') { ?>
                                        <button type="button" class="btn btn-warning">Pending</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-info">Terupload</button>
                                    <?php } ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail" onclick="window.location.href='<?php echo base_url() . 'home/detailmasuk/' . $data->id; ?>'"><i class="bi bi-card-list"></i></button>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" onclick="window.location.href='<?php echo base_url() . 'home/editmasuk/' . $data->id; ?>'"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus" onclick="confirmDelete(<?php echo $data->id; ?>)"><i class="bi bi-trash"></i></button>
                                        <?php if($data->status == 'pending') { ?>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Upload" onclick="confirmUpload(<?php echo $data->id; ?>)"><i class="bi bi-plus-circle-fill"></i></button>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#confirmationModal"><i class="bi bi-plus-circle-fill"></i></button>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">Tidak ada data yang ditemukan</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmUploadModal" tabindex="-1" aria-labelledby="confirmUploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmUploadModalLabel">Konfirmasi Upload</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin mengupload data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmUploadButton">Upload</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="confirmationModalLabel">Konfirmasi Upload</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Data sudah terupload oleh Anda.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    function confirmDelete(id) {
        document.getElementById('confirmDeleteButton').setAttribute('data-id', id);
        var myModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'), {
            keyboard: false
        });
        myModal.show();
    }

    document.getElementById('confirmDeleteButton').addEventListener('click', function () {
        var id = this.getAttribute('data-id');
        window.location.href = '<?php echo base_url('home/hapusmasuk/'); ?>' + id;
    });
</script>

<script>
    function confirmUpload(id) {
        document.getElementById('confirmUploadButton').setAttribute('data-id', id);
        var myModal = new bootstrap.Modal(document.getElementById('confirmUploadModal'), {
            keyboard: false
        });
        myModal.show();
    }

    document.getElementById('confirmUploadButton').addEventListener('click', function () {
        var id = this.getAttribute('data-id');
        window.location.href = '<?php echo base_url('home/upload/'); ?>' + id;
    });
</script>

<script>
    function confirmDone(id) {
        document.getElementById('confirmDoneButton').setAttribute('data-id', id);
        var myModal = new bootstrap.Modal(document.getElementById('confirmDoneModal'), {
            keyboard: false
        });
        myModal.show();
    }

    document.getElementById('confirmDoneButton').addEventListener('click', function () {
        var id = this.getAttribute('data-id');
        window.location.href = '<?php echo base_url('home/upload/'); ?>' + id;
    });
</script>
