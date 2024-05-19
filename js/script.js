$(document).ready(function(){
    $(".reviews__slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 1
    });
});

$(document).ready(function() {
 
    //E-mail Ajax Send
    $("form").submit(function() { //Change
      var th = $(this);
      $.ajax({
        type: "POST",
        url: "/mail.php", //Change
        data: th.serialize()
      }).done(function() {
        swal("Отлично!", "Ваша заявка успешно принята!", "success");
        setTimeout(function() {
          // Done Functions
          th.trigger("reset");
        }, 1000);
      });
      return false;
    });
   
  });