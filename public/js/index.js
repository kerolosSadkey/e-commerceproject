

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
$('.more').click(function(){
    $('.details-pro').slideDown();
    var p= $(this).parent().parent().parent();
    var idpro=$(this).parent().children().children().eq(1)
    var ch0= p.children().eq(0).children().eq(0);
    var ch1= p.children().eq(1).children().eq(0);
    var ch2=p.children().eq(1).children().eq(1)
     var ch3 = p.children().eq(1).children().eq(2)
     var ch4 = p.children().eq(1).children().eq(3)

    $('.details-pro .card-img-top').attr('src',ch0.attr('src'));
    $('.details-pro .card-body .card-title').text(ch1.text());
    $('.details-pro .card-body .card-text').text(ch2.text());
    $('.details-pro .card-body .card-price').text(ch3.text());
    $('.details-pro .card-body .card-quentity').text(ch4.text());
    $('.details-pro .idpro').val(idpro.val());



});

$('#cancle').click(function(){
    $('.details-pro').slideUp();
});
$('#cancle-masg').click(function(){
    $('.masg-buy').slideUp();
});
