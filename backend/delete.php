<?php
require './../config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $proses = mysqli_query($db_connect, "DELETE FROM products WHERE id = $id");

    if ($proses) {
        header("Location: ../../web-programming-course/show.php?msg=succes");
    } else {
        echo "Error menghapus rekaman: " . mysqli_error($db_connect);
    }
} else {
    echo "Tidak ada ID yang diberikan untuk penghapusan.";
}
?>