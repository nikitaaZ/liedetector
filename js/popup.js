var btn = document.querySelector('.button-content-map');
var id = btn.getAttribute('href');
var popup = document.getElementById(id);
var closeBtn = document.querySelector('.close-element');
btn.addEventListener('click', function (e) {
  e.preventDefault();
  popup.classList.add('active');
    console.log(popup); 
});

function popupClose() {
  popup.classList.remove('active');
}

closeBtn.addEventListener('click', function () {
  popupClose();
});

window.addEventListener('keydown', function (e) {
  if (e.keyCode === 27) {
    if (popup.classList.contains('active')) {
      popupClose();
    }
  }
});