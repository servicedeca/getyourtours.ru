(function ($) {
  Drupal.behaviors.toursChildrenform = {
    attach: $(function () {
      $("#edit-country-to").change(function () {
        var regionSelect = $('select[name="region"]');
        var countrySelect = $('select[name="country_to"]')
        //alert(countrySelect.val());
        $.ajax({
          url: '/get_region',
          type: 'POST',
          data: {
            country_to: countrySelect.val()
          },
          success: function(response) {
            alert(response);
          },
          error: function(response) {
            alert('false');
          }
        });
        /*$.getJSON('/tours/get_region', { country_to: countrySelect.val() }, function(regionList) {
         alert('ok');
          regionSelect.html('');

          $.each(regionList, function(i){
            regionSelect.append('<option value="' + i + '">' + this + '</option>');
          });
        });*/
      });
    })
  };
}(jQuery));