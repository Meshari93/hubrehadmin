
$(".addFavorite").on('click', function () {
  var propertyId = $(this).attr('data-propertyId');
  propertyId = propertyId.slice(0,-2);
  var property_s = $(this).attr('data-propertyId');
  // alert(propertyId);

  $.ajax({
    type: 'POST',
    url: url,
    data: { propertyId: propertyId, property_st: property_s,  _token: token },

    success: function (data) {
      // alert(data.is_Favorite);
      if (data.is_Favorite == 1) {
        $('*[data-propertyId="'+ propertyId +'_a"]').removeClass('btn-grey col-red').addClass('btn-danger');
      }
      if (data.is_Favorite == 0) {
        $('*[data-propertyId="'+ propertyId +'_a"]').removeClass('btn-danger').addClass('btn-grey col-red');
      }
    },
  });
});
