<div class="container">

    <div class="row mt-3">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            Form Tambah Data Mahasiswa
                        </div>


                        <?php echo form_open_multipart('mahasiswa/tambah'); ?>
                        <hr>
                        <div class="form-group">
                            <label for="nama">Nama<label>
                                    <input type="text" name="nama" class="form form-control float-right" id="nama">
                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="nim">NIM<label>
                                    <input type="text" name="nim" class="form form-control" id="nim">
                                    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="email">Email<label>
                                    <input type="text" name="email" class="form form-control" id="email">
                                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="jurusan">Jurusan<label>
                                    <input type="text" name="jurusan" class="form form-control" id="jurusan">
                                    <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Upload Foto<label>
                                    <input type="file" name="foto" class="form form-control">
                                    <small class="form-text text-danger"><?= form_error('foto'); ?></small>
                        </div>
                        <hr>
                        <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data </button>
                        <?php echo form_close(); ?>
                    </div>
                </div>


            </div>
        </div>

    </div>