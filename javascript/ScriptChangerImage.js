function changeImage(element)
{
  var x = element.getElementsByTagName("img").item(0);
  var v = x.getAttribute("src");
  if(v == "feed-blue.png"){
    v = "feed-orange.png");
    }
  else{
      v = "feed-blue.png");
      x.setAttribute("src", v);}
}