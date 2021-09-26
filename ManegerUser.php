<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
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
                <h1 class="fw-bold mb-5 mt-4">Manage Users</h1>
            </div>
            <div class="row col-md-4 p-4 mb-5">
                <button type="button" class="btn btn-primary">Add New Users</button>
            </div>
            <table class="table mb-0">
                <thead class="border-0">
                    <tr class="ms-1">
                        <th scope="col">S.N.</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>twitter</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Administrator</td>
                        <td>admin</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
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