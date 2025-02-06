document.getElementById("investmentDate").valueAsDate = new Date();
let interestType = "cumulative";

document.getElementById("cumulativeBtn").addEventListener("click", function () {
    interestType = "cumulative";
});
document.getElementById("quarterlyBtn").addEventListener("click", function () {
    interestType = "quarterly";
});
document.getElementById("monthlyBtn").addEventListener("click", function () {
    interestType = "monthly";
});

function calculateFD() {
    let deposit = parseFloat(document.getElementById("deposit").value);
    let rate = parseFloat(document.getElementById("rate").value) / 100;
    let years = parseInt(document.getElementById("years").value) || 0;
    let months = parseInt(document.getElementById("months").value) || 0;
    let investmentDate = new Date(
        document.getElementById("investmentDate").value
    );

    let totalMonths = years * 12 + months;
    let maturityDate = new Date(investmentDate);
    maturityDate.setMonth(maturityDate.getMonth() + totalMonths);

    let interest = 0;
    if (interestType === "cumulative") {
        interest = (deposit * rate * totalMonths) / 12;
    } else if (interestType === "quarterly") {
        interest = ((deposit * rate * totalMonths) / 12) * 0.75;
    } else if (interestType === "monthly") {
        interest = ((deposit * rate * totalMonths) / 12) * 0.5;
    }

    let maturityValue = deposit + interest;

    document.getElementById("maturityValue").textContent =
        maturityValue.toFixed(2);
    document.getElementById("investmentAmount").textContent = deposit;
    document.getElementById("totalInterest").textContent = interest.toFixed(2);
    document.getElementById("maturityDate").textContent =
        maturityDate.toDateString();

    document.getElementById("result").style.display = "block";
}
