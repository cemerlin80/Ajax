$.get("menureg.php", null, function(data) {
    $("#menu1").html(data);
    $("select").formSelect();
  });


  $("#menu1").change(function() {
    var reg_id = $("#menu1").val();
    //$("#menu2").load("menu2.php?sta_id=" + sta_id);
    $.get("menudep.php", "reg_id=" + reg_id, function(data) {
      $("#menu2").html(data);
      $("select").formSelect();
    });
  });