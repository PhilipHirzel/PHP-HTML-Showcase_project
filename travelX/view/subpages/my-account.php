<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

// Include the processor to fetch bookings
include '../../model/fetch_bookings.php';
?>
<!DOCTYPE HTML>

<html>

<head>
    <title>My Account - TravelX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../control/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../../control/css/noscript.css" />
    </noscript>
</head>

<body class="right-sidebar is-preload" onload="displayUserEmail()">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">
            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="index.php" id="logo">TravelX</a></h1>
                    <p>Welcome, <?php echo htmlspecialchars($_SESSION['first_name'] . ' ' . $_SESSION['last_name']); ?>
                    </p>
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
                    </li>
                    <li><a href="../../contact.php">Contact</a></li>
                    <li><a href="my-account.php">My Account</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main -->
        <div class="wrapper style1">
            <div class="container">
                <div class="row gtr-200">
                    <div class="col-4 col-12-medium">
                        <!-- Sidebar -->
                        <div id="sidebar">
                            <section>
                                <h3>Your Account</h3>
                                <p>Manage your account details, view booking history, and more.</p>
                                <footer>
                                    <a href="../../control/php/logout-processor.php" class="button">Logout</a>
                                </footer>
                            </section>
                        </div>
                    </div>
                    <div class="col-8 col-12-medium imp-medium">
                        <!-- Content -->
                        <div id="content">
                            <section>
                                <header class="major">
                                    <h2>Your Details</h2>
                                    <p>Review and update your personal information.</p>
                                </header>
                                <!-- User Details -->

                                <body>
                                    <p><strong>First Name:</strong>
                                        <?php echo htmlspecialchars($_SESSION['first_name']); ?></p>
                                    <p><strong>Last Name:</strong>
                                        <?php echo htmlspecialchars($_SESSION['last_name']); ?></p>
                                    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
                                    <p><strong>Address:</strong> <?php echo htmlspecialchars($_SESSION['address']); ?>
                                    </p>
                                    <p><strong>House Number:</strong>
                                        <?php echo htmlspecialchars($_SESSION['housenumber']); ?></p>
                                    <p><strong>City:</strong> <?php echo htmlspecialchars($_SESSION['city']); ?></p>
                                    <p><strong>Postal Code:</strong>
                                        <?php echo htmlspecialchars($_SESSION['postal_code']); ?></p>
                                    <p><strong>Country:</strong> <?php echo htmlspecialchars($_SESSION['country']); ?>
                                    </p>
                                    <p><strong>Active:</strong> <?php echo $_SESSION['active'] ? 'Yes' : 'No'; ?></p>
                                </body>

                                <!-- Bookings Details -->

                                <h2>Your Bookings</h2>
                                <?php if (empty($bookings)): ?>
                                    <p>You have no bookings.</p>
                                <?php else: ?>
                                    <ul>
                                        <?php foreach ($bookings as $booking): ?>
                                            <li>
                                                <strong>Destination:</strong>
                                                <?php echo htmlspecialchars($booking['destination']); ?><br>
                                                <strong>Start Date:</strong>
                                                <?php echo htmlspecialchars($booking['start_date']); ?><br>
                                                <strong>End Date:</strong>
                                                <?php echo htmlspecialchars($booking['end_date']); ?><br>
                                                <strong>Hotel:</strong>
                                                <?php echo htmlspecialchars($booking['hotel_name']); ?><br>
                                                <strong>Flights:</strong>
                                                <ul>
                                                    <?php if ($booking['leg1'] !== '0'): ?>
                                                        <li><?php echo htmlspecialchars($booking['leg1']); ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($booking['leg2'] !== '0'): ?>
                                                        <li><?php echo htmlspecialchars($booking['leg2']); ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($booking['leg3'] !== '0'): ?>
                                                        <li><?php echo htmlspecialchars($booking['leg3']); ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($booking['leg4'] !== '0'): ?>
                                                        <li><?php echo htmlspecialchars($booking['leg4']); ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                            </section>
                        </div>
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