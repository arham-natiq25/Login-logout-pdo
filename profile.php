<?php
session_start();
if(!isset($_SESSION['logged_in'])){
    header("location:index.php?error=Please login to your account");
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
                            data-bs-target="#changepassword">Change Password</a>
                        <a class="nav-link text-white" href="signout.php">Sign Out</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container py-4">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Welcome Arham</h1>
                <p class="col-md-8 fs-4">Welcome To Our Web Page Here is Your All details</p>
            </div>
        </div>


        <!-- change password -->


        <!-- Modal -->
        <div class="modal fade" id="changepassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign Up for New Account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="oldpassword" class="form-label">Enter Old Password</label>
                                <input type="password" class="form-control" id="oldpassword" name="oldpassword">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Enter New Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="conpass" class="form-label">Conform Password</label>
                                <input type="password" class="form-control" id="conpass" name="conpass">
                            </div>
                            <button type="submit" class="btn btn-primary">Reset</button>
                        </form>
                    </div>
                    <div class="modal-footer ">

                    </div>
                </div>
            </div>
        </div>
        <!-- change password -->

        <!-- link change pass -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <form>

                    <h1>Change Password</h1>
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="conpass" class="form-label">Conform Password</label>
                        <input type="password" class="form-control" id="conpass" name="conpass">
                    </div>
                    <button type="submit" class="btn btn-primary">Password changed</button>
                </form>
            </div>
        </div>

        <!-- link change pass -->

    </div>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>

</body>

</html>