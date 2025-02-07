function calculateEMI(amount, rate, months) {
    let monthlyRate = rate / 12 / 100;
    return (amount * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -months));
}

function compareLoans() {
    let amount1 = parseFloat(document.getElementById("loanAmount1").value) || 0;
    let amount2 = parseFloat(document.getElementById("loanAmount2").value) || 0;
    let rate1 = parseFloat(document.getElementById("interestRate1").value) || 0;
    let rate2 = parseFloat(document.getElementById("interestRate2").value) || 0;
    let months1 = parseInt(document.getElementById("months1").value) || 0;
    let months2 = parseInt(document.getElementById("months2").value) || 0;

    let emi1 = calculateEMI(amount1, rate1, months1).toFixed(2);
    let emi2 = calculateEMI(amount2, rate2, months2).toFixed(2);
    let totalPayment1 = (emi1 * months1).toFixed(2);
    let totalPayment2 = (emi2 * months2).toFixed(2);
    let interestPayable1 = (totalPayment1 - amount1).toFixed(2);
    let interestPayable2 = (totalPayment2 - amount2).toFixed(2);

    document.getElementById("emi1").innerText = emi1;
    document.getElementById("emi2").innerText = emi2;
    document.getElementById("emiDiff").innerText = (emi2 - emi1).toFixed(2);

    document.getElementById("interest1").innerText = interestPayable1;
    document.getElementById("interest2").innerText = interestPayable2;
    document.getElementById("interestDiff").innerText = (
        interestPayable2 - interestPayable1
    ).toFixed(2);

    document.getElementById("total1").innerText = totalPayment1;
    document.getElementById("total2").innerText = totalPayment2;
    document.getElementById("totalDiff").innerText = (
        totalPayment2 - totalPayment1
    ).toFixed(2);
}

function resetForm() {
    document.querySelector("form").reset();
    document
        .querySelectorAll(".output span")
        .forEach((span) => (span.innerText = "0.00"));
}
