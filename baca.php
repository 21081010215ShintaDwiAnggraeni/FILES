<?php

echo "<h3>Data Buku</h3>";
$file_name = "buku.txt";

$read = file($file_name); //arr

echo "<table border='1'>
    <tr>
        <td>Kode Buku</td>
        <td>Judul</td>
        <td>Pengarang</td>
        <td>Penerbit</td>
        <td>Tahun Terbit</td>
        <td>Cover Buku</td>
    </tr>";

foreach ($read as $buku) {
    $data_book = explode("-", $buku); //arr
    echo "<tr>";
    echo "<td>$data_book[0]</td>";
    echo "<td>$data_book[1]</td>";
    echo "<td>$data_book[2]</td>";
    echo "<td>$data_book[3]</td>";
    echo "<td>$data_book[4]</td>";
    echo "<td><img src='uploads/" . $data_book[5]."'width='100'height='150'></td>";
    echo "<td>
        <a href='update.php?kode_buku=" . $data_book[0] . "'>Update</a> <br>
        <a href='delete.php?kode_buku=" . $data_book[0] . "'>Delete</a>
        </td>";
        echo "</tr>";
    echo "</tr>";
}
echo "</table>";

echo '<br><br><a href="form.php">Kembali ke Form</a>';