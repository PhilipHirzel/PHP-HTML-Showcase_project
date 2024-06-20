<?php
// Start the session
session_start();

// Check if the necessary query parameters are set
if (!isset($_GET['destination']) || !isset($_GET['start_date']) || !isset($_GET['end_date']) || !isset($_GET['travel_class']) || !isset($_GET['award_program'])) {
    header("Location: booking.php");
    exit();
}

// Get the input from the query parameters
$destination = $_GET['destination'];
$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];
$travel_class = $_GET['travel_class'];
$award_program = $_GET['award_program'];

// Database connection details
$servername = "-";
$username = "webapp_db_user";
$password = "ng%2hB%!";
$dbname = "TravelX_prod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch travel package information from the database
$sql = $conn->prepare("SELECT * FROM travel_packages_prod WHERE destination = ?");
$sql->bind_param("s", $destination);
$sql->execute();
$result = $sql->get_result();

$package = $result->fetch_assoc();

// Close the connection
$conn->close();
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Booking Confirmation - TravelX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../control/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../../control/css/noscript.css" />
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
                    <p>Welcome, <?php echo htmlspecialchars($_SESSION['first_name'] . ' ' . $_SESSION['last_name']); ?></p>
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
        <div id="main" class="wrapper style1">
            <div class="container">
                <header class="major">
                    <h2>Booking Confirmation</h2>
                </header>
                <section>
                    <h3>Booking Details</h3>
                    <p><strong>Destination:</strong> <?php echo htmlspecialchars($package['destination']); ?></p>
                    <p><strong>Start Date:</strong> <?php echo htmlspecialchars($start_date); ?></p>
                    <p><strong>End Date:</strong> <?php echo htmlspecialchars($end_date); ?></p>
                    <p><strong>Hotel:</strong> <?php echo htmlspecialchars($package['hotel_name']); ?></p>
                    <p><strong>Departure:</strong> Zurich</p>
                    <p><strong>Travel Class:</strong> <?php echo htmlspecialchars($travel_class); ?></p>
                    <p><strong>Preferred Flight Award Program:</strong> <?php echo htmlspecialchars($award_program); ?></p>
                    <p><strong>Flights:</strong></p>
                    <ul>
                        <?php if ($package['leg1'] !== '0'): ?>
                            <li><?php echo htmlspecialchars($package['leg1']); ?></li>
                        <?php endif; ?>
                        <?php if ($package['leg2'] !== '0'): ?>
                            <li><?php echo htmlspecialchars($package['leg2']); ?></li>
                        <?php endif; ?>
                        <?php if ($package['leg3'] !== '0'): ?>
                            <li><?php echo htmlspecialchars($package['leg3']); ?></li>
                        <?php endif; ?>
                        <?php if ($package['leg4'] !== '0'): ?>
                            <li><?php echo htmlspecialchars($package['leg4']); ?></li>
                        <?php endif; ?>
                    </ul>
                </section>
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
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
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
