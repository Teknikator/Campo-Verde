function showClass(className) {
    var items = document.getElementsByClassName('bild');
    for (var i = 0; i < items.length; i++) {
      if (items[i].classList.contains(className)) {
        items[i].style.display = "block";
      } else {
        items[i].style.display = "none";
      }
    }

    // Hervorheben des aktiven Buttons
    var buttons = document.getElementsByTagName('button');
    for (var i = 0; i < buttons.length; i++) {
      if (buttons[i].classList.contains('active')) {
        buttons[i].classList.remove('active');
      }
    }
    event.currentTarget.classList.add('active');
  }
  
  function showAll() {
    var items = document.getElementsByClassName('bild');
    for (var i = 0; i < items.length; i++) {
      items[i].style.display = "block";
    }
  

      // Hervorheben des aktiven Buttons
  var buttons = document.getElementsByTagName('button');
  for (var i = 0; i < buttons.length; i++) {
    if (buttons[i].classList.contains('active')) {
      buttons[i].classList.remove('active');
    }
  }
  event.currentTarget.classList.add('active');
}