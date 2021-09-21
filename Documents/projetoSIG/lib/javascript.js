

 $(document).ready(function() {
      var urlBase = "https://parallelum.com.br/fipe/api/v1/carros/marcas";

      /** Marcas**/

      $.getJSON(urlBase, function(data) {
        var items = ["<option value=\"\">ESCOLHA UMA MARCA</option>"];
        $.each(data, function(key, val) {
          items += ("<option value='" + val.codigo + "'>" + val.nome + "</option>");
        });
        $("#marcas").html(items);
      });

      /** Veiculo**/

      $("#marcas").change(function() {
        $.getJSON(urlBase + "/" + jQuery("#marcas").val() + "/" + "modelos", function(data) {
          var items = ["<option value=\"\">ESCOLHA UM VEICULO</option>"];
          $.each(data.modelos, function(key, val) {
            items += ("<option value='" + val.codigo + "'>" + val.nome + "</option>");
          });
          $("#modelos").html(items);
        });
      });

      /** Ano**/

      $("#modelos").change(function() {
        $.getJSON(urlBase + "/" + jQuery("#marcas").val() + "/" + "modelos" + "/" + jQuery("#modelos").val() + "/" + "anos", function(data) {
          var items = ["<option value=\"\">ESCOLHA O ANO</option>"];
          $.each(data, function(key, val) {
            console.log(data)
            items += ("<option value='" + val.codigo + "'>" + val.nome + "</option>");
          });
          $("#anos").html(items);
        });
      });
      
       /** valor**/

      $("#anos").change(function() {
        $.getJSON(urlBase + "/" + jQuery("#marcas").val() + "/" + "modelos" + "/" + jQuery("#modelos").val() + "/" + "anos" + "/" + jQuery("#anos").val(), function(data) {
         var items = [];
          $.each( data, function( key, val ) {
            items.push( "<li id='" + key + "'>" + val + "</li>" );
             });
          $("#valor").html(items);
        });
      });
   
    });
        