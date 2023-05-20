let slideIndex = 0;

$(".next").click(function(){
    showSlides(0);
});

$(".prev").click(function(){
  showSlides(2);
});

function showSlides(n)
{
 

  if(n == undefined)
  {
    n = 0;
  }

  // GET ALL SLIDES
  const slides = document.getElementsByClassName("slide");

  // HIDE ALL SLIDES
  for( let i = 0; i<slides.length; i++)
  {
    slides[i].style.display = "none";
  }

  slideIndex = slideIndex + 1 - n;

  if(slideIndex > slides.length)
  {
    slideIndex = 1;
  }

  if(slideIndex <= 0)
  {
    slideIndex = slides.length;
  }



  const product_index = localStorage.getItem("product_index");
  if(product_index == undefined)
  {
    slides[slideIndex - 1].style.display = "block";
  
  }
  else
  {
    slides[product_index].style.display = "block";
    localStorage.removeItem("product_index");
  }

  slides[slideIndex - 1].style.display = "block";

  let timeout = setTimeout(showSlides, 5000);

  $(".next, .prev, .product_list_box").click(function(){
    clearTimeout(timeout);
});
}




// GET INDEX OF AN OBJECT

function getIndex(obj,element)
{
  for(let i=0; i<obj.length; i++)
  {
    if(obj[i] == element)
    {
      index = i;
      return index;
    }
  }
}

//STORE PRODUCT INDEX AND RUN SHOWSLIDE

$('.product_list_box').click(function(){
const product_list = document.getElementsByClassName("product_list_box");
let product_index = getIndex(product_list,this);
localStorage.setItem("product_index",product_index);
showSlides(0);
});