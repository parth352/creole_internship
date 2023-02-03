$(document).ready(function () {

    //folowing code is for get method in jquery
    $("#get_method_html").click(function () {
        alert("HTML:" + $("p.get_method").html());
    });
    $("#get_method_text").click(function () {
        alert("text :" + $("p.get_method").text());
    });
    $("#get_method_value").click(function () {
        alert("Your Name is " + $("#name").val());
    });

    // Following code is for set method in jquery
    $("#set_method_text").click(function () {
        $("p.set_method_text").text("Hello how are you");   // we are setting value in jQuery
    });
    $("#set_method_html").click(function () {
        $("p.set_method_html").html("<h1>This is header tag set in jQuery</h1>");
    });
    $("#set_method_value").click(function () {
        $("input.set_method_value").val("How are you");     // We are setting value in input field
    });

    //following code is for set value in jQuery with callback method
    $("#old_text").click(function () {
        $("p.old_text").text(function (i, origtext) {
            return "Old text: " + origtext + " New text: Hello world! (index: " + i + ")";
        });
    });
    $("#new_html").click(function () {
        $("p.new_html").text(function (i, origtext) {
            return "new html: " + origtext + "New html: <b> how are you </b> (index: " + i + ")";
        });
    });

    //following code is for jQuery append method

    $("#append_text").on('click', function () {                    // most of the time we use onclik method because it is used for handling events which allow us to pass multiple argument
        $("p.append_prepend_text").append(" <b>How are you </b>.");
    });

    $("#append_list").on(function () {            // If we do not pass any argument in on method .y default will work like click only.
        $("ol").append("<li>Hello world</li>");
    });
    $("#prepend_text").on('click', function () {
    });

    $("#prepend_list").on('click', function () {
        $("ol").prepend("<li>Hello</li>");
    });


    // following code is for jQuery before/after method
    $("#insert_before").on('click', function () {
        $("img").before("<b>Before</b>");
    });

    $("#insert_after").on('click', function () {
        $("img").after("<i>After</i>");
    });

    // following code is for jQuery remove or empty method
    $("#remove_method").click(function () {
        $("div.remove_method").remove();    // we can also use empty method it removes all the child element of selected element but not taht element itself  
    });

    // following code is for jQuery CSS classes methods
    $("#add_classes").on('click', function () {
        $("h1.add_remove_classes, h2.add_remove_classes, p.add_remove_classes, div.add_remove_classes").addClass("blue");  // .addclass("argument") in this argument is being called from stylesheet 
    });
    $("#remove_classes").on('click', function () {
        $("h1.add_remove_classes, h2.add_remove_classes, p.add_remove_classes, div.add_remove_classes").removeClass("blue");
    });
    $("#toggle_classes").on('click',function(){
        $("h1.add_remove_classes, h2.add_remove_classes, p.add_remove_classes, div.add_remove_classes").toggleClass("red");
    });

    // following code is for jQuery dimensions methods used for dispalying dimensions of any elemnt
    $("#display_dimensions").on('click',function(){
        var txt = "";
        txt += "Width of div: " + $("#div1").width() + "</br>";
        txt += "Height of div: " + $("#div1").height() + "</br>";
        txt += "Outer width: " + $("#div1").outerWidth() + "</br>";
        txt += "Outer height: " + $("#div1").outerHeight() + "</br>";
        txt += "Outer width (+margin): " + $("#div1").outerWidth(true) + "</br>";   // dispalys outerwidth by adding margin also when outerWidth(true) parameter is true
        txt += "Outer height (+margin): " + $("#div1").outerHeight(true);
        $("#div1").html(txt);
      }); 
});