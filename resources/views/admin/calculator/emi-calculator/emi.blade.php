<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('emi.calculator.emi') }}">EMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('emi.calculator.loan.amount') }}">Loan Amount</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Interest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Period</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h2 class="text-center">EMI Calculator</h2>
        <div class="card p-4">
            <div class="mb-3">
                <label for="loanAmount" class="form-label">Loan Amount</label>
                <input type="number" id="loanAmount" class="form-control" placeholder="Enter loan amount">
            </div>
            <div class="mb-3">
                <label for="interestRate" class="form-label">Interest Rate (%)</label>
                <input type="number" id="interestRate" class="form-control" placeholder="Enter interest rate">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="periodYears" class="form-label">Period (Years)</label>
                    <input type="number" id="periodYears" class="form-control" placeholder="Enter years">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="periodMonths" class="form-label">Period (Months)</label>
                    <input type="number" id="periodMonths" class="form-control" placeholder="Enter months">
                </div>
            </div>
            <button class="btn btn-primary w-100" onclick="calculateEMI()">Calculate</button>
        </div>
        <div class="mt-4 card p-4">
            <h4>EMI Details</h4>
            <p><strong>Loan Amount:</strong> ₹<span id="displayLoanAmount">0.00</span></p>
            <p><strong>Interest Rate:</strong> <span id="displayInterestRate">0</span>%</p>
            <p><strong>Period:</strong> <span id="displayPeriod">0 Year 0 Month</span></p>
            <p><strong>Monthly EMI:</strong> ₹<span id="monthlyEMI">0.00</span></p>
            <p><strong>Total Interest:</strong> ₹<span id="totalInterest">0.00</span></p>
            <p><strong>Total Payment:</strong> ₹<span id="totalPayment">0.00</span></p>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/emi.js') }}"></script>
</body>

</html>
