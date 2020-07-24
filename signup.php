<?php


$showAlert  = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $media = $_POST["media"];



    // $exists = false;

    $existSql = "SELECT * FROM `db` WHERE name = '$name'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if ($numExistRows > 0) {
        $showError = " name is already exist";
    } else {
        $exists = false;

        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `db` ( `name`, `email`, `contact`, `password`, `cpassword`, `media`) VALUES ( '$name', '$email', '$contact', '$password', '$cpassword', '$media')";


            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>| DIGIBIT | </title>
    <meta name="author" content="IncubateIND">

    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fellows/css/styles-merged.css">
    <link rel="stylesheet" href="fellows/css/style.min.css">
    <link rel="stylesheet" href="fellows/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Favicon -->
    <link rel="icon" href="images/logo.jpeg">



</head>

<body>
    <?php include 'partials/_dbconnect.php' ?>




    <header role="banner" class="probootstrap-header fixed-top">
        <div class="container-fluid">
            <a href="index.php" class="probootstrap-logo"><img src="images/logo.jpeg" style="width:200px;"></a>


            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs">
                <ul class="probootstrap-main-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <!-- <li><a href="#mentor">Mentors</a></li> -->
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="extra-text visible-xs">
                    <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>


                </div>
            </nav>
        </div>


    </header>




    <div class="probootstrap-main-content">
        <?php
        if ($showAlert) {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You can login now.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> ';
        }
        if ($showError) {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Please signup again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> ';
        }
        ?>



        <section class="for-you" style="margin-top: 70px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <form method="POST" action="signup.php">
                            <div class="form-group">
                                <label for="">Full Name: <span style="color:red;"> *</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Email address: <span style="color:red;"> *</span></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="eg. abc@xyz.com" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Contact: <span style="color:red;"> *</span></label>
                                        <input type="number" class="form-control" name="contact" id="ph" placeholder="Only 10 digits of your mobile number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Password <span style="color:red;"> *</span></label>
                                        <input type="text" class="form-control" name="password" id="dob" placeholder="test@123" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Confirm Password<span style="color:red;">
                                                *</span></label>
                                        <input type="text" class="form-control" name="cpassword" id="ct" placeholder="test@123" required>
                                    </div>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="fw">Where did you hear about DIGIBIT
                                        Technology Program?</label>
                                    <input type="text" class="form-control" name="media" id="fw">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" role="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div id="contactus" class="probootstrap-footer-spacer"></div>
    <footer class="probootstrap-footer" id="contact">
        <div class="probootstrap-footer-section">
            <div class="container">
                <div class="row mb80">
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget">
                            <h3>About Us</h3>
                            <p>DIGIBIT Technology Program is one of its kind, exclusive program for aspiring
                                developers, coders, hackers, designers and innovators to develop their skills, and
                                work/intern with senior technology leaders and industry experts.</p>
                            <p><a href="" target="_blank" class="btn btn-ghost btn-ghost-white btn-sm">Know More</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="probootstrap-link-wrap probootstrap-footer-widget">
                            <h3>Resources</h3>
                            <ul>
                                <!-- <li><a href="#mentor">Mentors</a></li> -->
                                <!-- <li><a href="https://goo.gl/forms/LY3DkiMDghAcOc3M2" target="_blank">Apply for Fellowship</a></li> -->
                                <!-- <li><a href="https://goo.gl/forms/LY3DkiMDghAcOc3M2" target="_blank">Be the Mentor</a></li> -->
                                <li><a href="http://incubateind.com" target="_blank">DIGIBIT</a></li>
                                <li><a href="https://techxty.com" target="_blank">Techxty</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget">
                            <h3>Connect with us</h3>
                            <ul class="probootstrap-footer-social">
                                <li><a href="https://twitter.com/incubateind" target="_blank"><i class="icon-twitter"></i></a></li>
                                <li><a href="http://facebook.com/IncubateIND/" target="_blank"><i class="icon-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/incubateind" target="_blank"><i class="icon-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/incubateindia/" target="_blank"><i class="icon-instagram2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget">
                            <h3>Contact Us</h3>
                            <br>
                            <p>
                                <b>Ritwik Sinha</b><br> rittiksinha12@gmail.com <br> +91-8882250750
                            </p>
                            <p>
                                <b>Rishab Sharma</b><br> Rishabsharma2890@.com
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
    </div>


    <!-- <script src="js/scripts.min.js"></script> -->
    <script src="/fellows/js/main.min.js"></script>
    <script src="/fellows/js/custom.js"></script>

    <script>
        $(function() {
            $('input[name="Date of Birth"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1950,
                maxYear: 2010
            });
        });
    </script>


    <script type="text/javascript">
        function yesnoCheck() {
            if (document.getElementById('st').checked) {
                document.getElementById('stselect').style.display = 'block';
            } else {
                document.getElementById('stselect').style.display = 'none';
            }
        }
    </script>
</body>

</html>