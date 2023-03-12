$(document).ready(function() {


    $.get("/php/show_patients.php", function(data) {
    
      var table = "<table><thead><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th></tr></thead><tbody>";
      for (var i = 0; i < data.length; i++) {
        table += "<tr data-id='" + data[i].id + "'><td>" + data[i].username + "</td><td>" + data[i].blood_type + "</td><td>" + data[i].ehr + "</td></tr>";
      }
      table += "</tbody></table>";
      $("#data").html(table);
      
      $("tr").click(function() {
        var id = $(this).data("id");
        alert("Selected ID: " + id);
      });
    });
  });