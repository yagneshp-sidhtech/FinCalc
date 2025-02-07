function calculatePPF() {
    let deposit = parseFloat(document.getElementById("deposit").value);
    let rate = parseFloat(document.getElementById("rate").value) / 100;
    let duration = parseInt(document.getElementById("duration").value);
    let investmentDate = new Date(
        document.getElementById("investmentDate").value
    );

    if (isNaN(deposit) || isNaN(rate) || isNaN(duration)) {
        alert("Please enter valid values.");
        return;
    }

    let totalAmount = 0;
    let annualDeposit = deposit;
    for (let year = 1; year <= duration; year++) {
        totalAmount = (totalAmount + annualDeposit) * (1 + rate);
    }

    document.getElementById("maturityValue").innerText = totalAmount.toFixed(2);
    document.getElementById("investAmount").innerText = (
        deposit * duration
    ).toFixed(2);
    document.getElementById("totalInterest").innerText = (
        totalAmount -
        deposit * duration
    ).toFixed(2);

    investmentDate.setFullYear(investmentDate.getFullYear() + duration);
    document.getElementById("maturityDate").innerText =
        investmentDate.toDateString();

    document.getElementById("result").style.display = "block";
}
