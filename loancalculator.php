<?php include 'header.php'; ?>
<main class="container py-5">
  <h2 class="text-center mb-4">Loan Calculator</h2>
  <div class="card shadow p-4">
    <form id="loanCalcForm">
      <div class="mb-3">
        <label for="amount" class="form-label">Loan Amount (Ksh)</label>
        <input type="number" id="amount" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="rate" class="form-label">Interest Rate (%)</label>
        <input type="number" id="rate" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="time" class="form-label">Loan Duration (Months)</label>
        <input type="number" id="time" class="form-control" required>
      </div>
      <button type="button" class="btn btn-primary w-100" onclick="calculateLoan()">Calculate</button>
    </form>
    <div class="mt-4">
      <h5>Estimated Monthly Payment: <span id="result" class="text-success"></span></h5>
    </div>
  </div>
</main>
<script>
function calculateLoan(){
  let amount = document.getElementById('amount').value;
  let rate = document.getElementById('rate').value / 100 / 12;
  let time = document.getElementById('time').value;

  let monthly = (amount * rate) / (1 - Math.pow(1+rate, -time));
  document.getElementById('result').innerText = "Ksh " + monthly.toFixed(2);
}
</script>
<?php include 'footer.php'; ?>
