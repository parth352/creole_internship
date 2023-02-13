<html>
    <head> 
        <script src="jquery-3.6.3.min.js"></script>
    </head>
    
    <body>
        <form method ="post" action = "<?php $_SERVER['PHP_SELF'];?>">
            enter Id number to fetch data : <input type ="number" name ="id" class ="id" id="input"> <br>
            <input type = "submit" value = "submit" name= "submit" id ="submit">
        </form>
        <div id="table-container"></div>
                
        <script>
            $(document).ready(function(){
                $("#submit").click(function(e) {
                    e.preventDefault();
                    var id =$("#input").val();

                    $.ajax({
                        type: "get",
                        url: "get_query.php",
                        data: {
                            "id": id,
                        },

                        cache: false,
                        success: function(data){
                            $("#table-container").html(data); 
                        },

                        error: function(xhr,status,error){
                            console.error(xhr);
                        },
                    });
                });
            });
        </script>
    </body>
</html>