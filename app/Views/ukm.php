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
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Nama UKM</th>
                    <th scope="col">Informasi</th>
                    <th scope="col">Visi</th>
                    <th scope="col">Misi</th>
                    <th scope="col">Email</th>
                    <th scope="col">Link IG</th>
                    <th scope="col">Link YT</th>
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
                        <td style="text-align: center;">
                            <img src="/assets/logo/<?= $ukm['logo_ukm'] ?>" alt="Logo UKM"
                            style="width: 50px; height: 50px; display: block; margin: 0 auto;"
                            data-bs-toggle="modal" data-bs-target="#logoModal<?= $ukm['id_ukm'] ?>">
                            <!-- Modal -->
                            <div class="modal fade" id="logoModal<?= $ukm['id_ukm'] ?>"
                            tabindex="-1" aria-labelledby="logoModalLabel<?= $ukm['id_ukm'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="/assets/logo/<?= $ukm['logo_ukm'] ?>"
                                            alt="Logo UKM" style="max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td style='font-size: 14px; text-align: center;'><?= $ukm['nama_ukm'] ?></td>
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
                        <td style="font-size: 12px;"><?= $ukm['email'] ?></td>
                        <td style="font-size: 12px;"><a href="<?= $ukm['link_ig'] ?>"
                        target="_blank"><?= $ukm['link_ig'] ?></a></td>
                        <td style="font-size: 12px;"><a href="<?= $ukm['link_yt'] ?>"
                        target="_blank"><?= $ukm['link_yt'] ?></a></td>
                        <td style="text-align: center;">
                            <img src="/assets/foto/<?= $ukm['foto_satu'] ?>" alt="Foto 1"
                            style="width: 50px; height: 50px; display: block; margin: 0 auto;"
                            data-bs-toggle="modal" data-bs-target="#fotoSatuModal<?= $ukm['id_ukm'] ?>">
                            <!-- Modal -->
                            <div class="modal fade" id="fotoSatuModal<?= $ukm['id_ukm'] ?>"
                            tabindex="-1" aria-labelledby="fotoSatuModalLabel<?= $ukm['id_ukm'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="/assets/foto/<?= $ukm['foto_satu'] ?>"
                                            alt="Foto 1" style="max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <img src="/assets/foto/<?= $ukm['foto_dua'] ?>" alt="Foto 2"
                            style="width: 50px; height: 50px; display: block; margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#fotoDuaModal<?= $ukm['id_ukm'] ?>">
                            <!-- Modal -->
                            <div class="modal fade" id="fotoDuaModal<?= $ukm['id_ukm'] ?>"
                            tabindex="-1" aria-labelledby="fotoDuaModalLabel<?= $ukm['id_ukm'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="/assets/foto/<?= $ukm['foto_dua'] ?>"
                                            alt="Foto 2" style="max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="/ukm/update/<?= encryptUrl($ukm["id_ukm"]); ?>" class="btn btn-sm btn-success">Update</a>
                            <br/>
                            <a class="btn btn-sm btn-danger" onclick="return confirmDelete(<?= $ukm['id_ukm'] ?>)">Delete</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
        function confirmDelete(ukmId){
            swal({
                    title: "Apakah Anda yakin?",
                    text: "Setelah dihapus, data anda akan benar-benar hilang!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willDelete) => {
                if(willDelete) {
                    window.location.href = "/ukm/destroy/" + encryptUrl(ukmId);
                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
        }
</script>

<style>
    .scrollable {
        max-height: 100px;
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
