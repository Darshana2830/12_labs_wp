const form = document.getElementById("festivalForm");
const statusLine = document.getElementById("formStatus");

form.addEventListener("submit", (event) => {
  event.preventDefault();
  if (!form.reportValidity()) return;
  const name = document.getElementById("fullName").value.trim();
  const eventName = document.getElementById("event").value;
  statusLine.textContent = `Thank you, ${name}. Your ${eventName} registration has been recorded for this demonstration.`;
  form.reset();
});
form.addEventListener("reset", () => { statusLine.textContent = ""; });
