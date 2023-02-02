$(document).ready(function()
{  
     $("#hide").click(function(){
            $("p").hide('slow');    // hide(slow) shows that it hides content slowly
      });
      $("#show").click(function(){
            $("p").show(2000);      // hide(2000) shows that it shows content in 2000 milli seconds
      });
      $("#hide_show_toogle").click(function(){
            $("p.hide_show_toggle_test").toggle(1000); // This method displays show/hide content on single button click
      });

      //   now from here fade effects starts
      $("#fadeout").click(function(){                   // this method fades in/out content
            $("p.fadein_fadeout").fadeIn(1000);  
      });  
      $("#fadein").click(function(){
            $("p.fadein_fadeout").fadeOut(1000);
      });
      $("#fade_toogle").click(function(){             // This method fadein/fadeout content on single button click
            $("p.fade_toggle").fadeToggle(1000);
      });

    //   now from here sliding effects starts
      $("#slide_up").click(function(){
            $("p.slide").slideUp("slow");
      });
      $("#slide_down").click(function(){
            $("p.slide").slideDown("slow");
      });
      $("#slide_toggle").click(function(){
            $("p.slide").slideToggle("slow");
      });

    //   now from here Animation effects starts
      $("#animation").click(function(){
            $("div.semi_animation").animate({   // perform animation of red box from left to right
                left:'250px',
                opacity:'1',
                height: 'toggle',
                width: '150px'});

      var div = $("div.complete_animation");  
                div.animate({left: '100px',opacity:'0.3'}, "slow"); //  perform animation by defining variable and accessing each animation by variable name
                div.animate({fontSize: '3em'}, "slow");
       });

       // now from here jquery stop effects start
       $("#flip").click(function(){
            $("#panel").slideDown(5000);
       });
      $("#stop").click(function(){
            $("#panel").stop();
      });

      // Now from here Jquery callback function starts
      $("#callback_effect").click(function(){
            $("p.callback_effect").hide("slow", function(){       // here there is another function inside another function is called callback function where one function call another function. 
                alert ("Your hide effect is finished so your callback function is executed");
            });
      });

    //Now from here Jquery chaining method starts whis is very useful
    $("#chaining_method").click(function(){
            $("pre.chaining_method").slideUp("slow").slideDown("slow").css("color","red")
    });   

});
