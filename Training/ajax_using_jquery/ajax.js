$(document).ready(function(){
    $('#ajax_load').on('click',function(){
        $("div.ajax_load").load("demo_test.txt");
    });

    $('#ajax_show_error_msg').on('click',function(){
        $("div.ajax_load").load("demo_test",function(responseTxt ,statusTxt ,xhr){
            if(statusTxt == "success")
                alert("External content loaded successfully!");
            if(statusTxt == "error")
                alert(xhr.statusText +":"+ xhr.status);
        });
    });

    $('#ajax_get_method').on('click',function(){
        $.get("demo_test.php", function(data,status){
            alert("data: " + data + "\n status: " + status);
        });
    });

    $('#ajax_post_method').on('click',function(){
        $.post("demo_test.php",
            {
                fname : "Parth",
                city : "Ahemdabad",
            },
            function(data,status){
                alert("Data "+ data + "\n status: " + status );
            })

    });
});