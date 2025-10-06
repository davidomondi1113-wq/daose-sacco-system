<?php
// media.php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Media - TUINUANE YOUTH GROUP SACCO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php'; ?>

<!-- Page Header -->
<div class="container my-5">
  <h2 class="text-center mb-4">Media Center</h2>
  <p class="text-center">Explore our latest photos, videos, and news highlights.</p>
</div>

<!-- Media Gallery -->
<div class="container">
  <div class="row g-4">
    <!-- Photo 1 -->
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/media/event1.jpg" class="card-img-top" alt="Event 1">
        <div class="card-body">
          <h5 class="card-title">Annual General Meeting</h5>
          <p class="card-text">Highlights from our 2025 AGM, bringing members together.</p>
        </div>
      </div>
    </div>

    <!-- Photo 2 -->
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/media/event2.jpg" class="card-img-top" alt="Event 2">
        <div class="card-body">
          <h5 class="card-title">Community Outreach</h5>
          <p class="card-text">Our SACCO engaging with local communities.</p>
        </div>
      </div>
    </div>

    <!-- Video -->
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" 
                  title="SACCO Video" allowfullscreen></iframe>
        </div>
        <div class="card-body">
          <h5 class="card-title">SACCO Success Stories</h5>
          <p class="card-text">Watch how our members have benefited from loans and savings.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- News Section -->
<div class="container my-5">
  <h3 class="text-center mb-4">Latest News</h3>
  <ul class="list-group">
    <li class="list-group-item">📢 New branch opening soon in Kisumu (October 2025).</li>
    <li class="list-group-item">💳 Mobile contributions now available via M-PESA.</li>
    <li class="list-group-item">🏆 TUINUANE Youth Group awarded "Best SACCO of the Year 2025".</li>
  </ul>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  <p>&copy; <?=date('Y')?> TUINUANE YOUTH GROUP SACCO. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
