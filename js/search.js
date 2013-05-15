function get_hostname(url) {
  var m = url.match(/^http:\/\/[^/]+/);
  return m ? m[0] : null;
}

function validatedSearchVenue() {
  var venueid = $.trim($("#venueid").val());
  if (venueid != "") {
    var url = get_hostname(location.href);
    location.href = url + '/searchVenue/' + venueid;
    return true;
  } else {
    alert("Please enter a valid venue name or location.");
    return false;
  }
}

$(document).ready(function() {
  $("#venueid").bind({
    focus: function() {
      $(this).val('');
    },
    blur: function() {
      var vv = $.trim($(this).val());
      $(this).val((vv != "") ? vv : this.defaultValue);
    }
  });
});