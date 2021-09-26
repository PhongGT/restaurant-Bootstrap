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
    <title>Manage Food</title>
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

    <div class="bg-gray">
        <div class="container">
            <div class="row col-md p-4 pt-5">
                <h1 class="fw-bold mb-5 mt-4">Manage Category</h1>
            </div>
            <div class="row col-md-2 p-4 mb-5">
                <button type="button" class="btn btn-primary">Add Category</button>
            </div>
            <table class="table mb-0 text-me">
                <thead class="border-0">
                    <tr class="ms-1">
                        <th scope="col">S.N.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Active</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="col-md-me">1</th>
                        <td>Mixed Pizza</td>
                        <td class="col-md-me">$10.00</td>
                        <td><img src="IMG/Pizza.jpg" alt="Pizza" class="img-me"></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td class="">
                            <button type="button" class="btn-primary btn btn-success  ">Update Category</button>
                            <button type="button" class="btn-primary btn btn-danger ">Delete Category</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="col-md-me">2</th>
                        <td>Best Burger</td>
                        <td class="col-md-me">$4.00</td>
                        <td><img src="IMG/Burger.jpg" alt="Burger" class="img-me"></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td> <button type="button" class="btn-primary btn btn-success">Update Category</button>
                            <button type="button" class="btn-primary btn btn-danger">Delete Category</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="col-md-me">3</th>
                        <td>Dumpling Specials</td>
                        <td class="col-md-me">$5.00</td>
                        <td><img src="IMG/Momo.jpg" alt="Momo" class="img-me"></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td> <button type="button" class="btn-primary btn btn-success">Update Category</button>
                            <button type="button" class="btn-primary btn btn-danger">Delete Category</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="col-md-me">4</th>
                        <td class="col-md-1">Administrator</td>
                        <td class="col-md-me">$52.00</td>
                        <td class="col-md-3"><a href="" class="text-decoration-none">Image not Added</a></td>
                        <td>No</td>
                        <td>Yes</td>
                        <td> <button type="button" class="btn btn-primary btn-success">Update Category</button>
                            <button type="button" class="btn btn-primary btn-danger">Delete Category</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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