<section class="content">



<div class="container align-content-center mt-4" style="width: 70%;">
    <?php foreach($mahasiswa3 as $mhs) { ?>
        <?php echo form_open_multipart('mahasiswa/update');?>
        <div class="modal-content mb-5">
        <div class="modal-header">
            <h4 class="title">Ubah Data Mahasiswa</h4>
        </div>
        <div class="modal-body">
            <div class="input-group">
                <div>
                    <img class="img-thumbnail" src="<?php echo base_url().'assets/img/'.$mhs->foto; ?>" alt="foto_profil" width="150">
                    <input type="file" class="form-control" id="foto" name="foto" value="<?php echo base_url().'assets/img/'.$mhs->foto; ?>">
                </div>
            </div>
            <hr>
            <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="hidden" name="id" id="id" value="<?php echo $mhs->id ?>">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mhs->nama ?>">
                </div>
                <div class="form-group">
                    <label for="nim">Nim:</label>
                    <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $mhs->nim ?>">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin:</label>
                    <select type="text" class="form-control" id="jk" name="jk" value="<?php echo $mhs->jk ?>">
                    <option selected><?php echo $mhs->jk ?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan:</label>
                    <select type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $mhs->jurusan ?>">
                    <option selected><?php echo $mhs->jurusan ?></option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $mhs->alamat ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $mhs->email ?>">
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url().'mahasiswa';?>" class="btn btn-danger btn-sm">Batal</a>
                    <button type="submit" value="upload" class="btn btn-primary btn-sm">Simpan</button>
                </div>
    <?php } ?>
</div>


</section>
</div>
