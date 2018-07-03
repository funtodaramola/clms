// JavaScript
Drupal.behaviors.ctools_backdrop_close = {
  attach: function(context, settings){
    $('#modalBackdrop').once('ctools_backdrop_close', function(){
      $(this).click(function() {
        Drupal.CTools.Modal.dismiss();
      });
    });
  }
}
