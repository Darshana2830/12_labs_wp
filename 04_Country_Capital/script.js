const country = document.getElementById("country");
const capital = document.getElementById("capital");
country.addEventListener("change", () => {
  capital.textContent = country.value || "—";
});
