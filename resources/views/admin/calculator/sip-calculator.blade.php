<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Calculator - SIP Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">SIP Calculator</h2>
        <div class="card p-4">
            <label class="form-label">Monthly Investment:</label>
            <input type="number" id="monthlyInvestment" class="form-control">

            <label class="form-label">Duration:</label>
            <div class="row">
                <div class="col">
                    <input type="number" id="years" class="form-control" placeholder="Years">
                </div>
                <div class="col">
                    <input type="number" id="months" class="form-control" placeholder="Months">
                </div>
            </div>

            <label class="form-label">Annual Rate of Return Expected (%):</label>
            <input type="number" id="rate" class="form-control" max="50">

            <div class="btn-group mt-3" role="group">
                <button class="btn btn-primary" onclick="calculateSIP()">Calculate</button>
                <button class="btn btn-secondary" onclick="resetForm()">Reset</button>
            </div>

            <div class="result mt-4 text-center" id="result" style="display: none;">
                <table class="table table-bordered">
                    <tr>
                        <th>Total Investment</th>
                        <td><span id="totalInvestment">0</span></td>
                    </tr>
                    <tr>
                        <th>Total Return</th>
                        <td><span id="totalReturn">0</span></td>
                    </tr>
                    <tr>
                        <th>Total Profit</th>
                        <td><span id="totalProfit">0</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/sip-calculator.js') }}"></script>
</body>

</html>
