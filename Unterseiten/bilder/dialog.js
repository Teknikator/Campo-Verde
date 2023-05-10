const images = document.querySelectorAll("img[id^='bild']");
const overlay = document.querySelector("#overlay");
const dialog = document.createElement("div");
const closeButton = document.createElement("span");
const imageElement = document.createElement("img");

dialog.classList.add("dialog");
closeButton.classList.add("close-button");
closeButton.innerHTML = "&times;";
dialog.appendChild(imageElement);
dialog.appendChild(closeButton);

images.forEach(image => {
  image.addEventListener("click", function() {
    imageElement.src = this.src;
    overlay.appendChild(dialog);
    overlay.style.display = "block";
    document.body.style.overflow = "hidden";
    setTimeout(() => {
      dialog.classList.add("open");
      overlay.style.opacity = "1";
    }, 50);
  });
});

closeButton.addEventListener("click", function() {
  dialog.classList.remove("open");
  setTimeout(() => {
    overlay.style.display = "none";
    overlay.style.opacity = "0";
    document.body.style.overflow = "auto";
  }, 300);
});

overlay.addEventListener("click", function(event) {
  if (event.target === overlay) {
    dialog.classList.remove("open");
    setTimeout(() => {
      overlay.style.display = "none";
      overlay.style.opacity = "0";
      document.body.style.overflow = "auto";
    }, 300);
  }
});

