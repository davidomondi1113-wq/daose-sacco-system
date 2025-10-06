<?php include 'header.php'; ?>
<main class="login-wrapper">
    <div class="form-card">
        <h2>Member Login</h2>
        <form id="loginForm" method="post" action="#">
            <label for="identifier">Email / Phone:</label>
            <input type="text" id="identifier" name="identifier" required placeholder="Enter your email or phone">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password">

            <button type="submit" class="btn">Login</button>

            <p class="forgot-link">
                <a href="#" onclick="showForgotPassword(); return false;">Forgot Password?</a>
            </p>
        </form>
    </div>

    <!-- Forgot Password Flow -->
    <div class="form-card hidden" id="forgotPasswordStep1">
        <h2>Reset Password</h2>
        <form>
            <label for="resetIdentifier">Email / Phone:</label>
            <input type="text" id="resetIdentifier" name="resetIdentifier" required placeholder="Enter your registered email or phone">
            <button type="button" class="btn" onclick="goToSecurityQuestion()">Next</button>
        </form>
    </div>

    <div class="form-card hidden" id="securityQuestionStep">
        <h2>Security Verification</h2>
        <form>
            <label for="securityAnswer">Answer Security Question:</label>
            <input type="text" id="securityAnswer" name="securityAnswer" required placeholder="Answer your chosen question">
            <button type="button" class="btn" onclick="goToOtpStep()">Next</button>
        </form>
    </div>

    <div class="form-card hidden" id="otpStep">
        <h2>OTP Verification</h2>
        <form>
            <p>An OTP has been sent to your registered email/phone.</p>
            <label for="resetOtp">Enter OTP:</label>
            <input type="text" id="resetOtp" name="resetOtp" required placeholder="Enter the OTP">
            <button type="button" class="btn" onclick="goToResetPassword()">Verify</button>
        </form>
    </div>

    <div class="form-card hidden" id="resetPasswordStep">
        <h2>Create New Password</h2>
        <form>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required 
                placeholder="At least 8 chars, upper, lower, number, special" onkeyup="checkStrength(this.value)">
            <div id="strengthBar"><div></div></div>
            <small id="strengthText">Password Strength: Weak</small>

            <label for="confirmNewPassword">Confirm Password:</label>
            <input type="password" id="confirmNewPassword" name="confirmNewPassword" required placeholder="Confirm your new password">

            <button type="submit" class="btn">Reset Password</button>
        </form>
    </div>
</main>

<script>
    function showForgotPassword() {
        document.getElementById('loginForm').parentElement.classList.add('hidden');
        document.getElementById('forgotPasswordStep1').classList.remove('hidden');
    }
    function goToSecurityQuestion() {
        document.getElementById('forgotPasswordStep1').classList.add('hidden');
        document.getElementById('securityQuestionStep').classList.remove('hidden');
    }
    function goToOtpStep() {
        document.getElementById('securityQuestionStep').classList.add('hidden');
        document.getElementById('otpStep').classList.remove('hidden');
    }
    function goToResetPassword() {
        document.getElementById('otpStep').classList.add('hidden');
        document.getElementById('resetPasswordStep').classList.remove('hidden');
    }
    function checkStrength(password) {
        let strengthBar = document.getElementById("strengthBar").firstElementChild;
        let strengthText = document.getElementById("strengthText");
        let strength = 0;
        if (password.match(/[a-z]+/)) strength += 1;
        if (password.match(/[A-Z]+/)) strength += 1;
        if (password.match(/[0-9]+/)) strength += 1;
        if (password.match(/[$@#&!%*]+/)) strength += 1;
        if (password.length >= 8) strength += 1;
        let colors = ["red", "orange", "gold", "lightgreen", "green"];
        let labels = ["Very Weak", "Weak", "Fair", "Good", "Strong"];
        strengthBar.style.width = (strength * 20) + "%";
        strengthBar.style.background = colors[strength - 1] || "red";
        strengthText.textContent = "Password Strength: " + (labels[strength - 1] || "Very Weak");
    }
</script>

<?php include 'footer.php'; ?>
