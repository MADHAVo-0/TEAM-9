<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Train Booking Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'db.php'; ?>

    <!-- Background Image -->
    <img src="images/giphy.gif" alt="hero image" class="bg-img">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="images/train (2).png"><b>IRCTC</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="False" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="book_tickets.php">Book Tickets</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                 Schedules & Routes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="train_shedules.php">Train Schedules</a></li>
                  <li><a class="dropdown-item" href="routes.php">Routes & Stations</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="offers.php">Offers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact Us</a>
              </li>
            </ul>
            <!-- Search Form -->
            <form class="d-flex" role="search" method="GET" action="search.php">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <div class="herocontent">
      <h1>Travel Smart, Travel Easy!</h1>
      <p>Welcome to our train ticket booking platform, where your journey begins with just a few clicks. Explore a variety of schedules and routes to your favorite destinations, ensuring a seamless travel experience. Join us to discover exclusive offers and let your adventure unfold!</p>
      <button type="button" class="btn btn-orange">Book Now!</button>
    </div>

    <!-- Featured Destinations -->
    <section class="featured-destinations">
      <h2>Featured Destinations</h2>
      <div class="cards">
        <!-- Dynamic PHP Example for Destinations -->
        <?php
          $sql = "SELECT name, image_path FROM destinations";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div class='card1'>
                      <img src='{$row['image_path']}' alt='{$row['name']}'>
                      <h3>{$row['name']}</h3>
                    </div>";
            }
          } else {
            echo "No destinations available";
          }
        ?>
      </div>
    </section>

    <!-- Available Trains Section -->
    <section class="available-trains">
      <h2>Available Trains</h2>
      <div class="cardssection">
        <?php
          // Dynamic PHP for Available Trains
          $sql = "SELECT name, image_path FROM trains";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div class='card' style='width: 18rem;'>
                      <img src='{$row['image_path']}' class='card-img-top' alt='{$row['name']}'>
                      <div class='card-body'>
                        <h5 class='card-title'>{$row['name']}</h5>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href='#' class='btn btn-primary'>Book Now</a>
                      </div>
                    </div>";
            }
          } else {
            echo "No trains available";
          }
        ?>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331;">
      <section class="d-flex justify-content-between p-4" style="background-color: #6351ce;">
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <div>
          <a href="" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-twitter"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-google"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-instagram"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-linkedin"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-github"></i></a>
        </div>
      </section>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
