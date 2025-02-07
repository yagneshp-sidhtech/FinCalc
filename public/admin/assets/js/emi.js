function calculateEMI() {
    let loanAmount = parseFloat(document.getElementById("loanAmount").value);
    let annualInterestRate = parseFloat(
        document.getElementById("interestRate").value
    );
    let years = parseInt(document.getElementById("periodYears").value) || 0;
    let months = parseInt(document.getElementById("periodMonths").value) || 0;

    let totalMonths = years * 12 + months;
    let monthlyInterestRate = annualInterestRate / 12 / 100;

    if (!loanAmount || !annualInterestRate || totalMonths <= 0) {
        alert("Please enter valid inputs");
        return;
    }

    let emi =
        (loanAmount *
            monthlyInterestRate *
            Math.pow(1 + monthlyInterestRate, totalMonths)) /
        (Math.pow(1 + monthlyInterestRate, totalMonths) - 1);
    let totalPayment = emi * totalMonths;
    let totalInterest = totalPayment - loanAmount;

    document.getElementById("displayLoanAmount").innerText =
        loanAmount.toFixed(2);
    document.getElementById("displayInterestRate").innerText =
        annualInterestRate;
    document.getElementById(
        "displayPeriod"
    ).innerText = `${years} Year ${months} Month`;
    document.getElementById("monthlyEMI").innerText = emi.toFixed(2);
    document.getElementById("totalInterest").innerText =
        totalInterest.toFixed(2);
    document.getElementById("totalPayment").innerText = totalPayment.toFixed(2);
}
