// ADD HOVERED CLASS IN SELECTED LIST ITEM

let list = document.querySelectorAll('.navigation li');

function activeLink(){
  list.forEach((item)=>item.classList.remove('hovered'));

  this.classList.add('hovered');  
}

list.forEach((item)=>
item.addEventListener('mouseover', activeLink)
);


// TOGGLE DASHBOARD MENU SIDEBAR
$('.toggle').click(function(){
    $('.navigation').toggleClass('adjust');
    $('.main').toggleClass('adjust');
});



// SHOW DROPDOWN MENU

$(".dropdown_menu").click(function(e){
    e.preventDefault();

    $(this).parent().siblings().children('.submenu').slideUp();
    $(this).parent().siblings().children('.dropdown_menu').children('.dropdown_icon').children().attr('name','chevron-down-outline');



    // $('.submenu').slideUp();
    // $('.submenu').prev().children('.dropdown_icon').children().attr('name','chevron-down-outline');

    $(this).next().slideToggle();

    const arrow = $(this).children('.dropdown_icon').children().attr('name');
      if(arrow == "chevron-down-outline")
      {
         $(this).children('.dropdown_icon').children().attr('name','chevron-up-outline');
      }
      else
      {
        $(this).children('.dropdown_icon').children().attr('name','chevron-down-outline');
      }

   
});
