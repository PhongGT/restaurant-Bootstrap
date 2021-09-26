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
    <title>Manage Order</title>
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
            <div class="row"></div>
            <div class="row">
                <table class="table mb-0">
                    <thead class="border-0">
                        <tr class="ms-1">
                            <th scope="col">S.N.</th>
                            <th scope="col">Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty.</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order Data</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="col-md-me">1</th>
                            <td class="col-md-1">Mixed Pizza</td>
                            <td class="col-md-1">10.00</td>
                            <td class="col-md-me">2</td>
                            <td class="col-md-me">20.00</td>
                            <td class="col-md-2">2020-11-30 01:01:17</td>
                            <td class="col-md-1 text-success">Delivered</td>
                            <td class="col-md-1">Jana Bush</td>
                            <td class="col-md-2">+1(562) 101-2028</td>
                            <td>tydujy@mailinator.com</td>
                            <td class="col-md-2">Minima iure ducimus</td>
                            <td><button class="btn btn-primary bg-success">Update Order</button></td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-md-me">2</th>
                            <td class="col-md-1">Mixed Pizza</td>
                            <td class="col-md-1">10.00</td>
                            <td class="col-md-me">2</td>
                            <td class="col-md-me">20.00</td>
                            <td class="col-md-2">2020-11-30 01:01:17</td>
                            <td class="col-md-1 text-success">Delivered</td>
                            <td class="col-md-1">Jana Bush</td>
                            <td class="col-md-2">+1(562) 101-2028</td>
                            <td>tydujy@mailinator.com</td>
                            <td class="col-md-2">Minima iure ducimus</td>
                            <td><button class="btn btn-primary bg-success">Update Order</button></td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-md-me">3</th>
                            <td class="col-md-1">Sadeko Momo</td>
                            <td class="col-md-1">6.00</td>
                            <td class="col-md-me">3</td>
                            <td class="col-md-me">18.00</td>
                            <td class="col-md-2">2020-11-30 03:49:48</td>
                            <td class="col-md-1 text-danger">Cancelled</td>
                            <td class="col-md-1">Bradley Farrell</td>
                            <td class="col-md-2">+1(576) 504-4657</td>
                            <td>zuhafiq@mailinator.com</td>
                            <td class="col-md-2">Duis aliqua Qui lor</td>
                            <td><button class="btn btn-primary bg-success">Update Order</button></td>
                        </tr>
                    </tbody>
                </table>
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