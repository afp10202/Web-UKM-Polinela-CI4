<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web UKM Polinela</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script>
    <style>
        .footer {
            text-align: center;
        }
        /* Additional CSS for menu positioning */
        .navbar-nav.vertical {
            flex-direction: column;
        }
        .navbar-nav.horizontal {
            flex-direction: row;
        }
        .navbar-collapse {
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap fa-lg mr-2"></i>Website UKM Polinela</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nvbCollapse">
                    <ul class="navbar-nav horizontal"> <!-- Changed class to 'vertical' -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/') ?>">Informasi UKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('ukm') ?>">Data UKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/') ?>">Data Anggota</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('about') ?>">Tentang Kami</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav horizontal"> <!-- Changed class to 'horizontal' -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Content here -->
                <?= $this->renderSection('content') ?> 
            </div>
        </div>
    </div>

    <footer class="footer fixed-bottom">
        <p>Website UKM Polinela &copy; 2023</p>
    </footer>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

        <?php endif; ?>
        
</body>
</html>