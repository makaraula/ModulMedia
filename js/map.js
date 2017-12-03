var map;
var bounds;
var map = [];
function initializeMaps(markers, map_id, mid) {

    if (mid === undefined) {
          mid = 0;
    }

  var myOptions = {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    zoom: 13,
    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
  };
  map[mid] = new google.maps.Map(document.getElementById(map_id),myOptions);
  var infowindow = new google.maps.InfoWindow();
  var marker, i;
  bounds = new google.maps.LatLngBounds();

  if (markers.length != 0){
    for (i = 0; i < markers.length; i++) {
      var pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
      bounds.extend(pos);
      if(markers[i][5] == 'home'){
        var image = '../images/pin.png';
      }else{
        var image = '../images/pin.png';
      }
      marker = new google.maps.Marker({
        position: pos,
        map: map[mid],
        icon: image
      });

      if(markers[i][0] == 'lokacije-markeri'){
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            var content = '<div class="gmap-content">'+markers[i][3]+markers[i][4]+'<div class="gmap-content-text"><p>'+markers[i][5]+'</p></div></div>';
            infowindow.setContent(content);
            infowindow.open(map[mid], marker);
          }
        })(marker, i));
      }else if(markers[i][3]){
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            var content = '<div class="gmap-content">'+markers[i][5]+'<div class="gmap-content-text">'+markers[i][4]+'</div></div>';
            infowindow.setContent(content);
            infowindow.open(map[mid], marker);
          }
        })(marker, i));
      }else{
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            var content = markers[i][0];
            infowindow.setContent(content);
            infowindow.open(map[mid], marker);
          }
        })(marker, i));
      }

    }
  }else{
    var pos = new google.maps.LatLng(44.7947842, 16.609435);
    bounds.extend(pos);
  }

  if (markers.length > 1) {
    map[mid].setCenter(bounds.getCenter());
    map[mid].fitBounds(bounds);

  }
  else if (markers.length == 1) {
    map[mid].setCenter(bounds.getCenter());
    map[mid].setZoom(14);
  }else {
    map[mid].setCenter(bounds.getCenter());
    map[mid].setZoom(14);
  }

}
