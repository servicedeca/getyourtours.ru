(function ($) {
  /*Drupal.behaviors.tours = {
    attach: function(context, settings) {
      $('#tours_tour_search_form').once().submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'tours/search_tours',
          type: 'POST',
          data: {
            city: $('#edit-city').val(),
            country: $('#edit-country-to').val(),
            date_of: $('#edit-date-of-datepicker-popup-0').val(),
            date_to: $('#edit-date-to-datepicker-popup-0').val()
          },
          success: function(response) {
              var $content_tours = $('#content_tours');
              $comment_rating.html(response)
          },
          error: function(response) {
            alert('false');
          }
        });
      });
    }
  };*/
}(jQuery));