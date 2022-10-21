

    <div class="card card-primary card-outline m-auto mt-2" style="width: 60%;">
        <div class="card-header bg-gradient-light py-3">
            <h4 class="m-0 font-weight-bold">
                <strong>Detail Data Mahasiswa</strong>
            </h4>
        </div>
                <div class="card-body box-profile">
                <?php foreach ($mahasiswa3 as $mhs) : ?>
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url().'assets/img/'.$mhs->foto; ?>" alt="User profile picture">
                    </div>

                        <h3 class="profile-username text-center"><?php echo $mhs->nama; ?></h3>
                        <p class="text-muted text-center"><?php echo $mhs->jurusan; ?></p>

                    <div class="card-body">
                        <hr>
                        <strong><i class="fas fa-id-card mr-1"></i> NIM</strong>
                        <p class="text-muted"><?php echo $mhs->nim; ?></p>
                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                        <p class="text-muted"><?php echo $mhs->alamat; ?></p>
                        <hr>
                        <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                        <p class="text-muted"><a href="mailto:<?php echo $mhs->email; ?>"><?php echo $mhs->email; ?></a></p>
                        <hr>
                        <strong><i class="fas fa-user mr-1"></i> Jenis Kelamin</strong>
                        <p class="text-muted"><?php echo $mhs->jk; ?></p>
                        
                    <?php endforeach; ?>
                    </div>

                    <a href="<?php echo base_url('mahasiswa')?>" class="btn btn-secondary btn-block"><b>Kembali</b></a>
                <!-- /.card-body -->
            </div>
    </div>


</section>
</div>