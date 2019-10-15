$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$('.carousel').carousel({
    interval: 3000
})

$('#nav-cartao-tab').click(function(){
    $(this).toggleClass("btn-pagto-active");
    $('#nav-boleto-tab').removeClass("btn-pagto-active");
});

$('#nav-boleto-tab').click(function(){
    $(this).toggleClass("btn-pagto-active");
    $('#nav-cartao-tab').removeClass("btn-pagto-active");
});