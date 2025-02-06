function calculateSIP() {
    let monthlyInvestment = parseFloat(
        document.getElementById("monthlyInvestment").value
    );
    let years = parseInt(document.getElementById("years").value) || 0;
    let months = parseInt(document.getElementById("months").value) || 0;
    let rate = parseFloat(document.getElementById("rate").value) / 100 / 12;
    let totalMonths = years * 12 + months;

    let futureValue =
        monthlyInvestment *
        ((Math.pow(1 + rate, totalMonths) - 1) / rate) *
        (1 + rate);
    let totalInvestment = monthlyInvestment * totalMonths;
    let totalProfit = futureValue - totalInvestment;

    document.getElementById("totalInvestment").textContent =
        Math.round(totalInvestment);
    document.getElementById("totalReturn").textContent =
        Math.round(futureValue);
    document.getElementById("totalProfit").textContent =
        Math.round(totalProfit);

    document.getElementById("result").style.display = "block";
}

function resetForm() {
    document.getElementById("monthlyInvestment").value = "";
    document.getElementById("years").value = "";
    document.getElementById("months").value = "";
    document.getElementById("rate").value = "10";
    document.getElementById("result").style.display = "none";
}
