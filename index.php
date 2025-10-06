<?php
// index.php - Landing page
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tuinuane Youth Group SACCO</title>
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
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
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
  <div class="container">
    <h1>Welcome to Tuinuane Youth Group SACCO</h1>
    <p>Empowering youth members with loans, savings, and financial growth opportunities.</p>
    <div class="row mt-4 justify-content-center">
      <div class="col-md-3 mb-2"><a href="loancalculator.php" class="btn btn-lg btn-primary w-100">💰 Loan Calculator</a></div>
      <div class="col-md-3 mb-2"><a href="memberportal.php" class="btn btn-lg btn-primary w-100">🧑‍💻 Member Portal</a></div>
      <div class="col-md-3 mb-2"><a href="insurance.php" class="btn btn-lg btn-light w-100">🛡️ Insurance Services</a></div>
    </div>
  </div>
</section>

<!-- Loan Types -->
<div class="container my-5">
  <h2 class="section-title text-center">Our Loan Products</h2>
  <div class="row text-center">
    <div class="col-md-4 mb-3">
      <div class="card loan-card shadow-sm p-4">Development Loan</div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card loan-card shadow-sm p-4">Emergency Loan</div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card loan-card shadow-sm p-4">Education Loan</div>
    </div>
  </div>
</div>

<!-- Other Sections -->
<div class="container my-5">
  <h2 class="section-title text-center">Tender Applications</h2>
  <p class="text-center">Apply for business or community opportunities supported by Tuinuane Youth Group SACCO.</p>

  <h2 class="section-title text-center mt-5">Latest News & Events</h2>
  <p class="text-center">Stay informed about our programs and youth empowerment activities.</p>

  <h2 class="section-title text-center mt-5">What Members Say</h2>
  <div class="row text-center">
    <div class="col-md-4 mb-2"><blockquote>"Very supportive SACCO for youth members!"</blockquote></div>
    <div class="col-md-4 mb-2"><blockquote>"Transparent and reliable services."</blockquote></div>
    <div class="col-md-4 mb-2"><blockquote>"Loans are fast and easy to access."</blockquote></div>
  </div>
</div>

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
