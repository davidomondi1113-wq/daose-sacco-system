<?php include 'header.php'; ?>

<main class="container py-5">
    <!-- Page Heading -->
    <h1 class="text-center mb-4">🏦 SACCO Member Portal</h1>
    <p class="lead text-center mb-5">Manage your account, view savings, loans, statements, and stay updated with SACCO activities.</p>

    <!-- Portal Menu Tabs -->
    <ul class="nav nav-tabs justify-content-center mb-5" id="portalTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab">🏠 Dashboard</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab">👤 My Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="savings-tab" data-bs-toggle="tab" data-bs-target="#savings" type="button" role="tab">💰 Savings & Deposits</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="loans-tab" data-bs-toggle="tab" data-bs-target="#loans" type="button" role="tab">🏦 Loans</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="statements-tab" data-bs-toggle="tab" data-bs-target="#statements" type="button" role="tab">📄 Statements</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments" type="button" role="tab">💳 Payments</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab">📢 News & Notices</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="governance-tab" data-bs-toggle="tab" data-bs-target="#governance" type="button" role="tab">🗳️ Governance</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button" role="tab">💬 Support Center</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab">🔐 Security</button>
        </li>
    </ul>

    <!-- Portal Tab Contents -->
    <div class="tab-content" id="portalTabsContent">

        <!-- Dashboard -->
        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <div class="card card-custom p-3">
                        <h5>👤 Welcome, John Doe</h5>
                        <p>Member ID: 12345</p>
                        <p>Joined: 01-Jan-2024</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card card-custom p-3">
                        <h5>💰 Savings Overview</h5>
                        <p>Total: Ksh 120,000</p>
                        <p>Shares: Ksh 30,000</p>
                        <p>Deposits: Ksh 90,000</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card card-custom p-3">
                        <h5>📊 Loan Status</h5>
                        <p>Outstanding: Ksh 50,000</p>
                        <p>Next Payment: 30-Sep-2025</p>
                        <p>Notifications: 2 unread</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile -->
        <div class="tab-pane fade" id="profile" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>👤 My Profile</h4>
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Email:</strong> john@example.com</p>
                <p><strong>Phone:</strong> 0712345678</p>
                <p><strong>Address:</strong> Kisumu, Kenya</p>
                <p><strong>Next of Kin:</strong> Jane Doe - 0723456789</p>
                <p><strong>Membership ID:</strong> 12345</p>
                <p><strong>Join Date:</strong> 01-Jan-2024</p>
                <a href="#" class="btn btn-primary">Edit Profile</a>
                <a href="#" class="btn btn-secondary">Upload KYC Documents</a>
                <a href="#" class="btn btn-info">Change Password / 2FA</a>
            </div>
        </div>

        <!-- Savings -->
        <div class="tab-pane fade" id="savings" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>💰 Savings & Deposits</h4>
                <p>Total Savings: Ksh 120,000</p>
                <p>Share Capital: Ksh 30,000</p>
                <p>Special Savings: Ksh 10,000</p>
                <a href="#" class="btn btn-primary mt-3">Download Statement</a>
            </div>
        </div>

        <!-- Loans -->
        <div class="tab-pane fade" id="loans" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>🏦 Loans</h4>
                <p>Active Loans: Ksh 50,000</p>
                <p>Outstanding Balance: Ksh 50,000</p>
                <p>Next Payment Due: 30-Sep-2025</p>
                <a href="#" class="btn btn-success mt-3">Apply for Loan</a>
                <a href="#" class="btn btn-info mt-3">Loan Calculator</a>
                <a href="#" class="btn btn-secondary mt-3">Repayment History</a>
            </div>
        </div>

        <!-- Statements -->
        <div class="tab-pane fade" id="statements" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>📄 Statements & Reports</h4>
                <a href="#" class="btn btn-primary mb-2">Monthly Statement</a>
                <a href="#" class="btn btn-primary mb-2">Quarterly Statement</a>
                <a href="#" class="btn btn-primary mb-2">Annual Statement</a>
                <a href="#" class="btn btn-secondary mb-2">Dividend Statement</a>
                <a href="#" class="btn btn-info mb-2">Tax Certificates</a>
            </div>
        </div>

        <!-- Payments -->
        <div class="tab-pane fade" id="payments" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>💳 Payments & Contributions</h4>
                <a href="#" class="btn btn-success mb-2">Make Payment</a>
                <a href="#" class="btn btn-primary mb-2">Loan Repayment</a>
                <a href="#" class="btn btn-info mb-2">Recurring Payments Setup</a>
                <a href="#" class="btn btn-secondary mb-2">Download Receipts</a>
            </div>
        </div>

        <!-- News & Notices -->
        <div class="tab-pane fade" id="news" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>📢 News & Notices</h4>
                <ul>
                    <li>Dividend Declared - 20-Sep-2025</li>
                    <li>New Loan Products Available</li>
                    <li>Upcoming AGM on 15-Oct-2025</li>
                    <li>Youth Training Program - 01-Nov-2025</li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">Download Newsletter</a>
            </div>
        </div>

        <!-- Governance -->
        <div class="tab-pane fade" id="governance" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>🗳️ Governance & Participation</h4>
                <a href="#" class="btn btn-primary mb-2">Annual Reports</a>
                <a href="#" class="btn btn-secondary mb-2">Audit Reports</a>
                <a href="#" class="btn btn-info mb-2">Board Election Voting</a>
                <a href="#" class="btn btn-success mb-2">Submit Suggestions</a>
            </div>
        </div>

        <!-- Support Center -->
        <div class="tab-pane fade" id="support" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>💬 Support & Help Center</h4>
                <a href="#" class="btn btn-primary mb-2">Submit Ticket</a>
                <a href="#" class="btn btn-secondary mb-2">Live Chat</a>
                <a href="#" class="btn btn-info mb-2">FAQs</a>
                <a href="#" class="btn btn-success mb-2">Download Forms</a>
            </div>
        </div>

        <!-- Security -->
        <div class="tab-pane fade" id="security" role="tabpanel">
            <div class="card card-custom p-4">
                <h4>🔐 Security Settings</h4>
                <a href="#" class="btn btn-primary mb-2">Enable 2FA</a>
                <a href="#" class="btn btn-secondary mb-2">View Login History</a>
                <a href="#" class="btn btn-info mb-2">Password Recovery</a>
                <a href="#" class="btn btn-success mb-2">Set Device Restrictions</a>
            </div>
        </div>

    </div>
</main>

<?php include 'footer.php'; ?>
