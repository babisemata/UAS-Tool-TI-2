<?php
include("Koneksi.php");

if (isset($_GET['NIMa'])) {
    $nimToUpdate = $_GET['NIMa'];

    // Ambil data mahasiswa dari database berdasarkan NIM
    $result = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE NIM = '$nimToUpdate'");
    $data = mysqli_fetch_array($result);

    // Tampilkan formulir untuk mengubah data
    ?>
    <form method="post" action="ProsesEdit.php">
        <input type="hidden" name="nimToUpdate" value="<?php echo $nimToUpdate; ?>">
        <div class="form-group">
            <label for="newNama">Nama:</label>
            <input type="text" class="form-control" id="newNama" name="newNama" value="<?php echo $data['Nama']; ?>">
        </div>
        <div class="form-group">
            <label for="newTlp">Telepon:</label>
            <input type="text" class="form-control" id="newTlp" name="newTlp" value="<?php echo $data['Tlp']; ?>">
        </div>
        <div class="form-group">
            <label for="newEmail">Email:</label>
            <input type="text" class="form-control" id="newEmail" name="newEmail" value="<?php echo $data['Email']; ?>">
        </div>
        <button type="submit" name="Update" class="btn btn-primary">Update</button>
    </form>
    <?php
}
?>
