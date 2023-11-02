let popupEdit = document.querySelector(".popup-view");
let overlay1 = document.getElementById("overlay1");
var editButton = document.getElementById("editButton");

// editButton.addEventListener("click", openEdit);

function openEdit(data) {
  console.log(data);
  popupEdit.classList.add("open-popup-view");
  overlay1.classList.add("overlay-active");
}
function closeEdit() {
  popupEdit.classList.remove("open-popup-view");
  overlay1.classList.remove("overlay-active");
}
