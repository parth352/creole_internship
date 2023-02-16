$(document).ready(function () {
  // following code is for Ancestors() method
  $("#single_parents").on("click", function () {
    $("span.ancestors").parent().css({ color: "red", border: "2px solid red" });
  });
  $("#multi_parents").on("click", function () {
    $("span.ancestors")
      .parents()
      .css({ color: "red", border: "2px solid red" });
  });
  $("#specified_parents").on("click", function () {
    $("span.ancestors")
      .parents("ul")
      .css({ color: "red", border: "2px solid red" });
  });
  $("#until_parents").on("click", function () {
    $("span.ancestors")
      .parentsUntil("div")
      .css({ color: "red", border: "2px solid red" });
  });

  // following code is for Decendants() method
  $("#decendants_child").click(function () {
    $("#div_decendants")
      .children()
      .css({ color: "red", border: "2px solid red" });
  });
  $("#decendants_find").click(function () {
    $("#div_decendants")
      .find("span.decendants")
      .css({ color: "red", border: "2px solid red" });
  });

  // following code is for sibling method
  $("#siblings").click(function () {
    $("h2").siblings().css({ color: "red", border: "2px solid red" });
  });
  $("#specified_siblings").click(function () {
    $("h2").siblings("p").css({ color: "red", border: "2px solid red" });
  });
  $("#siblings_next_method").click(function () {
    $("h2").next().css({ color: "red", border: "2px solid red" });
  });
  $("#siblings_nextall_method").click(function () {
    $("h2").nextAll().css({ color: "red", border: "2px solid red" });
  });
  $("#siblings_prevall_method").click(function () {
    $("h2").prevAll().css({ color: "red", border: "2px solid red" });
  }); // we have other methods like nextUntil/prev/prevUntil Methods


  // following method is for filtering methods
  $("#filter_first_method").on("click", function () {
    $("div.filter_method")
      .first()
      .css({ "background-color": "lightblue", border: "2px solid red" });
  });
  $("#filter_last_method").on("click", function () {
    $("div.filter_method")
      .last()
      .css({ "background-color": "lightblue", border: "2px solid red" });
  });
  $("#filter_equal_method").on("click", function () {
    $("p.filter_method")
      .eq(1)
      .css({ "background-color": "lightblue", border: "2px solid red" }); // eq method will return the specified element of specified position
  });
  $("#simple_filter_method").on("click", function () {
    $("p")
      .filter(".filter_method")
      .css({ color: "red", border: "2px solid red" }); // filter method will return the element of class name filter_method. Always assign .filter_method to specify class
  });
  $("#not_filter_method").on("click", function () {
    $("p")
      .not(".filter_method")
      .css({ color: "red", border: "2px solid red" }); // filter method will return the element of class name filter_method. Always assign .filter_method to specify class
  });
});
