<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Login - TravelX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="control/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="control/css/noscript.css" />
    </noscript>
</head>

<body class="right-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="index.php" id="logo">TravelX</a></h1>
                </header>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a href="#">Destinations</a>
                        <ul>
                            <li><a href="./view/subpages/dest-tropical.php">Tropical Paradise</a></li>
                            <li><a href="./view/subpages/dest-mountain.php">Mountain Retreats</a></li>
                            <li><a href="./view/subpages/dest-city.php">City Tours</a></li>
                            <li><a href="./view/subpages/dest-beach.php">Beach Resorts</a></li>
                            <li>
                                <a href="#">More Options &hellip;</a>
                                <ul>
                                    <li><a href="./view/subpages/dest-luxury.php">Luxury Cruises</a></li>
                                    <li><a href="./view/subpages/dest-adventure.php">Adventure Travel</a></li>
                                    <li><a href="./view/subpages/culture.php">Cultural Journeys</a></li>
                                    <li><a href="./view/subpages/eco-tour.php">Eco Tourism</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

        </div>
        <!-- Main -->
        <div class="wrapper style1">
            <div class="container">
                <div class="row gtr-200">
                    <div class="col-8 col-12-mobile imp-mobile" id="content">
                        <article id="main">
                            <header>
                                <h2><a href="#">Create an Account</a></h2>
                                <p>
                                    Let's Get to Know You
                                </p>
                            </header>



                            <form method="post" action="control/php/register-processor.php">
                                <div class="row gtr-uniform">
                                    <div class="col-12">
                                        <input type="text" name="first_name" id="first_name" placeholder="First Name"
                                            required />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="last_name" id="last_name" placeholder="Last Name"
                                            required />
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" id="email" placeholder="Email" required />
                                    </div>
                                    <div class="col-12">
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            required />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="address" id="address" placeholder="Address" required />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="housenumber" id="housenumber"
                                            placeholder="House Number" required />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="city" id="city" placeholder="City" required />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="postal_code" id="postal_code" placeholder="Postal Code"
                                            required />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="country" id="country" placeholder="Country" required />
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="Register" class="primary" />
                                    </div>
                                </div>
                            </form>


                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">

                    <!-- Tweets -->
                    <section class="col-4 col-12-mobile">
                        <header>
                            <h2 class="icon brands fa-twitter circled"><span class="label">Tweets</span></h2>
                        </header>
                        <ul class="divided">
                            <li>
                                <article class="tweet">
                                    TravelX helped us find the perfect honeymoon destination! #TravelGoals
                                    <span class="timestamp">5 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Amazing service and support throughout our trip. #TravelX
                                    <span class="timestamp">30 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Just booked our family vacation with TravelX. Can't wait! #FamilyTravel
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Exploring the world has never been easier. Thanks, TravelX! #Adventure
                                    <span class="timestamp">5 hours ago</span>
                                </article>
                            </li>
                        </ul>
                    </section>

                    <!-- Posts -->
                    <section class="col-4 col-12-mobile">
                        <header>
                            <h2 class="icon solid fa-file circled"><span class="label">Posts</span></h2>
                        </header>
                        <ul class="divided">
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Top Beach Destinations</a></h3>
                                    </header>
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Best Hiking Trails</a></h3>
                                    </header>
                                    <span class="timestamp">6 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Cultural Tours Guide</a></h3>
                                    </header>
                                    <span class="timestamp">Yesterday</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Luxury Cruises</a></h3>
                                    </header>
                                    <span class="timestamp">2 days ago</span>
                                </article>
                            </li>
                        </ul>
                    </section>

                    <!-- Photos -->
                    <section class="col-4 col-12-mobile">
                        <header>
                            <h2 class="icon solid fa-camera circled"><span class="label">Photos</span></h2>
                        </header>
                        <div class="row gtr-25">
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic10.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic11.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic12.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic13.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic14.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic15.jpg" alt="" /></a>
                            </div>
                        </div>
                    </section>

                </div>
                <hr />
                <div class="row">
                    <div class="col-12">

                        <!-- Contact -->
                        <section class="contact">
                            <header>
                                <h3>Get in Touch with Us</h3>
                            </header>
                            <p>Have questions or need help planning your trip? Reach out to us anytime!</p>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a>
                                </li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span
                                            class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span
                                            class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-pinterest"><span
                                            class="label">Pinterest</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a>
                                </li>
                                <li><a href="#" class="icon brands fa-linkedin-in"><span
                                            class="label">Linkedin</span></a></li>
                            </ul>
                        </section>

                        <!-- Copyright -->
                        <div class="copyright">
                            <ul class="menu">
                                <li>&copy; TravelX. All rights reserved.</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="control/js/jquery.min.js"></script>
    <script src="control/js/jquery.dropotron.min.js"></script>
    <script src="control/js/jquery.scrolly.min.js"></script>
    <script src="control/js/jquery.scrollex.min.js"></script>
    <script src="control/js/browser.min.js"></script>
    <script src="control/js/breakpoints.min.js"></script>
    <script src="control/js/util.js"></script>
    <script src="control/js/main.js"></script>

</body>

</html>