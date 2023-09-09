<?php
session_start();
if(isset($_SESSION['logged_in'])){
    header("location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Brand</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-lg-auto">
                        <a class="nav-link text-white" aria-current="page" href="#" data-bs-toggle="modal"
                            data-bs-target="#login">Log In</a>
                        <a class="nav-link text-white" aria-current="page" href="#" data-bs-toggle="modal"
                            data-bs-target="#signup">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container py-4">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Welcome Visitor</h1>
                <p class="col-md-8 fs-4">Welcome To Our Web Page Lorem ipsum dolor sit amet.</p>
                <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal"
                    data-bs-target="#signup">Join Our Team</button>
            </div>
        </div>


        <!-- signin box -->

        <!-- Modal -->
        <div class="modal fade " id="signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign Up for New Account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="meform" method="POST" action="signup.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    name="email">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="conpass" class="form-label">ConformPassword</label>
                                <input type="password" class="form-control" id="conpass" name="cpass">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox">
                                <label class="form-check-label" for="checkbox">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Me Up</button>

                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <!-- signup box -->

        <!-- login box -->

        <!-- Modal -->
        <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Log In to Account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="meform" method="POST" action="auth.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox">
                                <label class="form-check-label" for="checkbox">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </form>
                        <a href="" data-bs-toggle="modal" data-bs-target="#resetPassword">
                            <p>Forget Your Password? reset Password</p>
                        </a>
                    </div>
                    <div class="modal-footer me-auto ms-auto">

                    </div>
                </div>
            </div>
        </div>
        <!-- login box -->

        <!-- resetPassword -->
        <div class="modal fade" id="resetPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Send Me reset Password link</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Send Password</button>
                        </form>
                    </div>
                    <div class="modal-footer ">

                    </div>
                </div>
            </div>
        </div>

        <!-- resetPassword -->





        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="script.js"></script>
</body>

</html>