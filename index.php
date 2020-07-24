



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e9a685ceb.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- fontaweesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- material-icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="logo1.jpeg">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/style.css">



    <title>Digibit.org</title>

</head>

<body>
<?php include 'partials/_dbconnect.php' ?>
    



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Digibit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                    </li>



                </ul>
                <form class="d-flex" action="signup.php">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <a class="btn btn-outline-success mx-2" href="login.php"  type="submit">Login</a>
                    <a class="btn btn-outline-success mx-1" href="signup.php" type="submit">Signup</a>


                </form>
            </div>
        </div>
    </nav>
    <div class="container">


        <section class="text-gray-700 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="mb-0" style="font-size: 35px;"><b>Think, Code</b></h1>
                    <h1 class="display-4 f-w-900">Connect</h1>
                    <div class="col-lg-9 description-text">


                        <p class="text-dark" style="font-size: 15px;">
                            <b>DIGIBIT</b> is India`s largest and fastest-growing
                            community of technology innovators including
                            startups and student innovators.
                        </p>
                        <a name="" id="" style="text-align: left;" class="btn btn-primary started mt-2"
                            href="signup.php" role="button">Get
                            Started</a>

                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="images/Digibit.png">
                </div>
            </div>
        </section>
    </div>

    <div class="row justify-content-center aos-init aos-animate" style="margin-bottom: 2rem;" data-aos="fade-in"
        data-aos-duration="1000">
        <div class="col-lg-12">
            <div class="partner">
                <h1>Gold Partners</h1>
                <div class="goldPartner">
                    <div id="matic">
                        <a href="https://matic.network/" target="_blank"><img src="images/matic.png" alt=""></a>
                    </div>
                    <div id="producthunt">
                        <a href="https://www.producthunt.com/" target="_blank"><img src="images/producthunt.png"
                                alt=""></a>
                    </div>
                    <div id="linode">
                        <a href="https://www.linode.com/" target="_blank"><img src="images/linode.svg" alt=""></a>
                    </div>
                    <div id="xyz">
                        <a href="https://gen.xyz/" target="_blank"><img src="images/xyz.png" alt=""></a>
                    </div>
                    <div class="replit">
                        <a href="https://repl.it/" target="_blank"><img src="images/replit.png" alt=""></a>
                    </div>
                    <div class="fold">
                        <a href="https://fold.money/" target="_blank"><img src="images/fold.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="background: #40e0d0;">
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
                        info@DigiBit.org
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>

</html>