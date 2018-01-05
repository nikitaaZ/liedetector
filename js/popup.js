$('.popupbtn').click(
    function(event){
        var id = $(this).attr('href');
        $('#'+id).addClass("active");
        $('.dark-bg').addClass("active");
    }
)

$('.close-pop').click(
    function(event){
        $('.popup').removeClass("active");
        $('.dark-bg').removeClass("active");
    }
)
$('html').keydown(function(e){
  if (e.keyCode == 27) {
    $('.popup').removeClass("active");
    $('.dark-bg').removeClass("active");
  }
});