<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Milkyway Dairy - Home</title>
        <link rel="icon" href="/favicon-32x32.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    



    
    <!-- Navigation Bar -->

    
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a  class="navbar-brand text-white" href="index.html"><img src="/logo11.jpg" alt="">Milkyway Dairy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="special-offers.html">Special Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="register.html">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Carousel/Sliding Images -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1.jpg" class="d-block w-100" alt="Dairy Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/image2.jpg" class="d-block w-100" alt="Dairy Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpg" class="d-block w-100" alt="Dairy Image 3">
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about-us py-5 bg-light">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="about-text mb-4 mb-md-0">
                <h2 class="text-success">About Us</h2>
                <p>Welcome to Milkyway Dairy, where we offer the finest dairy products sourced from organic farms. 
                   Our commitment to quality ensures that you receive the freshest and most nutritious dairy items every day.</p>
            </div>
            <div class="about-image">
                <img src="images/about-image.jpg" class="img-fluid rounded" alt="About Us Image">
            </div>
        </div>
    </section>

    <!-- Optional Footer -->
    <footer class="bg-success text-white text-center py-3">
        &copy; 2024 Milkyway Dairy. All rights reserved.
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
