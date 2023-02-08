$(document).ready(function(){

    //1. Blinking effect
    $('#blinking').on('click',function(){
        $('p.blinking').fadeOut();
    });

    //2. Limit no of characters in the input field.
    $('#text').on('keydown',function(){
        $('#remaining_text').text("hello");
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
        $('p.change_text').text("This is my new text");
    });

    //6. Add options to a drop-down list using jQuery.
    $('#drop_down').on('click',function(){
        $('select').dropdown(2000);
    });

    //7. Delete all table rows except first one using jQuery
    $('#display_first_row').on('click',function(){
        $('tr:first');
    });

    //8. Remiove a link applied to any element using jQuery.
    $('#remove_link').on('click',function(){
        $('a.remove_link').remove();
    });

    // 9. Change background color of all the elements using jQuery
    $('#change_color').on('click',function(){
        $('p.change_color').css({"background-color":"red"}),
        $('span.change_color').css({"background-color":"red"}), 
        $('textarea.change_color').css({"background-color":"red"});
    });

    // 10. Using jQuery add the class " w3r_font_color " to the last paragraph element.
    $('#add_to_last_paragraph').on('click',function(){
        $('p.add_to_last_paragraph').addClass("w3r_font_color");
    });

    //11. Using jQuery insert some HTML after all paragraphs.
    $("#insert").click(function () {
        $("p.insert").text(function (i, origtext) {
            return origtext + " This is new inserted text (index: " + i + ")";
        });
    });

    //12. Finds all checkbox inputs. Print count
     var count=0;
    $('#count_checkbox').on('click',function(){
        $('p.count').text(function(){

                if($('input.checkbox1').val('car'))
                {
                    count++;
                }

                if($('input.checkbox2').val('truck'))
                {
                    count++;
                }

                if($('input.checkbox3').val('bike'))
                {
                    count++;
                }

            return count;
        });
    });

    //13. Finds the checked radio input.




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


});