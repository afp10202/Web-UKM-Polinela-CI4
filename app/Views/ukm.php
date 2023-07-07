<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<br/>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Data UKM</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="/ukm/add" class="btn btn-primary">Tambahkan Data</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Nama UKM</th>
                    <th scope="col">Informasi</th>
                    <th scope="col">Visi</th>
                    <th scope="col">Misi</th>
                    <th scope="col">Foto 1</th>
                    <th scope="col">Foto 2</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($semuaukm as $ukm) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><img src="/assets/foto/<?= $ukm['logo_ukm'] ?>" alt="Logo UKM"  style="display: block; margin: 0 auto; text-align: center; width: 180px; height: 200px;""></td>
                        <td style='font-size: 14px;'><?= $ukm['nama_ukm'] ?></td>
                        <td>
                            <div class="scrollable">
                                <p><?= $ukm['informasi'] ?></p>
                            </div>
                        </td>
                        <td>
                            <div class="scrollable">
                                <p><?= $ukm['visi'] ?></p>
                            </div>
                        </td>
                        <td>
                            <div class="scrollable">
                                <p><?= $ukm['misi'] ?></p>
                            </div>
                        </td>
                        <td><img src="/assets/foto/<?= $ukm['foto_satu'] ?>"  alt="Foto 1" style="display: block; margin: 0 auto; text-align: center; width: 180px; height: 200px;" ></td>
                        <td><img src="/assets/foto/<?= $ukm['foto_dua'] ?>" alt="Foto 2" style="display: block; margin: 0 auto; text-align: center; width: 180px; height: 200px;"></td>
                        <td>
                            <a href="/ukm/update/<?= $ukm['id_ukm']; ?>" class="btn btn-success">Update</a>
                            <a class="btn btn-danger" onclick="return confirmDelete(<?= $ukm['id_ukm'] ?>)">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    .scrollable {
        max-height: 200px;
        overflow-y: auto;
        background-color: rgba(0, 0, 0, 0.1);
        padding: 10px;
        border-radius: 5px;
    }

    .scrollable p {
        margin: 0;
        padding: 0;
        font-size: 12px;
    }
</style>

<?= $this->endSection() ?>
