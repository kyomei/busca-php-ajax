$(document).ready(function () {

   // Busca os dados no banco ao pressiona a tecla
   $("#input-search").keydown(function () {
      var search = $("#input-search").val();
      buscar();
   });

   // Busca os dados sem parametro, pegando direito do seletor
   function buscar()
   {
      $.ajax({
         type: 'POST',
         dataType: 'html',
         url: 'buscar.php',
         beforeSend: function () {
            $("#dados").html("Carregando...");
         },
         data: {valor: $("#input-search").val()},
         success: function (result) {
            $("#dados").html(result);
         }
      });
   }
});
