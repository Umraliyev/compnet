(function(){
  $('ul.nav > li > a').click(function(){
    var service = $(this).attr('href');
    service = service.slice(1);
    $.ajax({
      type: "POST",
      url: "/show-service",
      data: "service="+service,
      success: function(response){
        $("#info").html(response);
      }
    });
  });
})();