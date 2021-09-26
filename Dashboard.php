<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Home</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <ul class="nav justify-content-center border-bottom border-1 border-secondary">
                <li class="nav-item">
                    <a class="nav-link" href="./Dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./ManegerUser.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./ManegerCategory.php">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./ManegerFood.php">Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./ManegerOrder.php">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container-fluid bg-gray">
        <div class="row  justify-content-center ">
            <h2 class="fw-bold ms-5 mb-5 mt-4 width-80">Dashboard</h2>
            <div class="col-md-2 mx-2 mb-5 bg-light text-center">
                <h2 class="mt-2">4</h2>
                <h6 class="mb-3">Category</h6>
            </div>

            <div class="col-md-2 mx-2 mb-5 bg-light text-center">
                <h2 class="mt-2">6</h2>
                <h6 class="mb-3">Food</h6>
            </div>

            <div class="col-md-2 mx-2 mb-5 bg-light text-center">
                <h2 class="mt-2">3</h2>
                <h6 class="mb-3">Total Orders</h6>
            </div>

            <div class="col-md-2 mx-2 mb-5 bg-light text-center">
                <h2 class="mt-2">$36.00</h2>
                <h6 class="mb-3">Revenue Generated</h6>
            </div>
        </div>
    </div>
    <div class="row bg-pink">
        <p class="text-center my-1 color-white">
            All rights reserved. Designed By<a href="#"> CSE.TLU</a>
            <br>
        </p>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>


</body>

</html>