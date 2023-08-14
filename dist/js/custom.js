$(document).ready(function () {
  // input focus work start
  $(".first-step input").on("focus", function (e) {
    e.preventDefault();
    $(".first-step .form-group").removeClass("active");
    $(this).parent().addClass("active");
  });
  $(".first-step input").on("focusout", function (e) {
    e.preventDefault();
    $(".first-step .form-group").removeClass("active");
    $(this).parent().removeClass("active");
  });
  // input focus work end

  //   Next btn
  $(".next").on("click", function (e) {
    e.preventDefault();
    $(this).parents(".container").addClass("d-none");
    $(this).parents(".container").next().removeClass("d-none");
  });

  // grid boxes click events

  $("#tax-filing").on("click", function (e) {
    e.preventDefault();
    $('[data-container="2"]').addClass("d-none");
    $.ajax({
      url: "./ajax/tax-filing.php",
      success: function (result) {
        $(".render-data").html(result);
      },
    });
  });

  $("#ntn-reg").on("click", function (e) {
    e.preventDefault();
    $('[data-container="2"]').addClass("d-none");
    $.ajax({
      url: "./ajax/ntn-registration.php",
      success: function (result) {
        $(".render-data").html(result);
      },
    });
  });

  $("#ntn-finder").on("click", function (e) {
    e.preventDefault();
    $('[data-container="2"]').addClass("d-none");
    $.ajax({
      url: "./ajax/ntn-finder.php",
      success: function (result) {
        $(".render-data").html(result);
      },
    });
  });

  $("#atl-finder").on("click", function (e) {
    e.preventDefault();
    $('[data-container="2"]').addClass("d-none");
    $.ajax({
      url: "./ajax/atl-finder.php",
      success: function (result) {
        $(".render-data").html(result);
      },
    });
  });

  $("#business-incorporation").on("click", function (e) {
    e.preventDefault();
    $('[data-container="2"]').addClass("d-none");
    $.ajax({
      url: "./ajax/business-incorporation.php",
      success: function (result) {
        $(".render-data").html(result);
      },
    });
  });
});
