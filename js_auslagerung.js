function rotater(x) {
  var rootelement = document.getElementById(x);
  var elements = rootelement.getElementsByClassName('zenterh');
  var lenge = elements.length;
  var erster = elements[0].src;
  for (i = 0; i < lenge-1; i++) {
    elements[i].src = elements[i+1].src;
  }
  elements[lenge-1].src = erster;
}


function collapser(x) {
  var currentclass = document.getElementById(x).className;
  console.log(this.src);
  console.log(this);
  if (currentclass == "elbi") {
    document.getElementById(x).className = "elbi_c";
    this.src="grfx/down.png" 
  }
  else {
    document.getElementById(x).className = "elbi";
    this.src="grfx/up.png" 
  }
}
