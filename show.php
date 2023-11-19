<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div style="height:100vh" class="container d-flex align-items-center justify-content-center">
        <div class="wrapper col-7">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Data produk</h1>
                <a href="#">Your Profile</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama produk</th>
                        <th>harga</th>
                        <th>gambar produk</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require './config/db.php';

                    $products = mysqli_query($db_connect, "SELECT * FROM products");
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($products)) {
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $row['name']; ?>
                            </td>
                            <td>
                                <?= $row['price']; ?>
                            </td>
                            <td><a href=".<?= $row['image']; ?>" target="_blank">unduh</a></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                                <a href="./backend/delete.php?id=<?= $row['id']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php"><button type="button" class="btn btn-outline-secondary col-12">Tambah Data</button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>