$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 55
        }, 1500, 'easeInOutExpo');
        return false;
      }
    }
  });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-brand').click(function() {
    $('.navbar-toggle:visible').click();
});
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation({

  submitSuccess: function ($form, event) {

    $("#submit").attr("disabled", "disabled");

    $.ajax({
      type: 'POST',
      url: $form.attr('action'),
      data: $form.serialize(),
      success: function(data)
      { 
        $("#submit").removeAttr("disabled");

        if(data == "true") {
          $('#contactForm').trigger("reset");
          $('#alert_placeholder').html('<div class="alert alert-dismissible alert-success"><a class="close" data-dismiss="alert">×</a><span>Your message has been sent. I\'ll respond to it soon.</span></div>')
        }else{
          $('#alert_placeholder').html('<div class="alert alert-dismissible alert-danger"><a class="close" data-dismiss="alert">×</a><span>Something went wrong. Please try again.</span></div>')
        }
      }
    });

    // will not trigger the default submission in favor of the ajax function
    event.preventDefault();
  }

});

} );