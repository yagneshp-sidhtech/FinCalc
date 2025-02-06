function calculateRD() {
    let deposit = parseFloat(document.getElementById("deposit").value);
    let rate = parseFloat(document.getElementById("rate").value);
    let term = parseInt(document.getElementById("term").value);
    let investmentDate = new Date(
        document.getElementById("investmentDate").value
    );

    if (
        isNaN(deposit) ||
        isNaN(rate) ||
        isNaN(term) ||
        !investmentDate.getTime()
    ) {
        alert("Please enter valid values.");
        return;
    }

    let investmentAmount = deposit * term;
    let monthlyRate = rate / (12 * 100);
    let totalInterest = 0;

    for (let i = 0; i < term; i++) {
        totalInterest += deposit * (term - i) * monthlyRate;
    }

    let maturityValue = investmentAmount + totalInterest;
    let maturityDate = new Date(investmentDate);
    maturityDate.setMonth(maturityDate.getMonth() + term);

    document.getElementById("investmentAmount").textContent =
        investmentAmount.toFixed(2);
    document.getElementById("totalInterest").textContent =
        totalInterest.toFixed(2);
    document.getElementById("maturityValue").textContent =
        maturityValue.toFixed(2);
    document.getElementById("maturityDate").textContent =
        maturityDate.toDateString();
}