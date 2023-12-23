<?php
include("Koneksi.php");

if (isset($_POST['Hapus'])) {
    $hapus = mysqli_query($koneksi, 'SELECT * DELETE FROM tb_mahasiswa');
    if ($hapus) {
        header('Location: Tabel.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

if (isset($_GET['NIMa'])) {
    $nimToDelete = $_GET['NIMa'];
    $hapusSatu = mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE NIM = '$nimToDelete'");
    if ($hapusSatu) {
        header('Location: Tabel.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="stylehalaman.css">
        
    </head>
    <body>
    <div id="wrapper">
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Imissu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="Index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Welcome</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item active">
        <a class="nav-link" href="TABEL.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Table</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="Halamanawal.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Logout</span></a>
    </li>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<dotlottie-player src="https://lottie.host/632cd1fc-181e-43eb-badd-d707a8dec2d4/WsInDlxz5z.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        </ul>
    <li class="nav-item active">
            </li>
    <div class="wrapper">
    <div id="mahasiswa-container">
        <h2>Daftar Mahasiswa</h2>
        <table id="mahasiswa-table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tlp</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                <?php
                    $show = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
                    if (!$show){
                        echo "Error: " . mysqli_error($koneksi);
                        } else {
                        while ($data = mysqli_fetch_array($show)){?>
                        <tr>
                                    <td><?php echo $data['NIM']; ?></td>
                                    <td><?php echo $data['Nama']; ?></td>
                                    <td><?php echo $data['Tlp']; ?></td>
                                    <td><?php echo $data['Email']; ?></td>
                                    <td>
                                    <!-- Form for individual delete button -->
                                    <form method="post" action="">
                                        <input type="hidden" name="id_mahasiswa" value="<?php echo $data['NIM']; ?>">
                                        <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?NIMa=<?php echo $data['NIM']; ?>" class="btn btn-danger" role="button">Delete</a>
                                    </form>
                                    <a href="Edit.php?NIMa=<?php echo $data['NIM']; ?>" class="btn btn-danger">Ubah</a>
                                </td>
                            </tr>
                            <?php 
                            }
                            }
                            ?>
                        </tbody>
        </table>
        
    </div>
    <form id="mahasiswa-form" method="post" action="">
    <button type="submit" name="Hapus" class="btn">Hapus Semua</button>
    </form>
<script>src="js2.js"></script>
</body>
</html>