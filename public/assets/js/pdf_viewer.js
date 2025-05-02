window.onload = function () {
  let pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null,
    scale = window.devicePixelRatio || 1.5,
    rotation = 0,
    canvas = document.getElementById("pdf-render"),
    ctx = canvas.getContext("2d");

  pdfjsLib.getDocument(url).promise.then(function (pdfDoc_) {
    pdfDoc = pdfDoc_;
    document.getElementById("totalPages").textContent = pdfDoc_.numPages;
    updateZoomUI();
    renderPage(pageNum);
  });

  function renderPage(num) {
    pageRendering = true;
    pdfDoc.getPage(num).then(function (page) {
      const viewport = page.getViewport({ scale: scale, rotation: rotation });
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      canvas.style.width = "100%";
      canvas.style.height = "auto";

      const renderContext = {
        canvasContext: ctx,
        viewport: viewport,
      };
      page.render(renderContext).promise.then(function () {
        pageRendering = false;
        document.getElementById("currentPage").value = num;
        if (pageNumPending !== null) {
          renderPage(pageNumPending);
          pageNumPending = null;
        }
      });
    });
  }

  function updateZoomUI() {
    document.getElementById("zoomLevel").textContent =
      Math.round(scale * 100) + "%";
  }

  function queueRenderPage(num) {
    if (pageRendering) {
      pageNumPending = num;
    } else {
      renderPage(num);
    }
  }

  document.getElementById("zoomInBtn").addEventListener("click", zoomIn);
  document.getElementById("zoomOutBtn").addEventListener("click", zoomOut);
  document
    .getElementById("fitToScreenBtn")
    .addEventListener("click", fitToScreen);
  document.getElementById("rotateBtn").addEventListener("click", rotate);

  function zoomIn() {
    scale += 0.1;
    updateZoomUI();
    queueRenderPage(pageNum);
  }

  function zoomOut() {
    scale -= 0.1;
    updateZoomUI();
    queueRenderPage(pageNum);
  }

  function rotate() {
    rotation = (rotation + 90) % 360;
    queueRenderPage(pageNum);
  }

  function fitToScreen() {
    scale = canvas.parentElement.clientWidth / canvas.width;
    queueRenderPage(pageNum);
  }

  function goToPage(num) {
    if (num > 0 && num <= pdfDoc.numPages) {
      pageNum = parseInt(num);
      queueRenderPage(pageNum);
    }
  }

  // Optional: bind input event
  document
    .getElementById("currentPage")
    .addEventListener("change", function () {
      goToPage(this.value);
    });
};

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
