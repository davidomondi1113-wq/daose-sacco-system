<?php
// aboutus.php - About Us Page
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>About Us - Tuinuane Youth Group SACCO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Custom Styles -->
  <link href="styles.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="assets/logo.png" alt="SACCO Logo" style="height:40px; margin-right:10px;">
      <span>Tuinuane Youth Group</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="aboutus.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="complaints.php">Complaints</a></li>
        <li class="nav-item"><a class="nav-link" href="faqs.php">FAQs</a></li>
        <li class="nav-item"><a class="nav-link" href="branches.php">Branches</a></li>
        <li class="nav-item"><a class="nav-link" href="downloads.php">Downloads</a></li>
        <li class="nav-item"><a class="nav-link" href="media.php">Media</a></li>
        <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
  <div class="container text-center">
    <h1>About Tuinuane Youth Group SACCO</h1>
    <p>Building a community of empowered youth through financial services, growth opportunities, and support networks.</p>
  </div>
</section>

<!-- About Us Sections -->
<section class="section section-light">
  <div class="container">
    <h2 class="section-title text-center">Who We Are</h2>
    <p class="text-center mb-5">Tuinuane Youth Group SACCO is a community-focused cooperative that empowers youth through accessible financial services, mentorship programs, and community development initiatives.</p>

    <h2 class="section-title text-center">Our Mission</h2>
    <p class="text-center mb-5">To provide youth with financial tools, resources, and guidance to achieve economic growth, financial stability, and social impact.</p>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <h2 class="section-title text-center">Our Vision</h2>
    <p class="text-center mb-5">To be the leading SACCO for youth empowerment, fostering sustainable development and financial literacy among young Kenyans.</p>

    <h2 class="section-title text-center">Our Core Values</h2>
    <div class="row text-center mb-5">
      <div class="col-md-3 mb-3">
        <div class="card-custom">Integrity</div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card-custom">Transparency</div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card-custom">Empowerment</div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card-custom">Community</div>
      </div>
    </div>
  </div>
</section>

<section class="section section-light">
  <div class="container">
    <h2 class="section-title text-center">Our History</h2>
    <p class="text-center mb-5">Founded to address the financial needs of youth in our community, Tuinuane Youth Group SACCO has grown into a trusted SACCO offering loans, savings, insurance, and youth mentorship programs.</p>
  </div>
</section>

<!-- Sticky Social Media -->
<div class="sticky-social">
  <a href="#"><i class="bi bi-facebook"></i> F</a>
  <a href="#"><i class="bi bi-twitter"></i> T</a>
  <a href="#"><i class="bi bi-instagram"></i> I</a>
  <a href="#"><i class="bi bi-youtube"></i> Y</a>
</div>

<!-- Footer -->
<footer>
  <p>&copy; <?=date('Y')?> Tuinuane Youth Group SACCO. All Rights Reserved.</p>
  <p>Our Affiliates: Kenya SACCO Union | Cooperative Bank | Youth Fund</p>
  <p>Designed by Daose | Contact: +254114425589 | Email: davidomondi1113@gmail.com</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
