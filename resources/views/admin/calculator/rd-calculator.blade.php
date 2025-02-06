<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">RD Calculator</h2>
        <div class="card p-4">
            <div class="mb-3">
                <label for="deposit" class="form-label">Monthly Deposit</label>
                <input type="number" id="deposit" class="form-control" placeholder="Enter Deposited Amount">
            </div>
            <div class="mb-3">
                <label for="rate" class="form-label">Rate of Interest</label><span class="float-end">(max. 50 % per
                    annum)</span>
                <input type="number" id="rate" class="form-control" placeholder="Enter Interest Rate">
            </div>
            <div class="mb-3">
                <label for="term" class="form-label">Saving Term</label> <span class="float-end">Multiplies of 3
                    months</span>
                <input type="number" id="term" class="form-control" placeholder="Months">
            </div>
            <div class="mb-3">
                <label for="investmentDate" class="form-label">Investment Date</label>
                <input type="date" id="investmentDate" class="form-control" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <button class="btn btn-primary w-100" onclick="calculateRD()">Calculate</button>
        </div>
        <div class="card mt-4 p-4">
            <h4>Results</h4>
            <p><strong>Maturity Value:</strong> <span id="maturityValue">0.00</span></p>
            <p><strong>Investment Amount:</strong> <span id="investmentAmount">0.00</span></p>
            <p><strong>Total Interest:</strong> <span id="totalInterest">0.00</span></p>
            <p><strong>Maturity Date:</strong> <span id="maturityDate">0</span></p>
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/rd-calculator.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
