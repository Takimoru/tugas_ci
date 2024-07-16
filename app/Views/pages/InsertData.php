<?= $this->extend("layout/template"); ?>

<?=$this->section('content'); ?>

<h1>Insert Data Mahasiswa</h1>
<form action="/students/insert" method="post">
    <?= csrf_field(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="row mb-3">
                        <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="NIM" name="NIM" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" name="Nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Jurusan" name="Jurusan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Kelas" name="Kelas">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</form>

<?=$this->endSection(); ?>
