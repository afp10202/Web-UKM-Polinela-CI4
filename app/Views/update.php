<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Edit UKM</h1>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/ukm" class="btn btn-dark">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/ukm/edit" method="post" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                <!-- Tambahkan UKM Input ID -->
                                <input type="hidden" value="<?= $semuaukm['id_ukm'] ?>" name="id_ukm">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nama_ukm" class="form-label">Nama UKM</label>
                                        <input type="text" class="form-control <?= isset($errors['nama_ukm']) ? 'is-invalid ' : ''; ?>" id="nama_ukm" name="nama_ukm" value="<?= $semuaukm['nama_ukm'] ?>">
                                        <?php if (isset($errors['nama_ukm'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['nama_ukm'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="logo_ukm" class="col-sm-2 col-form-label">Logo</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control <?= isset($errors['logo_ukm']) ? 'is-invalid' : ''; ?>" id="logo_ukm" name="logo_ukm">
                                            <?php if (isset($errors['logo_ukm'])) : ?>
                                                <div class="invalid-feedback">
                                                    <?= $errors['logo_ukm'] ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php if ($semuaukm['logo_ukm']) : ?>
                                                <img src="/assets/logo/<?= $semuaukm['logo_ukm']; ?>" width="100">
                                            <?php else : ?>
                                                <span>Tidak ada logo lama</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="foto_satu" class="col-sm-2 col-form-label">Foto 1</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control <?= isset($errors['foto_satu']) ? 'is-invalid' : ''; ?>" id="foto_satu" name="foto_satu">
                                            <?php if (isset($errors['foto_satu'])) : ?>
                                                <div class="invalid-feedback">
                                                    <?= $errors['foto_satu'] ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php if ($semuaukm['foto_satu']) : ?>
                                                <img src="/assets/foto/<?= $semuaukm['foto_satu']; ?>" width="100">
                                            <?php else : ?>
                                                <span>Tidak ada foto lama</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="foto_dua" class="col-sm-2 col-form-label">Foto 2</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control <?= isset($errors['foto_dua']) ? 'is-invalid' : ''; ?>" id="foto_dua" name="foto_dua">
                                            <?php if (isset($errors['foto_dua'])) : ?>
                                                <div class="invalid-feedback">
                                                    <?= $errors['foto_dua'] ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php if ($semuaukm['foto_dua']) : ?>
                                                <img src="/assets/foto/<?= $semuaukm['foto_dua']; ?>" width="100">
                                            <?php else : ?>
                                                <span>Tidak ada foto lama</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <!-- Tambahkan input Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid ' : ''; ?>" id="email" name="email" value="<?= isset($semuaukm['email']) ? $semuaukm['email'] : ''; ?>">
                                        <?php if (isset($errors['email'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['email'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Tambahkan input Link YouTube -->
                                    <div class="mb-3">
                                        <label for="link_yt" class="form-label">Link YouTube</label>
                                        <input type="url" class="form-control <?= isset($errors['link_yt']) ? 'is-invalid ' : ''; ?>" id="link_yt" name="link_yt" value="<?= isset($semuaukm['link_yt']) ? $semuaukm['link_yt'] : ''; ?>">
                                        <?php if (isset($errors['link_yt'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['link_yt'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Tambahkan input Link Instagram -->
                                    <div class="mb-3">
                                        <label for="link_ig" class="form-label">Link Instagram</label>
                                        <input type="url" class="form-control <?= isset($errors['link_ig']) ? 'is-invalid ' : ''; ?>" id="link_ig" name="link_ig" value="<?= isset($semuaukm['link_ig']) ? $semuaukm['link_ig'] : ''; ?>">
                                        <?php if (isset($errors['link_ig'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['link_ig'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="visi" class="form-label">Visi</label>
                                        <textarea class="form-control <?= isset($errors['visi']) ? 'is-invalid' : ''; ?>" id="visi" name="visi" cols="50" rows="6"><?= $semuaukm['visi'] ?></textarea>
                                        <?php if (isset($errors['visi'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['visi'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="misi" class="form-label">Misi</label>
                                        <textarea class="form-control <?= isset($errors['misi']) ? 'is-invalid' : ''; ?>" id="misi" name="misi" cols="50" rows="6"><?= $semuaukm['misi'] ?></textarea>
                                        <?php if (isset($errors['misi'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['misi'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="informasi" class="form-label">Informasi</label>
                                        <textarea class="form-control <?= isset($errors['informasi']) ? 'is-invalid' : ''; ?>" id="informasi" name="informasi" cols="50" rows="6"><?= $semuaukm['informasi'] ?></textarea>
                                        <?php if (isset($errors['informasi'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['informasi'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary mt-5">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
