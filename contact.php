<?php



$showAlert  = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $existSql = "SELECT * FROM `contact` WHERE firstname = '$firstname'    ";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if ($numExistRows > 0) {
        $showError = " firstname is already exist";
    } else {
        $exists = false;
    }
    $sql = "INSERT INTO `contact` ( `firstname`, `lastname`, `email`, `phone`, `message`) VALUES ( '$firstname', '$lastname', '$email', '$phone', '$message');
";
$result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
            else {
                $showError = "Fill again";
            }
}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


    <title>Digibit.org</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php' ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Digibit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>



                </ul>
                <form class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <a class="btn btn-outline-success mx-2" href="login.php" type="submit">Login</a>
                    <a class="btn btn-outline-success mx-1" href="signup.php" type="submit">Signup</a>


                </form>
            </div>
        </div>
    </nav>
    <?php
    if ($showAlert) {
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Thank you for getting in touch!</strong>
             
            <br>
            One of our colleagues will get back in touch with you soon!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> ';
    }
    if ($showError) {
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Please fill the form again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> ';
    }
    ?>
    <form method="POST" action="contact.php">
        <section class="text-gray-700 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">If you have any doubt, feel free to contact us
                        . We are here to help you with your problem.</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" name="firstname" placeholder="firstname" type="text">
                        </div>
                        <div class="p-2 w-1/2">
                            <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" name="lastname" placeholder="lastname" type="text">
                        </div>
                        <div class="p-2 w-1/2">
                            <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" name="email" placeholder="Email" type="email">
                        </div>
                        <div class="p-2 w-1/2">
                            <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" name="phone" placeholder="Phone" type="int">
                        </div>

                        <div class="p-2 w-full">
                            <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                        </div>
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <a class="text-indigo-500">digibit2890@email.com</a>
                            <p class="leading-normal my-5">New Delhi, India
                                <br>Greater Noida Sector 18
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>


    <footer style="background: #056f77;">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-md-4 mb-3">
                    <img class="w-30 mb-4 footer-logo" src="logo.jpg" alt="">

                </div>
                <div class="col-md-8">
                    <h2><b>DIGIBIT</b></h2>
                    <small style="font-size: 15px; font-family: Arial, Helvetica, sans-serif;">By providing a space for
                        the next generation of explorers to discover, create, and work
                        together to achieve collective goals and pursue shared ambitions, Digibit provides fertile
                        ground for networking and teamwork. We work on solving world’s greatest problems through
                        technology driven community of entrepreneurs, student and government. Digibit will be an
                        educational experience for participants of all levels. We have many projects from which
                        participants can learn entirely
                        new skills or platforms, and many mentors who will be able to share their knowledge acquired
                        with years of experience.
                        <br>
                        <br>
                        info@incubateind.com
                    </small>
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-sm-12">
                    2020 © All rights reserved by Digibit
                </div>
            </div>
        </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>