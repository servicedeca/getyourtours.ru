(function ($) {
  Drupal.behaviors.toursSelectregion = {
    attach: $(function () {
      $("#edit-country-to").change(function () {
        var regionSelect = $('select[name="region"]');
        var countrySelect = $('select[name="country_to"]');
        var citySelect = $('select[name="city"]');
        $.ajax({
          url: '/get_region',
          type: 'POST',
          data: {
            country_to: countrySelect.val(),
            city: citySelect.val()
          },
          success: function(response) {
            regionSelect.html('');
            regionSelect.append(response);
          },
          error: function(response) {
            alert('false');
          }
        });
      });
    })
  };

  Drupal.behaviors.toursAddAdults = {
    attach: $(document).ready(function(){
      var count_adults = parseInt($("#tours-count-adults").val().replace(/\D+/g,""));
      for (i=1; i<=count_adults; i++) {
        $('#adults-'+i).removeClass('light, active');
        $('#adults-'+i).addClass('light');
      }
      $('#adults-'+count_adults).addClass('active');

      $(".form-adults").click(function() {
        var id = $(this).attr('id');
        var id_next = parseInt(id.replace(/\D+/g,""))+1;
        $('.active').removeClass('active');
        $(this).addClass('active');
        $("#tours-count-adults").val(id_next-1);
        if($('#adults-'+id_next).attr('class') == 'form-adults item-count-adults light') {
          for (i=id_next; i<=5; i++) {
            $('#adults-'+i).removeClass('light');
          }
        }
        else {
          for (i=1; i<=id_next-1; i++) {
            $('#adults-'+i).addClass('light');
          }
        }
      })
    })
  };

Drupal.behaviors.toursAddChildren = {
  attach: $(document).ready(function(){
   var count_children = parseInt($("#tours-count-children").val().replace(/\D+/g,""));
    for (i=1; i<=count_children; i++) {
      $('#children-'+i).removeClass('light');
      $('#children-'+i).addClass('light');
    }

    $(".form-children").click(function() {
      var id = $(this).attr('id');
      var id_next = parseInt(id.replace(/\D+/g,""))+1;
      $("#tours-count-children").val(id_next-1);
      if($('#children-'+id_next).attr('class') == 'form-children item-count-children' && $('#children-'+(id_next-1)).attr('class') == 'form-children item-count-children light') {
        $(this).removeClass('light');
        $("#children-date-one").hide()
      }
      else{
      if($('#children-'+id_next).attr('class') == 'form-children item-count-children light') {
        for (i=id_next; i<=2; i++) {
          $('#children-'+i).removeClass('light');
          $("#children-date-two").hide()
        }
      }
      else {
        for (i=1; i<=id_next-1; i++) {
          $('#children-'+i).addClass('light');
          $("#children-date-two").show()
        }
      }
      }
    })
  })
};
}(jQuery));