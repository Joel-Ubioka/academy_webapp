    var base_url = "http://localhost/online_shop/";


    var loading = `<div class="loading_container">
                      <div class="loading_content">
                        <img src="${base_url}loading/loading.gif" alt="loading...">
                      </div>
                    </div>`;



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
        // $('.navigation').removeClass('contract');
        // $('.main').removeClass('contract');
        $('.navigation').toggleClass('adjust');
        $('.main').toggleClass('adjust');

        $('.dropdown_icon').toggle();
    });

    // DISPLAY THE NAVIGATION MENU ON HOVER

    // $('.navigation').hover(function(){


    //   if($(this).hasClass('adjust'))
    //   {
    //     $(this).removeClass('adjust');
    //     $('.main').removeClass('adjust');
    //     $('.dropdown_icon').show();
    //   }

    // });



    // SHOW DROPDOWN MENU

    $(".dropdown_menu").click(function(e){
        e.preventDefault();

        $('.navigation').removeClass('adjust');
        $('.main').removeClass('adjust');
        $('.dropdown_icon').show();

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



    // LOAD PAGE AUTOMATICALLY 
    $(document).ready(function(){
        let active_url = localStorage.getItem('active_url');

        if(active_url !== undefined)
        {
          active_url = "includes/dashboard.php";
        }

        $('.dashboard_container').html(loading);
        $('.loading_container').css('display','flex');
      
          $.ajax({
              type: "POST",
              url: active_url,
              success: function(response){
                $('.dashboard_container').html(response);
              }
            });
    });

    // DISPLAY INSERT PRODUCT PAGE

    $('.navigation a:not(.dropdown_menu)').click(function(e){

      e.preventDefault();

      $('.navigation').toggleClass('adjust');
      $('.main').toggleClass('adjust');

      // $('.dropdown_icon').toggle();

      // $(".navigation").addClass('adjust');
      // $('.main').addClass('adjust');
      // $('.dropdown_icon').hide();


      const page_url = $(this).attr('data-url');

      localStorage.setItem('active_url', page_url);


    if(page_url !== undefined)
    {
      $('.dashboard_container').html(loading);
      $('.loading_container').css('display','flex');

        $.ajax({
            type: "POST",
            url: page_url,
            success: function(response){
              $('.dashboard_container').html(response);
            }
          });
    }
      
    });

    // INSERT PRODUCT CATEGORY

    $('.dashboard_container').on('submit','#insert_category_form', function(e){
      e.preventDefault();
      const that = this;

      $(that).children('button').attr('disabled', true);

      $(this).ajaxSubmit({
    uploadProgress: function(event, position, total, percentComplete){
      $('.progress_container').css("display","flex");
      $('.progress_bar').css('width', percentComplete+"%")
      $('.progress_text').text(percentComplete+"%");

    },
    success: function(response){

      $('.toast_wrapper').fadeIn();
      if(response !== "Successfully inserted!")
      {
        $('.toast_container').addClass('danger');
      }
      else{
        $('.toast_container').removeClass('danger');
     
        that.reset();
        $('#file_text').text('Select category image');
      }
      $('.toast_msg span').html(response);

        setTimeout(function(){
          $('.toast_wrapper').fadeOut();
         $('.progress_container').hide();
        },5000)

      $(that).children('button').attr('disabled', false);
       
        
    }
      });
    });

// LOAD ACTIVE PAGE
    function load_active_page()
    {
      $('.dashboard_container').html(loading);
      $('.loading_container').css('display','flex');


      let active_url = localStorage.getItem('active_url');
      $.ajax({
          url: active_url,
          success: function(response){
            $('.dashboard_container').html(response);
          }
      });
    }

    //LOAD PAGE
    function load_page(url)
    {
      $('.dashboard_container').html(loading);
      $('.loading_container').css('display','flex');


      $.ajax({
          url: url,
          success: function(response){
            $('.dashboard_container').html(response);
          }
      });
    }


    //LOAD PAGE FOR EDITING
    function load_page(url, id)
    {
      $('.dashboard_container').html(loading);
      $('.loading_container').css('display','flex');


      $.ajax({
        type: "POST",
          url: url,
          data:{'edit_id':id},

          success: function(response){
            $('.dashboard_container').html(response);
          }
      });
    }

    // LOAD EDIT CATEGORY PAGE WHEN EDIT BUTTON IS CLICKED

    $('.dashboard_container').on("click", ".edit_btn", function(e){
      e.preventDefault();

      localStorage.removeItem('active_url');

        let id = $(this).attr('data-id');
        let url = $(this).attr('data-url');

         //localStorage.setItem("edit_id", id);
        
         load_page(url, id);
    });

