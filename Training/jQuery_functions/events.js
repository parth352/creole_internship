
$(document).ready(function(){
    $("#click").click(function(){
        $(this).hide();
    });
    
    $("#dblclick").dblclick(function(){
        $(this).hide();
    });

    $("#mouse_enter").mouseenter(function(){
        alert("You have hovered to that element");
    });

    $("#mouse_leave").mouseleave(function(){
        alert("you Leaved this element");
    });

    $("#mouse_down").mousedown(function(){
        alert("You have pressed mouse button");
    });

    $("#mouse_up").mouseup(function(){
        alert("You have realease mouse button");
    });

    $("#hover").hover(function(){  // hover event two functions are used
        alert("you have hovered over element");
    },
    function(){                    // this function will work when you move cursor out of element
        alert("you have leaved this element");
    });

    //  this are form events focus and blur
    $("input").focus(function(){    //// blur event is used when input field gain focus 
        $(this).css("background-color", "blue");
    });
    $("input").blur(function(){    // blur event is used when input field loses focus 
        $(this).css("background-color", "red");
    });

    $("#on_method").on({
        mouseenter: function(){
          $(this).css("background-color", "lightgrey");
        },  
        mouseleave: function(){
          $(this).css("background-color", "lightblue");
        }, 
        click: function(){
          $(this).css("background-color", "yellow");
        }  
      });
    
    // now from here onwards this all are keyboard events
    $("#key_down").keydown(function(){  // it will perform action when key is pressed
        alert("you pressed one key");
      });

    $("#key_up").keyup(function(){    // It performs action when key is released
        alert("you released one key");
      });

    count=0;
    $("#key_press").keypress(function(){  
        $("span").text (count += 1);  
      });  
});