<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE HTML>

<html>

<head>
    <title>About Us - TravelX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="control/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="control/css/noscript.css" />
    </noscript>
</head>

<body class="left-sidebar is-preload">
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
                            <li><a href="#">Exotic Beaches</a></li>
                            <li><a href="#">Mountain Adventures</a></li>
                            <li><a href="#">Cultural Tours</a></li>
                            <li>
                                <a href="#">More Options &hellip;</a>
                                <ul>
                                    <li><a href="#">Romantic Getaways</a></li>
                                    <li><a href="#">Family Trips</a></li>
                                    <li><a href="#">Luxury Cruises</a></li>
                                    <li><a href="#">City Breaks</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Adventure Trips</a></li>
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
                <div class="row gtr-200">
                    <div class="col-4 col-12-mobile" id="sidebar">
                        <hr class="first" />
                        <section>
                            <header>
                                <h3><a href="#">Our Commitment</a></h3>
                            </header>
                            <p>
                                At TravelX, we believe in creating unforgettable travel experiences. Our team is
                                dedicated to ensuring every journey is tailored to meet your unique desires and
                                expectations.
                            </p>
                            <footer>
                                <a href="#" class="button">Learn More</a>
                            </footer>
                        </section>
                        <hr />
                        <section>
                            <header>
                                <h3><a href="#">Why Choose Us</a></h3>
                            </header>
                            <p>
                                We offer personalized travel planning and support to make your dream vacation a reality.
                            </p>
                            <div class="row gtr-50">
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="view/images/pic07.jpg" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Experienced Team</h4>
                                    <p>
                                        Our travel experts have years of experience in the industry.
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="view/images/pic12.jpg" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Tailored Packages</h4>
                                    <p>
                                        We create travel packages that are customized to your preferences.
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="view/images/pic16.jpg" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>24/7 Support</h4>
                                    <p>
                                        We provide round-the-clock support to assist you during your trip.
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="view/images/pic13.jpg" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Global Reach</h4>
                                    <p>
                                        We have connections with top service providers around the world.
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="view/images/pic01.jpg" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Customer Satisfaction</h4>
                                    <p>
                                        Our clients' satisfaction is our top priority.
                                    </p>
                                </div>
                            </div>
                            <footer>
                                <a href="#" class="button">Discover More</a>
                            </footer>
                        </section>
                    </div>
                    <div class="col-8 col-12-mobile imp-mobile" id="content">
                        <article id="main">
                            <header>
                                <h2><a href="#">About TravelX</a></h2>
                                <p>
                                    Your journey to unforgettable destinations starts here.
                                </p>
                            </header>
                            <a href="#" class="image featured"><img src="view/images/pic06.jpg" alt="" /></a>
                            <p>
                                TravelX is your trusted partner in crafting memorable travel experiences. From exotic
                                beaches to cultural expeditions, we provide a wide range of travel options tailored to
                                your preferences. Our team of experts works tirelessly to ensure every detail is
                                perfect, making your journey seamless and enjoyable.
                            </p>
                            <section>
                                <header>
                                    <h3>Our Mission</h3>
                                </header>
                                <p>
                                    Our mission is to make travel accessible and enjoyable for everyone. We strive to
                                    offer personalized services that cater to individual needs, ensuring a stress-free
                                    and delightful travel experience. Whether you're seeking adventure, relaxation, or
                                    cultural immersion, TravelX is here to make it happen.
                                </p>
                                <p>
                                    We believe in sustainable travel and are committed to promoting eco-friendly
                                    practices. Our partnerships with local communities help support and preserve the
                                    unique cultures and environments of the destinations we visit.
                                </p>
                            </section>
                            <section>
                                <header>
                                    <h3>What We Offer</h3>
                                </header>
                                <p>
                                    From the moment you contact us, our team is dedicated to providing exceptional
                                    service. We offer comprehensive travel planning, including accommodation,
                                    transportation, and activities, all tailored to your interests. Our 24/7 support
                                    ensures you have assistance whenever you need it, no matter where you are in the
                                    world.
                                </p>
                            </section>
                        </article>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic07.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Expert Guides</a></h3>
                        </header>
                        <p>
                            Our guides are knowledgeable and passionate, ready to show you the hidden gems of every
                            destination.
                        </p>
                    </article>
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic08.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Tailored Experiences</a></h3>
                        </header>
                        <p>
                            We design unique itineraries based on your preferences, ensuring every trip is a
                            personalized adventure.
                        </p>
                    </article>
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic09.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Seamless Travel</a></h3>
                        </header>
                        <p>
                            From start to finish, we handle all the details so you can focus on enjoying your journey.
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
                                        <h3><a href="#">Top 10 Beach Destinations</a></h3>
                                    </header>
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Hiking Trails for Beginners</a></h3>
                                    </header>
                                    <span class="timestamp">6 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Cultural Expeditions</a></h3>
                                    </header>
                                    <span class="timestamp">Yesterday</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Luxury Cruise Packages</a></h3>
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