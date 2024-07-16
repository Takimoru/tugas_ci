<?= $this->extend("layout/template"); ?>

<?=$this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Update Data</h1>
            <?php foreach ($alamat as $row) : ?>
                <ul>
                    <li>Tipe : <?= $row['tipe']; ?></li>    
                    <li>Alamat : <?= $row['alamat']; ?></li>
                    <li>Kota : <?= $row['kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?=$this->endSection(); ?>