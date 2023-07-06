<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="co;-md-12">
    <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                    <h1>Tambah Film</h1>
                    </div>
                    <div class="col-md-6 text-end">
                    <a href="/ukm/"class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
            <form action="">
                    <div class="row">

                    <div class="col-md-6">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control <?= isset($errors['logo']) ? 'is-invalid' : ''; ?>" id="logo" name="logo" value="<?= old('logo'); ?>">
                            <?php if (isset($errors['logo'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['logo'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_ukm" class="form-label">Nama UKM</label>
                            <input type="text" class="form-control <?= isset($errors['nama_ukm']) ? 'is-invalid ' : ''; ?>" id="nama_ukm" name="nama_ukm" value=" <?= old('nama_ukm'); ?>">
                            <?php if (isset($errors['nama_ukm'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['nama_ukm'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <label for="information" class="form-label">Informasi</label>
                            <input type="text" class="form-control <?= isset($errors['information']) ? 'is-invalid ' : ''; ?>" id="information" name="information" value=" <?= old('information'); ?>">
                            <?php if (isset($errors['information'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['information'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="visi" class="form-label">Visi</label>
                            <input type="text" class="form-control <?= isset($errors['visi']) ? 'is-invalid ' : ''; ?>" id="visi" name="visi" value=" <?= old('visi'); ?>">
                            <?php if (isset($errors['visi'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['visi'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="misi" class="form-label">Misi</label>
                            <input type="text" class="form-control <?= isset($errors['misi']) ? 'is-invalid ' : ''; ?>" id="misi" name="misi" value=" <?= old('misi'); ?>">
                            <?php if (isset($errors['misi'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['misi'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="foto_satu" class="form-label">Foto 1</label>
                            <input type="file" class="form-control <?= isset($errors['foto_satu']) ? 'is-invalid' : ''; ?>" id="foto_satu" name="foto_satu" value="<?= old('foto_satu'); ?>">
                            <?php if (isset($errors['foto_satu'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['foto_satu'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="foto_dua" class="form-label">Foto 2</label>
                            <input type="file" class="form-control <?= isset($errors['foto_dua']) ? 'is-invalid' : ''; ?>" id="foto_dua" name="foto_dua" value="<?= old('foto_dua'); ?>">
                            <?php if (isset($errors['foto_dua'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['foto_dua'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                        </div>
                    </div>
                </form>
</div>
</div>

<?= $this->endSection() ?>