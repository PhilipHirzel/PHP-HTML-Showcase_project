<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Tropical Paradises - TravelX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../control/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../../control/cssnoscript.css" />
    </noscript>
</head>

<body class="right-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="../../index.php" id="logo">TravelX</a></h1>
                </header>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <li>
                        <a href="#">Destinations</a>
                        <ul>
                            <li><a href="../../view/subpages/dest-tropical.php">Tropical Paradise</a></li>
                            <li><a href="../../view/subpages/dest-mountain.php">Mountain Retreats</a></li>
                            <li><a href="../../view/subpages/dest-city.php">City Tours</a></li>
                            <li><a href="../../view/subpages/dest-beach.php">Beach Resorts</a></li>
                            <li>
                                <a href="#">More Options &hellip;</a>
                                <ul>
                                    <li><a href="#">Luxury Cruises</a></li>
                                    <li><a href="#">Adventure Travel</a></li>
                                    <li><a href="#">Cultural Journeys</a></li>
                                    <li><a href="#">Eco Tourism</a></li>
                                </ul>
                            </li>
                        </ul>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="../../view/subpages/my-account.php">Account</a></li>
                    <?php else: ?>
                        <li><a href="../../login.php">Login</a></li>
                    <?php endif; ?>
                    <li><a href="../../about-us.php">About Us</a></li>
                    <li><a href="../../contact.php">Contact</a></li>
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
                                <h2><a href="#">Tropical Paradises</a></h2>
                                <p>
                                    Escape to the most breathtaking tropical paradises around the world.
                                </p>
                            </header>
                            <section>
                                <header>
                                    <h3>Bali, Indonesia</h3>
                                </header>
                                <p>
                                    Known for its forested volcanic mountains, iconic rice paddies, beaches, and coral
                                    reefs, Bali is a tropical paradise that offers both tranquility and adventure.
                                </p>
                                <a href="#" class="image featured"><img src="../../view/images/bali.jpg"
                                        alt="Bali" /></a>
                                <a href="../../view/subpages/booking.php" class="button">Visit Bali</a>
                            </section>
                            <section>
                                <header>
                                    <h3>Seychelles</h3>
                                </header>
                                <p>
                                    With its beautiful beaches, clear blue waters, and lush greenery, Seychelles is a
                                    dream destination for those seeking a serene and picturesque escape.
                                </p>
                                <a href="#" class="image featured"><img src="../../view/images/seychelles.jpg"
                                        alt="Seychelles" /></a>
                                <a href="../../view/subpages/booking.php" class="button">Visit Seychelles</a>

                            </section>
                            <section>
                                <header>
                                    <h3>Fiji</h3>
                                </header>
                                <p>
                                    Fiji is known for its rugged landscapes, palm-lined beaches, and coral reefs with
                                    clear lagoons, making it a perfect destination for snorkeling, diving, and
                                    relaxation.
                                </p>
                                <a href="#" class="image featured"><img src="../../view/images/fiji.jpg"
                                        alt="Fiji" /></a>
                                <a href="../../view/subpages/booking.php" class="button">Visit Fiji</a>

                            </section>
                            <section>
                                <header>
                                    <h3>Bahamas</h3>
                                </header>
                                <p>
                                    The Bahamas is an idyllic destination with its stunning beaches, vibrant marine
                                    life, and numerous islands each offering unique experiences for travelers.
                                </p>
                                <a href="#" class="image featured"><img src="../../view/images/bahamas.jpg"
                                        alt="Bahamas" /></a>
                                <a href="../../view/subpages/booking.php" class="button">Visit the Bahamas</a>

                            </section>
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
                                    Just booked a trip to Bali with TravelX! #Excited
                                    <span class="timestamp">5 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Can't wait to relax in the Seychelles. #Paradise
                                    <span class="timestamp">30 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Our trip to Fiji was unforgettable, thanks TravelX! #Vacation
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    The Bahamas were a blast! Thanks for the great service, TravelX! #Adventure
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
                                        <h3><a href="#">Top 10 Tropical Destinations</a></h3>
                                    </header>
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Best Time to Visit Seychelles</a></h3>
                                    </header>
                                    <span class="timestamp">6 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Exploring Fiji's Coral Reefs</a></h3>
                                    </header>
                                    <span class="timestamp">Yesterday</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Bahamas Travel Guide</a></h3>
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
                                <a href="#" class="image fit"><img src="../../view/images/pic10.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="../../view/images/pic11.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="../../view/images/pic12.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="../../view/images/pic13.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="../../view/images/pic14.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="../../view/images/pic15.jpg" alt="" /></a>
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
    <script src="../../control/js/jquery.min.js"></script>
    <script src="../../control/js/jquery.dropotron.min.js"></script>
    <script src="../../control/js/jquery.scrolly.min.js"></script>
    <script src="../../control/js/jquery.scrollex.min.js"></script>
    <script src="../../control/js/browser.min.js"></script>
    <script src="../../control/js/breakpoints.min.js"></script>
    <script src="../../control/js/util.js"></script>
    <script src="../../control/js/main.js"></script>

</body>

</html>