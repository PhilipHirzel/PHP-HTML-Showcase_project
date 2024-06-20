<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Contact Us - TravelX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="control/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="control/css/noscript.css" />
    </noscript>
</head>

<body class="no-sidebar is-preload">
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
                            <li><a href="./subpages/dest-tropical.php">Tropical Paradise</a></li>
                            <li><a href="./subpages/dest-mountain.php">Mountain Retreats</a></li>
                            <li><a href="./subpages/dest-city.php">City Tours</a></li>
                            <li><a href="./subpages/dest-beach.php">Beach Resorts</a></li>
                            <li>
                                <a href="#">More Options &hellip;</a>
                                <ul>
                                    <li><a href="./subpages/dest-luxury.php">Luxury Cruises</a></li>
                                    <li><a href="./subpages/dest-adventure.php">Adventure Travel</a></li>
                                    <li><a href="./subpages/culture.php">Cultural Journeys</a></li>
                                    <li><a href="./subpages/eco-tour.php">Eco Tourism</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="view/subpages/my-account.php">Account</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

        </div>

        <!-- Main -->
        <div class="wrapper style1">

            <div class="container">
                <article id="main" class="special">
                    <header>
                        <h2><a href="#">Contact TravelX</a></h2>
                        <p>
                            Reach out to us for any travel inquiries or support
                        </p>
                    </header>
                    <section>
                        <header>
                            <h3>Get in Touch</h3>
                        </header>
                        <p>
                            Please fill out the form below or reach out to us via phone or email. We look forward to
                            helping you with all your travel needs.
                        </p>
                        <form method="post" action="#">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="name" id="name" value="" placeholder="Name" />
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subject" id="subject" value="" placeholder="Subject" />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="message" placeholder="Enter your message"
                                        rows="6"></textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Send Message" class="primary" /></li>
                                        <li><input type="reset" value="Clear" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section>
                        <header>
                            <h3>Our Contact Information</h3>
                        </header>
                        <p>
                            <strong>Phone:</strong> (123) 456-7890<br />
                            <strong>Email:</strong> contact@travelx.com<br />
                            <strong>Address:</strong> 123 Travel Road, Adventure City, Wonderland
                        </p>
                    </section>
                </article>
                <hr />
                <div class="row">
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic07.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Expert Travel Tips</a></h3>
                        </header>
                        <p>
                            Get the latest travel tips from our experienced travel advisors.
                        </p>
                    </article>
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic08.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Customer Stories</a></h3>
                        </header>
                        <p>
                            Read about the amazing experiences our customers have had with TravelX.
                        </p>
                    </article>
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic09.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Travel Deals</a></h3>
                        </header>
                        <p>
                            Check out our latest travel deals and offers.
                        </p>
                    </article>
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
                                    Planning our vacation with TravelX was a breeze! #TravelXperience
                                    <span class="timestamp">5 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Incredible support and service from the TravelX team. #HappyTraveler
                                    <span class="timestamp">30 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Our family trip was unforgettable, thanks to TravelX! #FamilyFun
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Discovering new places with TravelX is the best! #ExploreMore
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
                                <h3>Connect with Us</h3>
                            </header>
                            <p>Follow us on social media for the latest travel updates and special offers!</p>
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