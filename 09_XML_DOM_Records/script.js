const button = document.getElementById("loadXml");
const tbody = document.getElementById("records");
const statusText = document.getElementById("status");

button.addEventListener("click", async () => {
  tbody.replaceChildren();
  statusText.textContent = "Reading books.xml...";

  try {
    const response = await fetch("books.xml");
    if (!response.ok) throw new Error("The XML file could not be loaded.");
    const xmlText = await response.text();
    const xmlDoc = new DOMParser().parseFromString(xmlText, "application/xml");
    if (xmlDoc.querySelector("parsererror")) throw new Error("The XML document has a syntax error.");

    const books = Array.from(xmlDoc.getElementsByTagName("book"));
    books.forEach((book) => {
      const row = document.createElement("tr");
      const cells = [
        book.getAttribute("id"),
        book.getAttribute("category"),
        book.getElementsByTagName("title")[0]?.textContent ?? "",
        book.getElementsByTagName("author")[0]?.textContent ?? "",
        book.getElementsByTagName("price")[0]?.textContent ?? ""
      ];
      cells.forEach((value) => {
        const cell = document.createElement("td");
        cell.textContent = value;
        row.appendChild(cell);
      });
      tbody.appendChild(row);
    });
    statusText.textContent = `${books.length} records successfully read from books.xml.`;
  } catch (error) {
    statusText.textContent = `${error.message} Run the project using Live Server or a local web server.`;
  }
});
