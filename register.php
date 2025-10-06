<?php
session_start();

// Step 1: Collect user info & send OTP
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sendOtp'])) {
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['contact'] = $_POST['contact'];

    // Generate OTP & set expiry (25 seconds)
    $_SESSION['otp'] = rand(100000, 999999);
    $_SESSION['otp_expiry'] = time() + 25; 

    $otpSent = true;
}

// Step 2: Verify OTP
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['verifyOtp'])) {
    if (time() > $_SESSION['otp_expiry']) {
        $otpError = "⚠ OTP expired. Please request a new one.";
        unset($_SESSION['otp'], $_SESSION['otp_expiry']);
    } elseif ($_POST['otp'] == $_SESSION['otp']) {
        $_SESSION['verified'] = true;
    } else {
        $otpError = "❌ Invalid OTP, please try again.";
    }
}

// Step 3: Create account
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['createAccount'])) {
    $password = $_POST['password'];

    // Strong password validation
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $password)) {
        $passError = "⚠ Password must be at least 8 characters, include uppercase, lowercase, number, and a special character (!,@,#,$,%,&,*).";
    } else {
        $city = htmlspecialchars($_POST['city']);
        $pet = htmlspecialchars($_POST['pet']);
        $school = htmlspecialchars($_POST['school']);

        // ✅ In real app: Save info to database here
        $success = "🎉 Account created successfully for {$_SESSION['firstname']} {$_SESSION['lastname']} ({$_SESSION['contact']})";
        session_destroy();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - SACCO Portal</title>
  <link rel="stylesheet" href="styles.css">
  <script>
    // OTP countdown timer (25 seconds)
    let countdown = 25;
    function startTimer() {
      const timerEl = document.getElementById("otpTimer");
      if (!timerEl) return;

      const interval = setInterval(() => {
        if (countdown <= 0) {
          clearInterval(interval);
          timerEl.innerHTML = "<span class='error'>⚠ OTP expired. Please request a new one.</span>";
          document.getElementById("verifyBtn").disabled = true;
        } else {
          timerEl.innerHTML = "⏳ OTP expires in " + countdown + "s";
        }
        countdown--;
      }, 1000);
    }
  </script>
</head>
<body class="auth-body">
  <div class="auth-container">
    <h2 class="auth-title">🚌 SACCO Member Registration</h2>

    <?php if (!isset($_SESSION['contact'])): ?>
      <!-- STEP 1: Basic Info -->
      <form method="post">
        <label class="form-label">Last Name</label>
        <input type="text" name="lastname" required class="form-input">

        <label class="form-label">First Name</label>
        <input type="text" name="firstname" required class="form-input">

        <label class="form-label">Email / Phone Number</label>
        <input type="text" name="contact" required class="form-input">

        <button type="submit" name="sendOtp" class="btn-primary">📩 Send OTP</button>
      </form>

    <?php elseif (!isset($_SESSION['verified'])): ?>
      <!-- STEP 2: OTP Verification -->
      <form method="post">
        <p class="info">✅ OTP has been sent to <b><?php echo $_SESSION['contact']; ?></b>. Enter it below:</p>
        <label class="form-label">Enter OTP</label>
        <input type="text" name="otp" required class="form-input">
        <?php if (isset($otpError)) echo "<p class='error'>$otpError</p>"; ?>

        <div id="otpTimer" class="timer"></div>

        <button type="submit" id="verifyBtn" name="verifyOtp" class="btn-secondary">✅ Verify OTP</button>
      </form>
      <form method="post" class="mt-4">
        <button type="submit" name="sendOtp" class="btn-gray">🔄 Resend OTP</button>
      </form>
      <script>startTimer();</script>

    <?php elseif (!isset($success)): ?>
      <!-- STEP 3: Password + Security Questions -->
      <form method="post">
        <label class="form-label">Create Password</label>
        <input type="password" id="password" name="password" required class="form-input" placeholder="Strong password">

        <div class="strength-wrapper">
          <div id="strengthBar" class="strength-bar"></div>
        </div>
        <p class="hint">Password must be 8+ chars, with uppercase, lowercase, number & special char (!,@,#,$,%,&,*).</p>
        <?php if (isset($passError)) echo "<p class='error'>$passError</p>"; ?>

        <label class="form-label">Security Question 1: City you grew up in?</label>
        <input type="text" name="city" required class="form-input">

        <label class="form-label">Security Question 2: First pet’s name?</label>
        <input type="text" name="pet" required class="form-input">

        <label class="form-label">Security Question 3: Primary school you attended?</label>
        <input type="text" name="school" required class="form-input">

        <button type="submit" name="createAccount" class="btn-accent">🚀 Create Account</button>
      </form>

    <?php else: ?>
      <!-- STEP 4: Success -->
      <div class="text-center">
        <h3 class="success"><?php echo $success; ?></h3>
        <a href="login.php" class="btn-primary">➡ Proceed to Login</a>
      </div>
    <?php endif; ?>
  </div>

  <script>
    // Password strength meter
    const password = document.getElementById('password');
    const strengthBar = document.getElementById('strengthBar');

    if (password) {
      password.addEventListener('input', () => {
        const val = password.value;
        let strength = 0;

        if (val.match(/[a-z]/)) strength++;
        if (val.match(/[A-Z]/)) strength++;
        if (val.match(/\d/)) strength++;
        if (val.match(/[@$!%*#?&]/)) strength++;
        if (val.length >= 8) strength++;

        switch (strength) {
          case 0:
          case 1:
            strengthBar.style.width = "20%";
            strengthBar.style.backgroundColor = "red";
            break;
          case 2:
            strengthBar.style.width = "40%";
            strengthBar.style.backgroundColor = "orange";
            break;
          case 3:
            strengthBar.style.width = "60%";
            strengthBar.style.backgroundColor = "gold";
            break;
          case 4:
            strengthBar.style.width = "80%";
            strengthBar.style.backgroundColor = "blue";
            break;
          case 5:
            strengthBar.style.width = "100%";
            strengthBar.style.backgroundColor = "green";
            break;
        }
      });
    }
  </script>
</body>
</html>
