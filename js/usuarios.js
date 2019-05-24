$(document).ready(function () {

   // Busca os dados no banco ao pressiona a tecla
   $("#btn-search").click(function () {
      var search = $("#input-search").val();
      buscar(search);
   });

   // Busca o dados passando via parametro
   function buscar(valor)
   {
      $.ajax({
         type: 'POST',
         dataType: 'html',
         url: 'buscar.php',
         beforeSend: function () {
            $("#dados").html("Carregando...");
         },
         data: {valor: valor},
         success: function (result) {
            $("#dados").html(result);
         }
      });
   }
});
