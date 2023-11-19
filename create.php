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
            <h2>Tambah Produk</h2>
            <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name Produk</span>
                    <input type="text" class="form-control" name="name" placeholder="Sabxxx" aria-label="name_produk"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Rp</span>
                    <input type="number" class="form-control" name="harga" placeholder="harga" aria-label="name_produk"
                        aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Input Image Produk</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>
                <button name="submit" class="col-12 btn btn-outline-secondary">Tambah Produk</button>
            </form>
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