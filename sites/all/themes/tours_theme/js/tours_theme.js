(function ($) {
  Drupal.behaviors.toursSelectregion = {
    attach: $(function () {
      $(document).ready(function () {
        region_select();
      });
      $("#edit-country-to").change(function () {
        region_select();
      });
      function region_select(){
        var regionSelect = $('select[name="tourId"]');
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
      }
    })
  };

  Drupal.behaviors.toursSelecthotel = {
    attach: $(function () {
      $(document).ready(function () {
        hotel_select();

      });
      $("#edit-country-to").change(function () {
        hotel_select();
      });
      function hotel_select(){
        var hotelSelect = $('select[name="hotelId"]');
        var regionSelect = $('select[name="tourId"]');
        var countrySelect = $('select[name="country_to"]');
        var citySelect = $('select[name="city"]');
       // alert('ok');
        $.ajax({
          url: '/get_hotel',
          type: 'POST',
          data: {
            country_to: countrySelect.val(),
            city: citySelect.val(),
            region: regionSelect.val()
          },
          success: function(response) {
            hotelSelect.html('');
            hotelSelect.append(response);
          },
          error: function(response) {
            alert('false');
          }
        });
      }
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
    if($('#children-1').attr('class') == 'form-children item-count-children light') {
      $("#children-birthday1").show();
    }
    if($('#children-2').attr('class') == 'form-children item-count-children light') {
      $("#children-birthday2").show();
    }

    $(".form-children").click(function() {
      var id = $(this).attr('id');
      var id_next = parseInt(id.replace(/\D+/g,""))+1;
      $("#tours-count-children").val(id_next-1);
      if($('#children-'+id_next).attr('class') == 'form-children item-count-children' && $('#children-'+(id_next-1)).attr('class') == 'form-children item-count-children light') {
        $(this).removeClass('light');
      }
      else {
        if($('#children-'+id_next).attr('class') == 'form-children item-count-children light') {
          for (i=id_next; i<=2; i++) {
            $('#children-'+i).removeClass('light');
          }
        }
        else {
          for (i=1; i<=id_next-1; i++) {
            $('#children-'+i).addClass('light');
          }
        }
      }
      if($('#children-'+id_next-1).attr('class') == 'form-children item-count-children') {
        $("#children-birthday1").hide();
      }
      else {
        $("#children-birthday1").show();
      }
      if($('#children-'+(id_next)).attr('class') == 'form-children item-count-children') {
        $("#children-birthday2").hide();
      }
      else {
        $("#children-birthday2").show();
      }
      if($('#children-'+(id_next)).attr('class') == 'form-children item-count-children' && $('#children-'+(id_next-1)).attr('class') == 'form-children item-count-children') {
        $("#children-birthday1").hide();
      }
    })
  })
};

  Drupal.behaviors.toursChosen = {
    attach: $(document).ready(function(){
      $(".chosen").chosen({allow_single_deselect:true});
      //alert('ok');
    })
  };

}(jQuery));