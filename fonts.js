function mine()
{
    //let font = document.getElementById("font");
    //document.getElementsById("sademo").innerhtml = font;
}

function myFunction() {
    let fonts = document.getElementById("font");
    let currentFont = fonts.value;
    document.getElementById("demo").innerHTML = currentFont;
    let element = document.getElementById("demo");
    element.style.fontFamily = fonts.value;
    //document.getElementById("demo").style.fontfamily = "Comic Sans MS";
    let size = document.getElementById("size").value;
    element.style.fontSize = size;
  }