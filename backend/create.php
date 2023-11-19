<?php

require './../config/db.php';

if (isset($_POST['submit'])) {

    global $db_connect;
    // mysqli_query($db_connect, "INSERT INTO products (name,price,image)
    //                 VALUES ('$name','$price','asdasd')");
    // echo "berhasil upload";
    // header("Location: ../../web-programming-course/show.php?msg=succes");

    $name = $_POST['name'];
    $price = $_POST['harga'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time() . '-' . md5(rand()) . '-' . $image;

    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/web-programming-course/upload/' . $randomFilename;

    $upload = move_uploaded_file($tempImage, $uploadPath);

    if ($upload) {
        mysqli_query($db_connect, "INSERT INTO products (name,price,image)
                    VALUES ('$name','$price','/upload/$randomFilename')");
        header("Location: ../../web-programming-course/show.php?msg=succes");
    } else {
        echo "gagal upload";
    }

}