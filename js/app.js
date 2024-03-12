//Hamburger menu
var linky = document.getElementsByClassName("odkaz");
function moja_funkcia()
{
  for (var linka of linky)
  {
    if (linka.style.display === "none")
    {
      linka.style.display = "block";
    } else
    {
      linka.style.display = "none";
    }
  }
}
//Dotazník 
var hodnoty = document.getElementById("dotaznik")
function hlasenie()
{
  if (hodnoty.checkValidity())
  {
    alert("Váš dotazník bol úspešne odoslaný");
  }

}
//Akordeón
var acc = document.getElementsByClassName("akordeon");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

//Galéria
let slideIndex = 1;
showSlides(slideIndex);

function posun(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mojestrany");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}