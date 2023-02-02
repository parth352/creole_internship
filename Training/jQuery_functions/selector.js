 
$(document).ready(function()
{
  $("#hide").click(function()
  {
    $("p").hide();
  });

  $("#show").click(function(){
    $("p.intro").show();
  });

  $("tr:even").css("background-color", "red");

  $("#ul_first_child").click(function(){
    $("ul li:first-child").hide(); // hides first elements of every list
  });

});
