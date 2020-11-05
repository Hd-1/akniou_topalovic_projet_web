function changeImage(element)
{
  var x = element.getElementsByTagName("img").item(0);
  var v = x.getAttribute("src");
  if(v == ".png"){
    v = ".png";
    }
  else{
      v = ".png";
      x.setAttribute("src", v);}
}