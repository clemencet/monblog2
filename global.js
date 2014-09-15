// Custom JS
$(document).ready(function(){
  // Add your code here
  $("a[rel=popover1]")
    .popover()
    .click(function(e) { 
        e.preventDefault(); 
    });
});