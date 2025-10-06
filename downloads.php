<?php
// downloads.php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Downloads - TUINUANE YOUTH GROUP SACCO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php'; ?>

<div class="container my-5">
  <h2 class="text-center mb-4">Downloads Center</h2>
  <p class="text-center">Here you can download SACCO forms, policies, and resources.</p>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-dark">
          <tr>
            <th>File Name</th>
            <th>Description</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Membership Form</td>
            <td>Application form to join TUINUANE Youth Group SACCO.</td>
            <td><a href="assets/downloads/membership_form.pdf" class="btn btn-sm btn-primary" download>Download</a></td>
          </tr>
          <tr>
            <td>Loan Application Form</td>
            <td>Form required to apply for different loan types.</td>
            <td><a href="assets/downloads/loan_application.pdf" class="btn btn-sm btn-primary" download>Download</a></td>
          </tr>
          <tr>
            <td>Bylaws & Policies</td>
            <td>Read SACCO policies and regulations for members.</td>
            <td><a href="assets/downloads/bylaws.pdf" class="btn btn-sm btn-primary" download>Download</a></td>
          </tr>
          <tr>
            <td>Annual Report 2025</td>
            <td>Latest SACCO financial and activity report.</td>
            <td><a href="assets/downloads/annual_report_2025.pdf" class="btn btn-sm btn-primary" download>Download</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  <p>&copy; <?=date('Y')?> TUINUANE YOUTH GROUP SACCO. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
