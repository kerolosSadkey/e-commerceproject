$(".category div").on("mouseenter",function(){
    $(this).animate({"paddingLeft":"-=10","paddingRight":"-=10"});
});
$(".category div").on("mouseleave",function(){
    $(this).animate({"paddingLeft":"+=10","paddingRight":"+=10"});
});
$('.carousel_text').ready(function(){
    $(".carousel_text ").animate({"top":"0px"},500);
})


