<?php
if (isset($_POST['Update'])) {
    $nimToUpdate = $_POST['nimToUpdate'];
    $newNama = $_POST['newNama'];
    $newTlp = $_POST['newTlp'];
    $newEmail = $_POST['newEmail'];

    // Implementasikan logika perubahan data
    $updateQuery = "UPDATE tb_mahasiswa SET Nama='$newNama', Tlp='$newTlp', Email='$newEmail' WHERE NIM='$nimToUpdate'";
    $result = mysqli_query($koneksi, $updateQuery);

    if ($result) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Redirect ke halaman tabel setelah melakukan perubahan
    header('Location: Tabel.php');
    exit;
}
?>