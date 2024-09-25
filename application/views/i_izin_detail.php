<?php $this->load->view('include/header.php'); ?>
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('izin') ?>">Daftar Kelas</a></li>
                            <li class="breadcrumb-item active">Detail Izin</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Siswa Tidak Hadir Hari Ini</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="row">
            <?php if(!empty($siswa)): ?>
                <?php foreach($siswa as $murid): ?>
                    <div class="col-md-4">
                        <div class="card m-b-30">
                            <div class="card-body text-center">
                                <div class="box">
                                    <img src="<?=base_url();?>./uploads/<?= $murid->foto ?>" style="width:100px; height:100px; object-fit:cover; border-radius:5px; margin-bottom:15px;" alt="Foto Murid">
                                </div>
                                <h1 class="header-title"><?= $murid->nama; ?></h1>
                                <hr>
                                <div class="table-responsive">
                                    <p>NISN : <?= $murid->nisn; ?></p>
                                    <p>Kelas : <?= $murid->kelas; ?></p>
                                    
                                    <form id="absensiForm" action="<?php echo site_url('izin/absen'); ?>" method="post">
                                        <input type="hidden" name="nisn" value="<?= $murid->nisn ?>">
                                        <input type="hidden" name="id_devices" value="3">
                                        <input type="hidden" name="id_kelas" value="<?= $id_kelas ?>">
                                        <select name="action" class="form-control">
                                            <option value="masuk">Tidak Membawa Kartu Masuk</option>
                                            <option value="keluar">Tidak Membawa Kartu Keluar</option>
                                            <option value="izin">Izin</option>
                                            <option value="sakit">Sakit</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h1 class="mt-0 header-title">Tidak ada siswa yang tidak hadir hari ini di kelas ini.</h1>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer.php'); ?>
