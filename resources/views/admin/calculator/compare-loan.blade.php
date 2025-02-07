<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Loans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">
    <h2 class="text-center">Compare Loans</h2>
    <form>
        <div class="row mb-3">
            <div class="col">
                <label>Loan Amount</label>
                <input type="number" class="form-control" id="loanAmount1" placeholder="Enter Loan Amount 1">
            </div>
            <div class="col">
                <label>&nbsp;</label>
                <input type="number" class="form-control" id="loanAmount2" placeholder="Enter Loan Amount 2">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label>Interest %</label>
                <input type="number" class="form-control" id="interestRate1" placeholder="Enter Interest Rate 1">
            </div>
            <div class="col">
                <label>&nbsp;</label>
                <input type="number" class="form-control" id="interestRate2" placeholder="Enter Interest Rate 2">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label>Period (Months)</label>
                <input type="number" class="form-control" id="months1" placeholder="Enter Duration 1">
            </div>
            <div class="col">
                <label>&nbsp;</label>
                <input type="number" class="form-control" id="months2" placeholder="Enter Duration 2">
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-outline-primary" onclick="resetForm()">Reset</button>
            <button type="button" class="btn btn-primary" onclick="compareLoans()">Calculate</button>
        </div>
    </form>

    <div class="mt-4 text-center output">
        <h4>Monthly EMI</h4>
        <p><span id="emi1">0.00</span> | <span id="emi2">0.00</span></p>
        <p class="text-danger">Difference: <span id="emiDiff">0.00</span></p>

        <h4>Interest Payable</h4>
        <p><span id="interest1">0.00</span> | <span id="interest2">0.00</span></p>
        <p class="text-danger">Difference: <span id="interestDiff">0.00</span></p>

        <h4>Total Payment</h4>
        <p><span id="total1">0.00</span> | <span id="total2">0.00</span></p>
        <p class="text-danger">Difference: <span id="totalDiff">0.00</span></p>
    </div>

    <script src="{{ asset('admin/assets/js/compare-loan.js') }}"></script>
</body>

</html>
