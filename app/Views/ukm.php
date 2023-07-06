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
                    <td><img src="/assets/foto/<?= $ukm['logo_ukm'] ?>" alt="Logo UKM" style="width: 100px;"></td>
                    <td><?= $ukm['nama_ukm'] ?></td>
                    <td><?= substr($ukm['informasi'], 0, 100) ?>...</td>
                    <td><?= substr($ukm['visi'], 0, 100) ?>...</td>
                    <td><?= substr($ukm['misi'], 0, 100) ?>...</td>
                    <td><img src="/assets/foto/<?= $ukm['foto_satu'] ?>" alt="Foto 1" style="width: 150px;"></td>
                    <td><img src="/assets/foto/<?= $ukm['foto_dua'] ?>" alt="Foto 2" style="width: 150px;"></td>
                    <td>
                        <a href="/ukm/update/<?= $ukm['id_ukm']; ?>" class="btn btn-success">Update</a>
                        <a class="btn btn-danger" onclick="return confirmDelete(<?= $ukm['id_ukm'] ?>)">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
