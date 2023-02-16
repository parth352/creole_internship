$(document).ready(function(){

    //1. Blinking effect
    $('#blinking').on('click',function(){
        $('p.blinking').fadeToggle();
    });

    //2. Limit no of characters in the input field.
         var temp = '';
        $('#input').on("keyup", function() {
          var count = $('#input').val().length;
          if (count > 10) {
          	temp += $('#input').val().substring(9)
              $('#output').text(temp);
              $('#input').val( $('#input').val().substring(0, 9));
          }

          else if(count < 9)
          {
            $('#output').empty();
          }
        });
      

    //3. This is to underline text
    $('#under_line').on('click',function(){
        $('p.under_line').css({"text-decoration": "underline"});
    });

    // 4. remove all CSS classes of paragraph using jQuery
    $('#remove_class').on('click',function(){
        $('p.remove_class').removeClass('remove_class');
    });

    //5. Change button text using jQuery
    $('#change_text').on('click',function(){
        $('#change_text').text("This is my new text");
    });

    //6. Add options to a drop-down list using jQuery.
    $('#drop_down').on('click',function(){
        $('#add_option')
        .append("<option> New list </option>");
    });

    //7. Delete all table rows except first one using jQuery
    $('#display_first_row').on('click',function(){
        $("table tr:not(:first-child)").remove();
    });

    //8. Remiove a link applied to any element using jQuery.
    $('#remove_link').on('click',function(){
        $('a').removeAttr("href");
    });

    // 9. Change background color of all the elements using jQuery
    $('#change_color').on('click',function(){
        $('p.change_color').css({"background-color":"red"}),
        $('span.change_color').css({"background-color":"red"}), 
        $('textarea.change_color').css({"background-color":"red"});
    });

    // 10. Using jQuery add the class " w3r_font_color " to the last paragraph element.
    $('#add_to_last_paragraph').on('click',function(){
        $('p:last').addClass("w3r_color");
    });

    //11. Using jQuery insert some HTML after all paragraphs.
    $("#insert").click(function () {
        $("p.insert").text(function (i,origtext) {
            return origtext + " This is new inserted text";
        });
    });

    //12. Finds all checkbox inputs. Print count
     var count=0;
    $('#count_checkbox').on('click',function(){
        $('p.count').text(function(){
            var checkbox = $('input[type="checkbox"]').length;
            return checkbox;
        });
    });


    //13. Finds the checked radio input.
    $('#radio_check').on('click',function(){
        $('p.count_radio').text(function(){
            var radio = $('input[type="radio"]').length;
            return radio;
        });
    });


    //14.Border around all list items that are children of a specified class of an unordered list.
    $("#check_class_of_elements").on("click", function () {
        $("li")
          .filter(".color_class")
          .css({ color: "red", border: "2px solid red" }); // filter method will return the element of class name filter_method. Always assign .filter_method to specify class
      });


    // 15. Change the color of any paragraph to red on mouseover event.
    $('p.mouse_over').on('mouseover',function(){
        $(this).css({"color":"red"});
    });

    //16. Finds every paragraph element on the page and add red border to all paragraph.
    $("#change_paragraph_p").on("click", function () {
        $("div.change_paragraph_p").children("p").css({ border: "2px solid red" }); 
      });

});