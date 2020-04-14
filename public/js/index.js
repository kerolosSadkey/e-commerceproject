

$(".fa-plus-circle").click(function(){
   var i=$("#quantity_input").val();
    $("#quantity_input").val(++i);
    
});
$(".option-img").click(function(e){
   var srcimg=$(this).attr("src");
    var proimg= $(".pro-img").attr("src");
    $(".pro-img").attr("src",srcimg);
    console.log(proimg);
    $(this).attr("src",proimg);
    
});