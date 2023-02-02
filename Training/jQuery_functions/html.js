$(document).ready(function(){

    //folowing code is for get method in jquery
    $("#get_method_html").click(function(){
        alert ("HTML:"  + $("p.get_method").html());
    });
    $("#get_method_text").click(function(){
        alert ("text :" + $("p.get_method").text());
    });
    $("#get_method_value").click(function(){
        alert ("Your Name is " + $("#name").val());
    });

    // Following code is for set method in jquery
    $("#set_method_text").click(function(){
        $("p.set_method_text").text("Hello how are you");   // we are setting value in jQuery
    }); 
    $("#set_method_html").click(function(){
        $("p.set_method_html").html("<h1>This is header tag set in jQuery</h1>");
    });
    $("#set_method_value").click(function(){
        $("input.set_method_value").val("How are you");     // We are setting value in input field
      });

    //following code is for set value in jQuery with callback method
    $("#old_text").click(function(){
        $("p.old_text").text(function(i , origtext){
            return "Old text: " + origtext + " New text: Hello world! (index: " + i + ")"; 
        });
    });
    $("#new_html").click(function(){
        $("p.new_html").text(function(i , origtext){
            return "new html: " + origtext + "New html: <b> how are you </b> (index: "+ i +")";
        });
    });
});