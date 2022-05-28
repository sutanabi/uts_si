<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header">
        Form Tambah Data Mahasiswa
        </div>
             
                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama<label>
                            <input type="text" name="nama" class="form form-control float-right" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM<label>
                            <input type="text" name="nim" class="form form-control" id="nim">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email<label>
                            <input type="text" name="email" class="form form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan<label>
                            <input type="text" name="jurusan" class="form form-control" id="jurusan">
                            <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data </button>
                    </form>
                </div>
        </div>    
         

        </div>
    </div>

</div>