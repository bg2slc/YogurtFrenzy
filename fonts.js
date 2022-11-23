function myFunction() {
    let fonts = document.getElementById("font");
    let currentFont = fonts.value;

    // Delete line below this later its for debugging
    document.getElementById("55").innerHTML = currentFont;

    let element = document.getElementById("textToChange");
    element.style.fontFamily = fonts.value;
    let size = document.getElementById("size").value;
    element.style.fontSize = size;
  }