const calculator = document.getElementById("calculator");
const result = document.getElementById("result");

calculator.addEventListener("submit", (event) => {
  event.preventDefault();
  if (!calculator.reportValidity()) return;

  const first = Number(document.getElementById("first").value);
  const second = Number(document.getElementById("second").value);
  const operation = document.getElementById("operation").value;
  let answer;

  if (operation === "add") answer = first + second;
  if (operation === "subtract") answer = first - second;
  if (operation === "multiply") answer = first * second;
  if (operation === "divide") {
    if (second === 0) {
      result.textContent = "Cannot divide by zero";
      return;
    }
    answer = first / second;
  }
  result.textContent = Number.isInteger(answer) ? String(answer) : String(Number(answer.toFixed(8)));
});
calculator.addEventListener("reset", () => { result.textContent = "—"; });
