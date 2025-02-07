<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GST Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-5">

    <div class="container bg-white p-4 rounded shadow">
        <h2 class="text-center mb-4">GST Calculator</h2>

        <div class="mb-3">
            <label class="form-label">Enter Amount:</label>
            <input type="number" id="amount" class="form-control" placeholder="Enter amount" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Enter GST Rate (%):</label>
            <input type="number" id="gstRate" class="form-control" placeholder="Enter GST rate (e.g. 10)" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Select GST Type:</label>
            <div>
                <input type="radio" name="gstType" value="add" checked> Add GST (+)
                <input type="radio" name="gstType" value="remove" class="ms-3"> Remove GST (-)
            </div>
        </div>

        <button class="btn btn-primary w-100" onclick="calculateGST()">Calculate GST</button>

        <h4 class="mt-4">Result:</h4>
        <p><strong>Net Amount:</strong> ₹ <span id="netAmount">0.00</span></p>
        <p><strong>CGST (<span id="cgstRate">5</span>%):</strong> ₹ <span id="cgstAmount">0.00</span></p>
        <p><strong>SGST (<span id="sgstRate">5</span>%):</strong> ₹ <span id="sgstAmount">0.00</span></p>
        <p><strong>Total GST (<span id="totalGstRate">10</span>%):</strong> ₹ <span id="gstAmount">0.00</span></p>
        <p><strong>Total Amount:</strong> ₹ <span id="totalAmount">0.00</span></p>
    </div>

    <script src="{{ asset('admin/assets/js/gst-calculator.js') }}"></script>

</body>

</html>
