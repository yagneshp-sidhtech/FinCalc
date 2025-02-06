<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Calculator - FD Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">FD Calculator</h2>
        <div class="card p-4">
            <label class="form-label">Deposit Amount:</label>
            <input type="number" id="deposit" class="form-control">

            <label class="form-label">Rate of Interest (Max 50% per annum):</label>
            <input type="number" id="rate" class="form-control" max="50">

            <label class="form-label">Tenure:</label>
            <div class="row">
                <div class="col">
                    <input type="number" id="years" class="form-control" placeholder="Years">
                </div>
                <div class="col">
                    <input type="number" id="months" class="form-control" placeholder="Months">
                </div>
            </div>

            <label class="form-label">Investment Date:</label>
            <input type="date" id="investmentDate" class="form-control">

            <div class="btn-group mt-3" role="group">
                <button class="btn btn-primary" id="cumulativeBtn">Cumulative</button>
                <button class="btn btn-secondary" id="quarterlyBtn">Quarterly</button>
                <button class="btn btn-info" id="monthlyBtn">Monthly</button>
            </div>

            <button class="btn btn-success mt-3 w-100" onclick="calculateFD()">Calculate</button>

            <div class="result mt-4 text-center" id="result" style="display: none;">
                <p>Maturity Value: <span id="maturityValue">0.00</span></p>
                <p>Investment Amount: <span id="investmentAmount">0</span></p>
                <p>Total Interest: <span id="totalInterest">0.00</span></p>
                <p>Maturity Date: <span id="maturityDate">-</span></p>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/fd-calculator.js') }}"></script>
</body>

</html>
