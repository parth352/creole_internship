$(document).ready(function(){

    // ajax load method
    $('#ajax_load').on('click',function(){
        $("div.ajax_load").load("demo_files/demo_test.txt");
    });

    // ajax error method
    $(document).ajaxError(function(){ // Trigger an alert box when an AJAX request fails:  
        alert("An error occured!");
      });

    // ajax load method which will display erroe
    $('#ajax_show_error_msg').on('click',function(){
        $("div.ajax_load").load("demo_files/demo_tst.txt",function(responseTxt ,statusTxt ,xhr){
            if(statusTxt == "success")
                alert("External content loaded successfully!");
            if(statusTxt == "error")
                alert(xhr.statusText +":"+ xhr.status);
        });
    });

    // ajax get method
    $('#ajax_get_method').on('click',function(){
        $.get("https://dummyjson.com/products/1", function(data,status){
            $.each(data,function(i,field){
                $("div.ajax_get_method").append("<br>"+ i + ":"+field + "");
            });
        });
       
    });

    // ajax post method
    $('#ajax_post_method').on('click',function(){
        $.post("demo_files/demo_test.php",
            {
               fname : "Parth",
                city : "dsd",
            },
            function(data,status){
                alert("Data "+ data + "\n status: " + status );
            })
    });

    // ajax method in jquery
    $("#ajax_method").click(function(){   
        jQuery.ajax({url: "demo_files/demo.html",
                type:'GET',                 // it is used to define type of method get/post/request
                async: 'fail',              // it is used to define wheather it is aynchronous and synchronous
                success: function(data){
                    $("div.ajax_method").html(data);
                }
        });
    });

    // setting default ajax method
    $("#set_default_ajax").click(function(){
        $.ajaxSetup({url: "demo_files/demo_ajax_load.txt", success: function(data){
            $("div.set_default_ajax").html(data);}});
            $.ajax();
        });

    //getjason method to read json files
    $("#getjson_method").click(function(){
        $.getJSON("demo_files/sample1.json", function(data){
            $.each(data,function(i,field){
                $("div.getjson_method").append("<br>"+ i + ":"+field + "");
            });
        });
    });

    //ajax param method
    personObj = new Object();
    personObj.firstname = "parth";
    personObj.lastname = "patel";
    personObj.age = 21;
    personObj.eyecolor = "black"; 
    $("#ajax_param").click(function(){
      $("div.ajax_param").text($.param(personObj));  //The param() method creates a serialized representation of an array or an object.
    });
    
    //ajax complete method
    $(document).ajaxStart(function(){            // from starting of ajax request start to complete it shows loading image
        $("div.wait").css("display", "block");
      });
      $(document).ajaxComplete(function(){      // ajax complete method it will return message when all the ajax request are completed.
        $("div.wait").css("display", "none");
      });
      $("#ajax_complete").click(function(){
        $("#txt").load("demo_files/demo_ajax_complete.txt");
      });
    // ajaxSuccess method
    $(document).ajaxSuccess(function(){
        alert("AJAX request successfully completed");  // it will return message when ajax request is completed sucessfully.
    });

    // jQuery serialize() Method
    $("#ajax_serialize_method").click(function(){
        $("div.ajax_serialize_method").text($("form").serialize());
      });

    // jQuery serializeArray() Method
    $("#serialize_array").click(function(){
        var x = $("form").serializeArray();  // method creates an array of objects (name and value) by serializing form values.
        $.each(x, function(i, field){
          $("div.serialize_array").append(field.name + ": " + field.value + " ");
        });
      });

    // ajaxSend method
    $(document).ajaxSend(function(e, xhr, opt){    //Change the content of a <div> element when an AJAX requests is about to be sent:
        $("div.ajax_send_method").append("<p>Requesting " + opt.url + "</p>");
    });

    

    
    
});
console.log("new_ajax is working");

