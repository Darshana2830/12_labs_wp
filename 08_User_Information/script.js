document.getElementById("userForm").addEventListener("submit", (event) => {
  event.preventDefault();
  const form = event.currentTarget;
  if (!form.reportValidity()) return;
  const values = Object.fromEntries(new FormData(form).entries());
  sessionStorage.setItem("wpUserDetails", JSON.stringify(values));
  window.location.href = "display.html";
});
