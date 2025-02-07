<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan EMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin-top: 20px;
        }

        .result {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Loan EMI Calculator</h2>
        <div class="card p-4">
            <div class="mb-3">
                <label class="form-label">Interest Rate (%)</label>
                <input type="number" class="form-control" id="interestRate" placeholder="Enter interest rate">
            </div>
            <div class="mb-3">
                <label class="form-label">EMI (₹)</label>
                <input type="number" class="form-control" id="emiAmount" placeholder="Enter EMI amount">
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <label class="form-label">Years</label>
                    <input type="number" class="form-control" id="years" placeholder="Years">
                </div>
                <div class="col">
                    <label class="form-label">Months</label>
                    <input type="number" class="form-control" id="months" placeholder="Months">
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" onclick="calculateEMI()">Calculate</button>
                <button class="btn btn-secondary" onclick="resetForm()">Reset</button>
            </div>
        </div>

        <div id="result" class="result mt-4 d-none">
            <h4>Results</h4>
            <p><strong>Loan Amount:</strong> ₹<span id="loanAmount"></span></p>
            <p><strong>Interest Rate:</strong> <span id="displayInterestRate"></span>%</p>
            <p><strong>Period:</strong> <span id="displayYears"></span> Years <span id="displayMonths"></span> Months
            </p>
            <p><strong>Monthly EMI:</strong> ₹<span id="monthlyEMI"></span></p>
            <p><strong>Total Interest:</strong> ₹<span id="totalInterest"></span></p>
            <p><strong>Total Payment:</strong> ₹<span id="totalPayment"></span></p>
        </div>
    </div>

    <script>
        function calculateEMI() {
            let interestRate = parseFloat(document.getElementById("interestRate").value);
            let emi = parseFloat(document.getElementById("emiAmount").value);
            let years = parseInt(document.getElementById("years").value) || 0;
            let months = parseInt(document.getElementById("months").value) || 0;

            let totalMonths = (years * 12) + months;

            if (interestRate <= 0 || emi <= 0 || totalMonths <= 0) {
                alert("Please enter valid values.");
                return;
            }

            let totalPayment = emi * totalMonths;
            let totalInterest = totalPayment - emi; // Simplified for demo
            let loanAmount = totalPayment / ((1 + (interestRate / 100)) ** (totalMonths / 12));

            document.getElementById("loanAmount").innerText = loanAmount.toFixed(2);
            document.getElementById("displayInterestRate").innerText = interestRate;
            document.getElementById("displayYears").innerText = years;
            document.getElementById("displayMonths").innerText = months;
            document.getElementById("monthlyEMI").innerText = emi.toFixed(2);
            document.getElementById("totalInterest").innerText = totalInterest.toFixed(2);
            document.getElementById("totalPayment").innerText = totalPayment.toFixed(2);

            document.getElementById("result").classList.remove("d-none");
        }

        function resetForm() {
            document.getElementById("interestRate").value = "";
            document.getElementById("emiAmount").value = "";
            document.getElementById("years").value = "";
            document.getElementById("months").value = "";
            document.getElementById("result").classList.add("d-none");
        }
    </script>

</body>

</html>
