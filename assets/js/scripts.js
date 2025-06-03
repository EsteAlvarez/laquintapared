const loader = document.getElementById("content_loader");

window.addEventListener("load", () => {
  loader.classList.add("fade-out");
});

AOS.init();
