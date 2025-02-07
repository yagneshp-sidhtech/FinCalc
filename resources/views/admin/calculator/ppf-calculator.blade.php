<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPF Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">PPF Calculator</h2>
        <div class="mb-3">
            <label class="form-label">Deposit Amount</label>
            <input type="number" id="deposit" class="form-control" placeholder="Enter Deposited Amount">
        </div>
        <div class="mb-3">
            <label class="form-label">Rate of Interest (%)</label>
            <input type="number" id="rate" class="form-control" placeholder="Enter Interest Rate" max="50">
        </div>
        <div class="mb-3">
            <label class="form-label">Investment Date</label>
            <input type="date" id="investmentDate" class="form-control" value="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Duration (Years)</label>
            <select id="duration" class="form-select">
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
            </select>
        </div>
        <button class="btn btn-primary w-100" onclick="calculatePPF()">Calculate</button>
        <div class="mt-4" id="result" style="display: none;">
            <h4>Maturity Value: <span id="maturityValue"></span></h4>
            <p>Investment Amount: <span id="investAmount"></span></p>
            <p>Total Interest: <span id="totalInterest"></span></p>
            <p>Maturity Date: <span id="maturityDate"></span></p>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/ppf-calculator.js') }}"></script>
</body>

</html>
