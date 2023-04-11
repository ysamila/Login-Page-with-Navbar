<!DOCTYPE html>
<html lang="en">
<!-- Hello I'm a commit from github or from my peers  -->
<!-- This is a comment from my local device -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="http://visvistravel.ph/wp-content/uploads/2023/03/visvis-bg-modified.png">
    <link rel="stylesheet" href="style.css">
    <title>Visvis Travel inc. | Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <div class="container-fluid ">
            <a class="navbar-brand" href="http://visvistravel.ph">
                <img src="http://visvistravel.ph/wp-content/uploads/2023/03/visvis-bg-modified.png" alt="visvis-logo" width="80" height="80" class="d-inline-block align-text-top">
            </a>
            <span><a href="http://visvistravel.ph/" class="brandname" target="_blank">Visvis Travel Inc.</a></span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse" id="navbar">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tour Packages
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hotels & Resorts
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Laguna</a></li>
                            <li><a class="dropdown-item" href="#">Batangas</a></li>
                            <li><a class="dropdown-item" href="#">Boracay</a></li>
                            <li><a class="dropdown-item" href="#">Palawan</a></li>
                            <li><a class="dropdown-item" href="#">Siargao</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn sign-up" data-bs-toggle="modal" data-bs-target="#ModalForm">Sign up</button>
                    </li>
                    <li>
                        <button type="button" class="btn signin btn-primary" data-bs-toggle="modal" data-bs-target="#ModalForm">Sign in</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!--Sign in Modal -->
    <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered signup-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 signup-content">
                                <form class=" row row-cols-lg-auto g-3 d-flex justify-content-center">
                                    <div class="myform-header text-center">
                                        <img src="http://visvistravel.ph/wp-content/uploads/2023/03/visvis-bg-modified.png" alt="visvis-logo" width="80" height="80" class="d-inline-block align-text-top">
                                        <h3>Welcome Back to Visvis Travel Inc.</h3>
                                        <h5>Sign in your account</h5>
                                    </div>
                                    <div class="col-10">

                                        <label>Email</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Email" placeholder="Enter your Email">
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="password" placeholder="Enter your password">
                                        </div>
                                    </div>

                                    <div class="col-10 d-flex justify-content-between"">
                                <div class=" form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                    </div>
                                    <div>
                                        <p><a href="index.php">Forgot Password?</a></p>
                                    </div>
                            </div>

                            <div class="col-10 d-grid">
                                <button type="submit" class="btn btn-success">Sign in</button>
                            </div>
                            <br>
                            <p class="text-center">Don't have an account? <a href="index.php"> Sign up here.</a></p>
                            </form>
                        </div>

                        <div class="col-lg-5 signup-img ">

                        </div>
                    </div>
                </div>


                <!-- <div class="modal-body">
                    <div class="row myform">
                        <div class="myform-header text-center">
                            <img src="http://visvistravel.ph/wp-content/uploads/2023/03/visvis-bg-modified.png" alt="visvis-logo" width="80" height="80" class="d-inline-block align-text-top">
                            <h2>Welcome Back to Visvis Travel Inc.</h2>
                            <h5>Sign in to your account</h5>
                        </div>

                        <form class=" row row-cols-lg-auto g-3 d-flex justify-content-center">
                            <div class="col-10">

                                <label>Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="Email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="col-10">
                                <label>Password</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="password" placeholder="Enter your password">
                                </div>
                            </div>

                            <div class="col-10 d-flex justify-content-between"">
                                <div class=" form-check">
                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                            </div>
                            <div>
                                <p><a href="index.php">Forgot Password?</a></p>
                            </div>
                    </div>

                    <div class="col-10 d-grid">
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                    <br>
                    <p class="text-center">Don't have an account? <a href="index.php"> Sign up here.</a></p>
                    </form>
                </div> -->
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>