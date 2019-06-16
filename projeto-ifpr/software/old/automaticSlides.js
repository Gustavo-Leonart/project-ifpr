//window.alert("hello!");
var slideIndex = 0;
showSlides();

function showSlides(n){
  var s = document.getElementsByClassName("plusSlides"); //pega as classes com o nome "plusSlides"
  var i;
  //console.log(s); //gera um log (texto) da variável "s"

  	for(i = 0; i < s.length; i++){
    	s[i].style.display = "none";
  	}
  	slideIndex++;
  	if(slideIndex > s.length){
  		slideIndex = 1;
  	}
  	s[slideIndex-1].style.display = "block";
  	setTimeout(showSlides, 500); //tempo de mudança dos slides
}
