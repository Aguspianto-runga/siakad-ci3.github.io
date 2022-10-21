
<div class="container align-content-center" style="width: 60%;">
    <?php foreach($mahasiswa3 as $mhs) { ?>
        <?php echo form_open_multipart('mahasiswa/ubah_foto');?>
        <div class="modal-content mb-5">
        <div class="modal-header">
            <h5 class="title"><strong>Ubah Data Mahasiswa</strong></h5>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="foto"><strong>Foto:</strong></label>
                <div>
                    <img class="img-thumbnail" src="<?php echo base_url().'assets/img/'.$mhs->foto; ?>" alt="foto_profil" width="150">
                    <input type="file" class="" id="foto" name="foto" value="<?php echo base_url().'assets/img/'.$mhs->foto; ?>">
                    <!-- <a href="<?php echo base_url('mahasiswa/ubahfoto/'.$mhs->id."")?>" class="btn btn-primary">update foto</a> -->
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url().'mahasiswa';?>" class="btn btn-danger">Batal</a>
                <button type="submit" value="upload" class="btn btn-primary">Simpan</button>
            </div>
    <?php } ?>
</div>
