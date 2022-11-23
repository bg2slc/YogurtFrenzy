function myFunction() {
   let fonts = document.getElementById("font");
   let currentFont = fonts.value;
   let element = document.getElementById("notepad_content");
   element.style.fontFamily = fonts.value;
   let size = document.getElementById("size").value;
   element.style.fontSize = size;
 }
