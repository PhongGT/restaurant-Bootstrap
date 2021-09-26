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
    <title>Catagory</title>
</head>

<body>
    <div class="header container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <img src="IMG/Logo.png" alt="" class="image-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="./Home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./Category.php">Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./Food.php">Food</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </div>

    <div class="row ">
        <div class="col-md-12 bg-search">
            <nav class="navbar navbar-light pt-auto pb-auto h-100">
                <div class="container-fluid justify-content-center">
                    <form class="d-flex w-50">
                        <input class="form-control me-2" type="search" placeholder="Search for food..."
                            aria-label="Search">
                        <button class="btn btn-color" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid bg-gray">
        <div class="row">
            <div class="col-md text-center pt-5">
                <h2>Food Menu</h2>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-around">
                <div class="card mb-3 col-md-5 mx-2 rounded-3">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <img src="IMG/momo (2).jpg" class="img-food rounded-3" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Dumpling Specials</h5>
                                <p class="card-text mb-1">$5.00</p>
                                <p class="card-text mb-1">
                                    <small class="text-muted">Chiken Dumpling with herbs from Mountants</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-color">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 col-md-5 mx-2 rounded-3">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <img src="IMG/Burger2.jpg" class="img-food rounded-3" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body mb-1">
                                <h5 class="card-title mb-1">Burger</h5>
                                <p class="card-text mb-1">$4.00</p>
                                <p class="card-text mb-1">
                                    <small class="text-muted">Burger with Ham, Pineapple and lots of Cheese</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-color">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 col-md-5 mx-2 rounded-3">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <img src="IMG/momo (2).jpg" class="img-food rounded-3" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Sadeko Momo</h5>
                                <p class="card-text mb-1">$6.00</p>
                                <p class="card-text mb-1">
                                    <small class="text-muted">Best Spicy Momo for Winter</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-color">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 col-md-5 mx-2 rounded-3">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <img src="IMG/Pizza (2).jpg" class="img-food rounded-3" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Pizza</h5>
                                <p class="card-text mb-1">$10.00</p>
                                <p class="card-text mb-1">
                                    <small class="text-muted">Pizza with Chicken, Ham, Buff, Mushroom and
                                        Vegetables</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-color">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 col-md-5 mx-2 rounded-3">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <img src="IMG/Pizza (2).jpg" class="img-food rounded-3" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Pizza</h5>
                                <p class="card-text mb-1">$10.00</p>
                                <p class="card-text mb-1">
                                    <small class="text-muted">Pizza with Chicken, Ham, Buff, Mushroom and
                                        Vegetables</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-color">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-3 col-md-5 mx-2 rounded-3">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <img src="IMG/momo (2).jpg" class="img-food rounded-3" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Sadeko Momo</h5>
                                <p class="card-text mb-1">$6.00</p>
                                <p class="card-text mb-1">
                                    <small class="text-muted">Best Spicy Momo for Winter</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-color">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center  py-3 ">
            <div class="col-1"><a href=""><img src="IMG/fb.png" alt=""></a></div>
            <div class="col-1"><a href=""><img src="IMG/Instar.png" alt=""></a></div>
            <div class="col-1"><a href=""><img src="IMG/Twiter.png" alt=""></a></div>
        </div>

        <div class="row col">
            <p class="text-center">All right reserved. Design By<a href="#" class="text-decoration-none">CSE</a></p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>