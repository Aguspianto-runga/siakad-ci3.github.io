
<section class="content">

<div class="container">
    <!-- menampilkan pesan flahdata -->
    <h2>Data Mahasiswa</h2>
    <?php echo $this->session->flashdata('message'); ?>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-info btn-sm mt-3" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Mahasiswa <i class="fas fa-plus"></i>
            </button>
</div>

    <table class="table table-hover mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($mahasiswa3 as $mhs) : ?>
                <tr>
                    <td><b><?= $no++ ?></b></td>
                    <td><?= $mhs->nama; ?></td>
                    <td><?= $mhs->jurusan; ?></td>
                    <td>
                        <img class="" src="<?php echo base_url().'assets/img/'.$mhs->foto; ?>" alt="foto_profil" width="45">
                    </td>
                    <td>
                        <a href="<?php echo base_url('mahasiswa/hapus/'.$mhs->id."")?>" class="btn btn-sm btn-outline-danger m-1" onclick="return confirm('Anda yakin menghapus data yg anda pilih?');"><i class="fas fa-trash"></i></a>
                        <a href="<?php echo base_url('mahasiswa/edit/'.$mhs->id."")?>" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-edit"></i><a>
                        <a href="<?php echo base_url('mahasiswa/detail/'.$mhs->id."")?>" class="btn btn-sm btn-outline-success m-1"><i class="fas fa-list"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</section>
</div>


<!-- Modal Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h4>
        </div>
        <div class="modal-body">
        <?php echo form_open_multipart('mahasiswa/tambah_data'); ?>
            <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required="">
                </div>
                <div class="form-group">
                    <label for="nim">Nim:</label>
                    <input type="number" class="form-control" id="nim" name="nim" required="">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin:</label>
                    <select type="select" class="form-control" id="jk" name="jk" required="">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan:</label>
                    <select type="text" class="form-control" id="jurusan" name="jurusan" required="">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required="">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" required="" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <input type="file" class="form-group" id="foto" name="foto" required="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal <i class=" glyphicon glyphicon-remove"></i></button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
        </div>
        <?php echo form_close(); ?>
        
        </div>
    </div>
</div>