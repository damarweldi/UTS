<?php
require './../config/db.php';

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['harga'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time() . '-' . md5(rand()) . '-' . $image;

    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/web-programming-course/upload/' . $randomFilename;

    $upload = move_uploaded_file($tempImage, $uploadPath);

    $proses = mysqli_query($db_connect, "UPDATE products
    SET name = '$name', price = '$price', image = '/upload/$randomFilename'
    WHERE id = '$id'");

    if ($proses) {
        header("Location: ../../web-programming-course/show.php?msg=succes");
    } else {
        echo "Error menghapus rekaman: " . mysqli_error($db_connect);
    }
} else {
    echo "Tidak ada ID yang diberikan untuk penghapusan.";
}
?>