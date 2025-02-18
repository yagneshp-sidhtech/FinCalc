<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Loan EMI Calculator</h2>
        <div class="card p-4">
            <div class="mb-3">
                <label for="interestRate" class="form-label">Interest Rate (%)</label>
                <input type="number" id="interestRate" class="form-control" value="10">
            </div>
            <div class="mb-3">
                <label for="emi" class="form-label">EMI (₹)</label>
                <input type="number" id="emi" class="form-control" value="10000">
            </div>
            <div class="mb-3">
                <label for="periodYears" class="form-label">Period (Years)</label>
                <input type="number" id="periodYears" class="form-control" value="0">
            </div>
            <div class="mb-3">
                <label for="periodMonths" class="form-label">Period (Months)</label>
                <input type="number" id="periodMonths" class="form-control" value="10">
            </div>
            <button class="btn btn-primary w-100" onclick="calculateEMI()">Calculate</button>
        </div>

        <div class="card p-4 mt-4" id="result" style="display: none;">
            <h4 class="text-center">Loan Details</h4>
            <p>Loan Amount: ₹<span id="loanAmount"></span></p>
            <p>Interest Rate: <span id="interestRateDisplay"></span>%</p>
            <p>Period: <span id="periodDisplay"></span> Years <span id="periodDisplayMonths"></span> Months</p>
            <p>Monthly EMI: ₹<span id="monthlyEMI"></span></p>
            <p>Total Interest: ₹<span id="totalInterest"></span> (<span id="totalInterestPercentage"></span>%)</p>
            <p>Total Payment: ₹<span id="totalPayment"></span></p>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/loan-amount.js') }}"></script>
</body>

</html>
