<div class="row pb-2">
    <div class="col-md-12 py-3"><a href="../user/login.php"><i data-feather="arrow-left"></i> Kembali Ke Halaman Utama</a></div>
</div>
<div class="row">
    <div class="col-md-12 d-flex justify-content-center"><h1 class="text-primary">REGISTRASI</h1></div>
    <div class="col-md-12 d-flex justify-content-center">
        <div class="col-md-4 d-flex flex-column">
                <form action="">
                    <label for="nomor_RM" class="form-label mb-1 text-primary"><strong>Nomor Rekam Medis</strong></label>
                    <input type="text" class="form-control mb-2" id="nomor_RM" placeholder="0000000">
                    <label for="tanggal_lahir" class="form-label mb-1 text-primary"><strong>Tanggal Lahir</strong></label>
                    <input type="date" class="form-control mb-2" id="tanggal_lahir">
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-primary rounded-pill px-3 my-2"  data-bs-toggle="modal" data-bs-target="#searchResModal">CARI</button>
                    </div>
                    <div class="modal fade" id="searchResModal" tabindex="-1" aria-labelledby="searchResModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="searchResModalLabel">HASIL PENCARIAN</h3>
                            <a data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></a>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12 d-flex flex-row">
                                <div class="col-md-4">
                                    <div class="col-md-12 pb-1">
                                        <label for="NRM">Nomor Rekam Medis</label>
                                        <input type="number" name="NRM" id="NRM" class="form-control" placeholder="000000">
                                    </div>
                                    <div class="col-md-12 pb-1">
                                        <label for="NIK">NIK</label>
                                        <input type="number" name="NIK" id="NIK" class="form-control" placeholder="0011223344556677">
                                    </div>
                                    <div class="col-md-12 pb-1">
                                        <label for="HP">No. HP</label>
                                        <input type="number" name="HP" id="HP" class="form-control" placeholder="081234567890">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 pb-1">
                                        <label for="Pasien">Nama Pasien</label>
                                        <input type="text" name="nama_pasien" id="Pasien" class="form-control" placeholder="John Doe">
                                    </div>
                                    <div class="col-md-12 pb-1">
                                        <label for="Jenis_Kelamin">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" id="Jenis_Kelamin" class="form-control" placeholder="Laki-Laki">
                                    </div>
                                    <div class="col-md-12 pb-1">
                                        <label for="Email">Alamat E-mail</label>
                                        <input type="email" name="email" id="Email" class="form-control" placeholder="johndoe@example.com">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 pb-1">
                                        <label for="Tanggal_Lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="Tanggal_Lahir" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Alamat">Alamat</label>
                                        <textarea name="alamat" id="Alamat" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex flex-wrap justify-content-center">
                            <button type="button" class="btn btn-primary rounded-pill px-3">LANJUT</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
            <div class="col-md-12 d-flex flex-wrap flex-row">
                <div class="col-md-6 d-flex justify-content-start"><strong><a href="#">Lupa Nomor RM?</a></strong></div>
                <div class="col-md-6 d-flex justify-content-end"><strong><a href="#">Mendaftar Pasien Baru</a></strong></div>
            </div>
        </div>
    </div>
</div>