const container = document.getElementById("details");
const stored = sessionStorage.getItem("wpUserDetails");

if (!stored) {
  container.textContent = "No information was submitted. Return to the form and enter your details.";
} else {
  const data = JSON.parse(stored);
  const labels = {
    name: "Name", gender: "Gender", mobile: "Mobile number",
    email: "Mail ID", city: "City", state: "State", country: "Country"
  };
  Object.entries(labels).forEach(([key, label]) => {
    const row = document.createElement("p");
    const heading = document.createElement("strong");
    heading.textContent = label;
    const value = document.createElement("span");
    value.textContent = data[key] || "";
    row.append(heading, value);
    container.appendChild(row);
  });
}
