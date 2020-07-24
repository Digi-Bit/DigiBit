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
    <!-- Owl carousel-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css'>
    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/dash.css">
    <!-- Workprocess responsive css -->
    <!-- <link rel="stylesheet" href="/css/responsive.css"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- Incind CSS -->
    <link rel="stylesheet" href="/slider/css/incind.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Hover Css -->
    <link rel="stylesheet" href="/css/hover-min.css">


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
                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
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

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slider-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slider-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slider-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <div class="row justify-content-center">
        <div class="col-lg-12 card-wrapper ct-example">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="display-3">Our Team</h2>
                </div>
                <div class="col-lg-12 justify-content-between about-us">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-lg-4">
                            <div class="card-body text-center pb-3">
                                <div class="container">
                                    <div class="card card-profile shadow">
                                        <div class="px-3">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="https://www.linkedin.com/in/">
                                                            <img src="" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5 pb-3">
                                                <h3>Ritwik Sinha</h3>
                                                <div class="h5 font-weight-400">Mentor</div>
                                                <small>Ritwik is a full stack developer and has worked
                                                    with many organisation. Ritwik is also an
                                                    active <br> member of Indian startup ecosystem with a deep
                                                    interest in entrepreneurship.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body text-center pb-3">
                                <div class="container">
                                    <div class="card card-profile shadow">
                                        <div class="px-3">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="https://www.linkedin.com/in/">
                                                            <img src="" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5 pb-3">
                                                <h3>Rishab Sharma</h3>
                                                <div class="h5 font-weight-400">Mentor</div>
                                                <small>Rishab is a Technology lover and Start-Up enthusiast. He aims
                                                    to provide innovative and
                                                    sustainable tech solutions to complex problems. He co-founded
                                                    DigiBit with the same
                                                    vision.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body text-center pb-3">
                                <div class="container">
                                    <div class="card card-profile shadow">
                                        <div class="px-4">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="https://www.linkedin.com/in/">
                                                            <img src="" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5 pb-3">
                                                <h3>Devansh Pundir</h3>
                                                <div class="h5 font-weight-400">Mentor</div>
                                                <small class="mt-0 pt-0">Devansh fascination towards technology led
                                                    him to launch DigiBit
                                                    for young engineers.He believes that the even of largest of
                                                    problems can be solved by right
                                                    use of technology.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body text-center">
                                <div class="container">
                                    <div class="card card-profile shadow">
                                        <div class="px-4">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="https://www.linkedin.com/in/">
                                                            <img src="" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5 pb-3">
                                                <h3>Rahul Chauchan</h3>
                                                <div class="h5 font-weight-400">Marketing and Communication Manager
                                                </div>
                                                <div>
                                                    <small>Rahul has about 2 years of experience in
                                                        Digital Marketing.He was earlier
                                                        associated with BW Businessworld Media Pvt. Ltd. And has
                                                        worked closely in the startup
                                                        ecosystem.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body text-center pb-3">
                                <div class="container">
                                    <div class="card card-profile shadow">
                                        <div class="px-3">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="https://www.linkedin.com/in/">
                                                            <img src="" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5 pb-3">
                                                <h3>Himanshu Singh</h3>
                                                <div class="h5 font-weight-400">Design Thinking Manager</div>
                                                <small>Himanshu is visual artist and a web designer. He has worked
                                                    in-house and remotely on many
                                                    project. User Experience and problem solving are central
                                                    everything he do.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body text-center pb-3">
                                <div class="container">
                                    <div class="card card-profile shadow">
                                        <div class="px-3">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="https://www.linkedin.com/in/">
                                                            <img src="" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5 pb-3">
                                                <h3>Kunal Ghosh</h3>
                                                <div class="h5 font-weight-400">Data Engineer</div>
                                                <small>Kunal is a Community person and also holds Bachelor's degree
                                                    in Computer Science.
                                                    With extensive experience in Data Science, Cloud and Analytics
                                                    he belive in producing good ROI
                                                    for the business.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card-body text-center">
                                <div class="container">
                                    <div class="card card-profile shadow h-100">
                                        <div class="px-5">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="https://www.linkedin.com/in/">
                                                            <img src="" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5 pb-3">
                                                <h3>Pranjali Singh</h3>
                                                <div class="h5 font-weight-400">Graphic Designer</div>
                                                <div>
                                                    <small>Pranjali is a graphic designer, caricature and sketch
                                                        artist. She is proficient in
                                                        Graphic design, interactive design &amp; illustration.She
                                                        has successfully managed and
                                                        coordinated graphic design projects.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>

</html>