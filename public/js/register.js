$(function(){
   
   

   /* animation on start*/
   $(".divmid-login").animate({"marginTop":"0px"},700);
   $(".divmid").animate({"marginTop":"0px"},700);
   $(".btn").animate({"marginLeft":"30%"},1000);


   
   /*btn back*/
   $(".bt-back").click(function(){
      window.history.back();
   });
   
   $(".bt-back-regist").click(function(){
      window.history.back();
   });


/* animate for divide login  */
   /* animate for email */
   $('.email-input').on("focus",function(){
      $('.email-char').css({'color':'#007BFF'});
      $('.email-char').animate({'top':'9px'},500);
   });
   $('.email-input').on("blur",function(){
      if($('.email-input').val().trim()==""){
         $('.email-char').css({'color':'#7A8489'});
         $('.email-char').animate({'top':'39px'},500);
      }
   });
   /* animate for password */
   $('.password-input').on("focus",function(){
      $('.password-char').css({'color':'#007BFF'});
      $('.password-char').animate({'top':'9px'},500);
   });
   $('.password-input').on("blur",function(){
      if($('.password-input').val().trim()==""){
         $('.password-char').css({'color':'#7A8489'});
         $('.password-char').animate({'top':'39px'},500);
      }
   });
   /* animate for fname */
   $('.fname-input').on("focus",function(){
      $('.fname-char').css({'color':'#007BFF'});
      $('.fname-char').animate({'top':'9px'},500);
   });
   $('.fname-input').on("blur",function(){
      if($('.fname-input').val().trim()==""){
         $('.fname-char').css({'color':'#7A8489'});
         $('.fname-char').animate({'top':'39px'},500);
      }
   });
   /* animate for lname */
   $('.lname-input').on("focus",function(){
      $('.lname-char').css({'color':'#007BFF'});
      $('.lname-char').animate({'top':'9px'},500);
   });
   $('.lname-input').on("blur",function(){
      if($('.lname-input').val().trim()==""){
         $('.lname-char').css({'color':'#7A8489'});
         $('.lname-char').animate({'top':'39px'},500);
      }
   });
   /* animate for email */
   $('.email-input1').on("focus",function(){
      $('.email-char1').css({'color':'#007BFF'});
      $('.email-char1').animate({'top':'9px'},500);
   });
   $('.email-input1').on("blur",function(){
      if($('.email-input1').val().trim()==""){
         $('.email-char1').css({'color':'#7A8489'});
         $('.email-char1').animate({'top':'39px'},500);
      }
   });
   /* animate for password1 */
   $('.password-input1').on("focus",function(){
      $('.password-char1').css({'color':'#007BFF'});
      $('.password-char1').animate({'top':'9px'},500);
   });
   $('.password-input1').on("blur",function(){
      if($('.password-input1').val().trim()==""){
         $('.password-char1').css({'color':'#7A8489'});
         $('.password-char1').animate({'top':'39px'},500);
      }
   });
   /* animate for password1-confirm */
   $('.password-input1-confirm').on("focus",function(){
      $('.password-char1-confirm').css({'color':'#007BFF'});
      $('.password-char1-confirm').animate({'top':'9px'},500);
   });
   $('.password-input1-confirm').on("blur",function(){
      if($('.password-input1-confirm').val().trim()==""){
         $('.password-char1-confirm').css({'color':'#7A8489'});
         $('.password-char1-confirm').animate({'top':'39px'},500);
      }
   }); 
   /* animate for phone */
   $('.phone-input').on("focus",function(){
      $('.phone-char').css({'color':'#007BFF'});
      $('.phone-char').animate({'top':'9px'},500);
   });
   $('.phone-input').on("blur",function(){
      if($('.phone-input').val().trim()==""){
         $('.phone-char').css({'color':'#7A8489'});
         $('.phone-char').animate({'top':'39px'},500);
      }
   });
   



   /* show hide password  */
   $(".hide-password").on('click',function(){
      $(".hide-password").hide();
      $(".show-password").show();
      $(".password-input").attr('type','text');
   });
   $(".show-password").on('click',function(){
      $(".show-password").hide();
      $(".hide-password").show();
      $(".password-input").attr('type','password');
   });
   
   $(".hide-password1").on('click',function(){
      $(".hide-password1").hide();
      $(".show-password1").show();
      $(".password-input1").attr('type','text');
   });
   $(".show-password1").on('click',function(){
      $(".show-password1").hide();
      $(".hide-password1").show();
      $(".password-input1").attr('type','password');
   });

   $(".hide-password2").on('click',function(){
      $(".hide-password2").hide();
      $(".show-password2").show();
      $(".password-input1-confirm").attr('type','text');
   });
   $(".show-password2").on('click',function(){
      $(".show-password2").hide();
      $(".hide-password2").show();
      $(".password-input1-confirm").attr('type','password');
   });



   



});