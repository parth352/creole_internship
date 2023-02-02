 
$(document).ready(function()
{
  $("#hide").click(function()  // hiding content
  {
    $("p").hide();
  });

  $("#show").click(function(){  // showing content
    $("p.intro").show();
  });

  $("tr:even").css("background-color", "red");    // changing color of even row of table

  $("#ul_first_child").click(function(){  // hiding first element of each list
    $("ul li:first-child").hide(); // hides first elements of every list
  });

});
