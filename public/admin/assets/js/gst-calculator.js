function calculateGST() {
    let amount = parseFloat(document.getElementById("amount").value);
    let gstRate = parseFloat(document.getElementById("gstRate").value);
    let gstType = document.querySelector('input[name="gstType"]:checked').value;

    if (isNaN(amount) || amount <= 0 || isNaN(gstRate) || gstRate <= 0) {
        alert("Please enter a valid amount and GST rate!");
        return;
    }

    let cgstRate = gstRate / 2;
    let sgstRate = gstRate / 2;
    let gstAmount, netAmount, totalAmount, cgstAmount, sgstAmount;

    if (gstType === "add") {
        gstAmount = (amount * gstRate) / 100;
        cgstAmount = (amount * cgstRate) / 100;
        sgstAmount = (amount * sgstRate) / 100;
        totalAmount = amount + gstAmount;
        netAmount = amount;
    } else {
        totalAmount = amount;
        netAmount = (amount * 100) / (100 + gstRate);
        gstAmount = totalAmount - netAmount;
        cgstAmount = gstAmount / 2;
        sgstAmount = gstAmount / 2;
    }

    document.getElementById("netAmount").innerText = netAmount.toFixed(2);
    document.getElementById("cgstAmount").innerText = cgstAmount.toFixed(2);
    document.getElementById("sgstAmount").innerText = sgstAmount.toFixed(2);
    document.getElementById("gstAmount").innerText = gstAmount.toFixed(2);
    document.getElementById("totalAmount").innerText = totalAmount.toFixed(2);

    document.getElementById("cgstRate").innerText = cgstRate.toFixed(1);
    document.getElementById("sgstRate").innerText = sgstRate.toFixed(1);
    document.getElementById("totalGstRate").innerText = gstRate.toFixed(1);
}
