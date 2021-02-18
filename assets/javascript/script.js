jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks
    $('.navbar-collapse .dropdown-toggle').removeAttr('data-toggle');
    // Run the script once the document is ready
    $(document).ready(function() {
      $('.spanish-link a').on('click', function(){
        console.log('spanish clicked')
        $('.spanish-link').hide();
        $('.ingles-link').show();
      })
      $('.ingles-link a').on('click', function(){
        console.log('english clicked')
        $('.ingles-link').hide();
        $('.spanish-link').show();
      })
    });

    // Run the script once the window finishes loading
    $(window).load(function(){

    });




});
