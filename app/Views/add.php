<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Tambah UKM</h1>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/ukm" class="btn btn-dark">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/ukm/insert" method="post" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nama_ukm" class="form-label">Nama UKM</label>
                                        <input type="text" class="form-control <?= isset($errors['nama_ukm']) ? 'is-invalid ' : ''; ?>" id="nama_ukm" name="nama_ukm" value="<?= old('nama_ukm'); ?>">
                                        <?php if (isset($errors['nama_ukm'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['nama_ukm'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input type="file" class="form-control <?= isset($errors['logo']) ? 'is-invalid' : ''; ?>" id="logo_ukm" name="logo_ukm" value="<?= old('logo_ukm'); ?>">
                                        <?php if (isset($errors['logo'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['logo'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto_satu" class="form-label">Foto 1</label>
                                        <input type="file" class="form-control <?= isset($errors['foto_satu']) ? 'is-invalid' : ''; ?>" id="foto_satu" name="foto_satu" value="<?= old('foto_satu'); ?>">
                                        <?php if (isset($errors['foto_satu'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['foto_satu'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto_dua" class="form-label">Foto 2</label>
                                        <input type="file" class="form-control <?= isset($errors['foto_dua']) ? 'is-invalid' : ''; ?>" id="foto_dua" name="foto_dua" value="<?= old('foto_dua'); ?>">
                                        <?php if (isset($errors['foto_dua'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['foto_dua'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
                                        <?php if (isset($errors['email'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['email'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="link_ig" class="form-label">Link Instagram</label>
                                        <input type="text" class="form-control <?= isset($errors['link_ig']) ? 'is-invalid' : ''; ?>" id="link_ig" name="link_ig" value="<?= old('link_ig'); ?>">
                                        <?php if (isset($errors['link_ig'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['link_ig'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="link_yt" class="form-label">Link Youtube</label>
                                        <input type="text" class="form-control <?= isset($errors['link_yt']) ? 'is-invalid' : ''; ?>" id="link_yt" name="link_yt" value="<?= old('link_yt'); ?>">
                                        <?php if (isset($errors['link_yt'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['link_yt'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="visi" class="form-label">Visi</label>
                                        <textarea class="form-control <?= isset($errors['visi']) ? 'is-invalid' : ''; ?>" id="visi" name="visi" cols="50" rows="6"><?= old('visi'); ?></textarea>
                                        <?php if (isset($errors['visi'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['visi'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="misi" class="form-label">Misi</label>
                                        <textarea class="form-control <?= isset($errors['misi']) ? 'is-invalid' : ''; ?>" id="misi" name="misi" cols="50" rows="6"><?= old('misi'); ?></textarea>
                                        <?php if (isset($errors['misi'])) : ?>
                                            <div class="invalid-feedback">
                                                <?= $errors['misi'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="informasi" class="form-label">Informasi</label>
                                        <textarea class="form-control <?= isset($errors['informasi']) ? 'is-invalid' : ''; ?>" id="informasi" name="informasi" cols="50" rows="6"><?= old('informasi'); ?></textarea>
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
                                    <button type="submit" class="btn btn-primary mt-5">Simpan</button>
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
