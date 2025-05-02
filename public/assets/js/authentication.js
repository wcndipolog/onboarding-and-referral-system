document.addEventListener("DOMContentLoaded", function () {
  const openBtns = document.querySelectorAll("#openModalBtn");
  const modalElement = document.getElementById("pdfModal");

  if (modalElement) {
    const bsModal = new bootstrap.Modal(modalElement);

    openBtns.forEach(function (btn) {
      btn.addEventListener("click", function () {
        bsModal.show();
      });
    });
  }
});
