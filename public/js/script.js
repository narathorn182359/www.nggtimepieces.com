$(document).ready(function() {
    $('#popupclose').fancybox({
            'width': '60%',
            'height': '60%',
            'autoScale':false,
            'transitionIn':'none',
            'transitionOut':'none'}).trigger('click');
    
    });
        
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#efefef",
          "text": "#404040"
        },
        "button": {
          "background": "#d42727"
        }
      },
      "content": {
        "message": "We use cookies that allows us to optimise and personalise your experience. By continuing use of our website, you are agreeing to our Privacy Policy",
        "href": "https://www.nggtimepieces.com/privacy_policy"
      }
    })});


    $(document).bind("contextmenu",function(e) { 
      e.preventDefault();
     
    });


    $(document).ready(function(){
      $("#myform").on("submit", function(){
        $("#pageloader").fadeIn();
      });//submit
    });//document ready