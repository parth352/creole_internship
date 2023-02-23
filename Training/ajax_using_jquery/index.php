<html>
    <head>
        <script src="jquery-3.6.3.min.js"></script>
        <script src ="new_ajax.js" type="text/javascript"></script>
    </head>
    <body>

        <h3>Use of ajax with jQuery</h3>
        <div class = "ajax_load">This is load method only use to load data on specified element</div>
        <button id ="ajax_load">click me to change content by ajax</button>
        <button id ="ajax_show_error_msg">click me to show error</button>

        <h3>use of ajax jquery get method</h3>
        <div class = "ajax_get_method"></div>
        <button id ="ajax_get_method">Click me to activate get method</button>

        <h3>use of ajax jquery post method</h3>
        <button id ="ajax_post_method">Click me to activate get method</button>

        <h3>use of ajax method in jquery</h3>
        <div class ="ajax_method"> This is ajax method in jquery</div>
        <button id ="ajax_method">Click me to See working of ajax method</button>

        <h3>Use of ajax setup method in jquery</h3>
        <div class ="set_default_ajax">This is ajax setup method in jquery</div>
        <button id ="set_default_ajax">Click me to See working of ajax setup method</button>

        <h3>Get jason file with GETJASON method</h3>
        <div class ="getjson_method">This is getJASON method</div>
        <button id ="getjson_method">Click me to See jason file</button>

        <h3>param method in ajax</h3>
        <div class ="ajax_param"></div>
        <button id ="ajax_param">Serialize object</button>
    
        <h3>ajax complete method</h3>
        <div id ="txt"><h2>Let AJAX change this text</h2></div>
        <div class ="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;">
        <img src ='demo_files/Loading_2.gif' width="64" height="64" /><br>Loading..</div>
        <button id ="ajax_complete">Change Content</button>

        <h3>jQuery serialize() Method</h3>
        <form action="">
            First name: <input type ="text" name ="FirstName" value=""><br>
            Last name: <input type ="text" name ="LastName" value=""><br>
        </form>
        <div class ="ajax_serialize_method"></div>
        <button id ="ajax_serialize_method">click to creates a URL encoded text string by serializing form values.</button>

        <h3>jQuery serializeArray() Method</h3>
        <div class ="serialize_array"></div>
        <button id ="serialize_array" >Serialize form values</button>
        
        <h3>Use of ajax send method change content of messaage when ajax request is about to send</h3>
        <div class ="ajax_send_method">here request message will be displayed</div>

    </body>
</html>