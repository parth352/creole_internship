//$.noConflict();             // it releases the hold of the $ schortcut identifier, so that other script can use it
var $ = $.noConflict();    //we can also create our own shortcut identifier

jQuery(document).ready(function(){  // so now we have to write full jQuery insted of $ symbol

    // following code is for noConflict method
    jQuery("#noconflict_method").on('click',function(){
        jQuery("p.noconflict_method").text("jQuery is working after using noConflict method which release the use of $ schortcut key");
    });
    
    $("#shortcut_identifier").on('click',function(){  // here we have use sc as shortcut identifier
        $("p.shortcut_identifier").text("jQuery is still workig after creating short cut identifier");
    });

    //following code is for filter method
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

/*
        $("#myInput").keyup(function() {                         // This is another method of filtering method but this will also filter the header
        var value = this.value.toLowerCase();

        $("table").find("tr").each(function(index) {
            if (index === 0) return;
            var id = $(this).find("td").first().text().toLowerCase();
            $(this).toggle(id.indexOf(value) !== -1);
        });
    });
*/

    // following code is for each method in misc
    $("#each_method").on('click',function(){
        $("li").each(function(){
            alert ("I have " + $(this).text() + " car");
        });
    });
});


/*
$.noConflict();
jQuery(document).ready(function(cb){  // so now we can also define schort cut identifier by writing schortcut key inside ready(function(shortcut_key))
    cb("#noconflict_method").on('click',function(){
        cb("p.noconflict_method").text("jQuery is working after using noConflict method which release the use of $ schortcut key");
    });
    
    cb("#shortcut_identifier").on('click',function(){  // here we have use sc as shortcut identifier
        cb("p.shortcut_identifier").text("jQuery is still workig after creating short cut identifier");
    });
});
*/