/*global $, jquery , alert , console,document,window,value,pageXOffset,rem,e,sc,pageXOffset , top*/
$(document).ready(function () {
    "use strict";
    new WOW().init();
   /* $(".page-content").load(function() {
      $(".loader").fadeOut();
    });*/
    var url = document.URL.split('?');
   
    if(url.length > 1 ){
        window.location = document.URL.split('?')[0];
    }
    
    $("a.delete").click(function(e){
       if(!confirm("هل انت متأكد من عمليه الحذف")){
           e.preventDefault();
       } 
    });
   
    
    $("body").niceScroll({cursorcolor: 'rgba(65, 103, 121, 0.98);',cursorfixedheight: 90, zindex: 999999});
  $('.header').particleground({
    dotColor: '#4f6363',
    lineColor: '#4f6363'
});
    

// smoothScroll

   
	
	 
      $(".welcome").typed({
        strings : ["Welcome To Bus Kids Website"],
        typeSpeed: 10,
       startDelay:1000,
      
    });
    
    
    
    $(".dataTables_wrapper .dataTables_filter input").attr('placeholder','ابحث عن الاسم او البريد الالكتروني او العنوان');
    $('.carousel').carousel({
        interval: 2000
    });
    // navbar and page content size
    $(".navbar span:first-of-type").click(function(){
        if($(".navbar-menu").hasClass('open')){
            $(".navbar-menu").removeClass('open').addClass('close');      
            $(".page-content").removeClass('most-size').addClass('full-size');
            $(".message").removeClass('message-found-navbar');
        }else{
            $(".navbar-menu").removeClass('close').addClass('open');
            $(".page-content").removeClass('full-size').addClass('most-size');
            $(".message").addClass('message-found-navbar');
        }
    });
    
    /*--------------------------start of auth controller --------------------------------------------*/
    
    $(".auth h1 span").click(function (){
       if(!$(this).hasClass('active')){
           $(this).siblings('span').removeClass('active');
           $(this).addClass('active');
           $(".auth form").fadeOut();
           $(".auth form."+$(this).attr('data')).fadeIn();
       } 
    });
     // get regions
    /*$(".register #city_id").change(function(){
        console.log($(this).val());
        $.getJSON("http://zoba.net/auth/getcities/"+$(this).val()+" ",function(data) {
            $(".register #regions").html(data);
        
        });
 });*/
    
    
    /*--------------------------end of auth controller --------------------------------------------*/
    
    /*--------------------------start of dashbord controller --------------------------------------------*/
    $("table tr td a.delete").click(function(e){
       
       if(confirm("هل انت متأكد من عمليه الحذف")){
           
       }else{
            e.preventDefault();
       }
    });
    
    
    /*--------------------------end of dashbord controller --------------------------------------------*/
    
    
    
    
        /*--------------------------start of request controller --------------------------------------------*/

    $("#requestCordination").submit(function(e){
        if($(this).find('#cordination').val().length === 0){
            alert('يرجي الضغط عل المكان الذي تود فيه تنفيذ الخدمه علي الخريطه');
            e.preventDefault();
        }
        
    });
    
    
    
      /*--------------------------end of request controller --------------------------------------------*/

      /*--------------------------start of all pages --------------------------------------------*/
      

      
      
  /*-------------------------------start of profile----------------------------------------*/
  $(".my-services .service a:first-of-type").click(function(){
     var id = $(this).attr('id');
     
     $.getJSON('http://graduation.net/profile/getservice/'+id,function(data){
         console.log(data);
         $(".my-services .display-service").fadeIn();
         $(".my-services .display-service").html(data); 
     });
     
  });  
  $(".my-services .service a:nth-of-type(2)").click(function(){
     var id = $(this).attr('id');
     
     $.getJSON('http://graduation.net/profile/updateservice/'+id,function(data){
         console.log(data);
         $(".my-services .display-service").fadeIn();
         $(".my-services .display-service").html(data); 
     });
     
  });  
  
  
  
  
  
 $(".my-services .display-service").on('click','.icon-right',function(){
    $(this).parent().fadeOut(); 
 });
   
   
   /*============================================end of  profile==================================*/
    
    
    
    
    
  /*============================================start of  services==================================*/
  $(".services .service .info a.comment").click(function(){
      $(".allcomments").fadeToggle();
      $(".services .service .add-comment input[name='comment']").fadeToggle();
      $(".add-comment .form-group").fadeToggle();
  });
  
    
   $(".add-comment form").submit(function(e){
      e.preventDefault();
      var id = $(this).find('input[type="submit"]').attr('id');
      var comment = $(this).find('input[name="comment"]').val();
      $.ajax({
          url:"http://graduation.net/services/insert/"+id,
          type:"POST",
          data:{comment:comment},
          dataType:"JSON",
          success:function(data){
               $('input[name="comment"]').val("");
               $(".allcomments").html(data);
          }
          
      })
   });
    
    
 /*============================================end of  services==================================*/

   

});
