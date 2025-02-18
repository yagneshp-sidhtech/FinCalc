function calculateEMI() {
    let interestRate = parseFloat(document.getElementById('interestRate').value);
    let emi = parseFloat(document.getElementById('emi').value);
    let periodYears = parseFloat(document.getElementById('periodYears').value);
    let periodMonths = parseFloat(document.getElementById('periodMonths').value);

    let n = (periodYears * 12) + periodMonths;
    let r = interestRate / (12 * 100);

    let loanAmount = emi * ((1 - Math.pow(1 + r, -n)) / r);
    let totalPayment = emi * n;
    let totalInterest = totalPayment - loanAmount;
    let totalInterestPercentage = (totalInterest / totalPayment) * 100;

    document.getElementById('loanAmount').innerText = loanAmount.toFixed(2);
    document.getElementById('interestRateDisplay').innerText = interestRate;
    document.getElementById('periodDisplay').innerText = periodYears;
    document.getElementById('periodDisplayMonths').innerText = periodMonths;
    document.getElementById('monthlyEMI').innerText = emi.toFixed(2);
    document.getElementById('totalInterest').innerText = totalInterest.toFixed(2);
    document.getElementById('totalInterestPercentage').innerText = totalInterestPercentage.toFixed(2);
    document.getElementById('totalPayment').innerText = totalPayment.toFixed(2);

    document.getElementById('result').style.display = 'block';
}