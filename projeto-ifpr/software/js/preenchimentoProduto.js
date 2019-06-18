$(function(){
  $("#des_produto").click(function(){
    var des_produto = $(this).val();

    $.ajax({
      type: "GET",
      url: "produto.php",
      data: "des_produto"+=des_produto,
      success: function(receita){
        infoReceita = receita.split("-");
        $("des_receita").val(receita);
      }
    });
  });
});
