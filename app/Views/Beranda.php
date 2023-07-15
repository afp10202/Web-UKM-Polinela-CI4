<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<br>
<div class="container">
    <!-- Portfolio Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Unit Kegiatan Mahasiswa Polinela</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
    <div class="row justify-content-center">
        <?php foreach ($semuaukm as $ukm) : ?>
            <div class="col-md-3">
                <div class="portfolio-item" data-bs-toggle="modal" data-bs-target="#modal<?= $ukm['id_ukm'] ?>">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img src="/assets/logo/<?= $ukm['logo_ukm'] ?>" class="card-img-top" alt="Logo UKM">
                </div>
                <h5 class="card-title text-center"><?= $ukm['nama_ukm'] ?></h5>
            </div>
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
                            <p class="modal-text"><?= $ukm['informasi'] ?></p>
                            <h6>Visi:</h6>
                            <p class="modal-text"><?= $ukm['visi'] ?></p>
                            <h6>Misi:</h6>
                            <p class="modal-text"><?= $ukm['misi'] ?></p>
                            <h6>Kontak:</h6>
                            <ul class="modal-contact">
                                <li><strong>Email:</strong> <?= $ukm['email'] ?></li>
                                <li>
                                    <strong>YouTube:</strong> 
                                    <a href="<?= $ukm['link_yt'] ?>" target="_blank"><?= $ukm['nama_ukm'] ?></a>
                                </li>
                                <li>
                                    <strong>Instagram:</strong> 
                                    <a href="<?= $ukm['link_ig'] ?>" target="_blank"><?= $ukm['nama_ukm'] ?></a>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/assets/foto/<?= $ukm['foto_satu'] ?>" alt="Foto 1" class="img-fluid rounded">
                                </div>
                                <div class="col-md-6">
                                    <img src="/assets/foto/<?= $ukm['foto_dua'] ?>" alt="Foto 2" class="img-fluid rounded">
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
