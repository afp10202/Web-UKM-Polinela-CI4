<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

</br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($semuaukm as $ukm) : ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/foto/<?= $ukm['logo_ukm'] ?>" class="card-img-top" alt="Logo UKM">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= $ukm['nama_ukm'] ?></h5>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $ukm['id_ukm'] ?>">
                                Informasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal -->
            <!-- Modal -->
<div class="modal fade" id="modal<?= $ukm['id_ukm'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $ukm['nama_ukm'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Informasi:</h6>
                <p><?= $ukm['informasi'] ?></p>
                <h6>Visi:</h6>
                <p><?= $ukm['visi'] ?></p>
                <h6>Misi:</h6>
                <p><?= $ukm['misi'] ?></p>
                <div class="row">
                    <div class="col-md-6">
                        <img src="/assets/foto/<?= $ukm['foto_satu'] ?>" alt="Foto 1" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <img src="/assets/foto/<?= $ukm['foto_dua'] ?>" alt="Foto 2" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
