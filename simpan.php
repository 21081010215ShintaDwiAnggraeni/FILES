<?php

if ($_POST) {
    //variable penampung
    $buku = $_POST['kodebuku'] .
         "-" . $_POST['judul'] .
         "-" . $_POST['pengarang'] .
         "-" . $_POST['penerbit'] .
         "-" . $_POST['tahunterbit'] . 
         "-" . $_POST['file'] . "\n";
    //simpan ke file
    $file_name = "buku.txt";

    //memindahkan file
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

    if (file_put_contents($file_name, $buku, FILE_APPEND) > 0) {
        echo "data berhasil disimpan";
    } else {
        echo "data gagal disimpan";
    }

    echo '<br><br><a href="form.php">Kembali ke Form</a>';
    echo '<br><br><a href="baca.php">Lihat Data</a>';
}