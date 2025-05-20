document.addEventListener("DOMContentLoaded", function () {
  function setupDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    if (!dropdown) return;

    const label = dropdown.querySelector(".dropdown-label");
    const items = dropdown.querySelectorAll(".dropdown-item");

    items.forEach((item) => {
      item.addEventListener("click", function (e) {
        e.preventDefault();
        label.textContent = this.textContent;

        items.forEach((i) => i.classList.remove("active"));
        this.classList.add("active");
      });
    });
  }

  setupDropdown("timeDropdown");
  setupDropdown("statusDropdown");
});
