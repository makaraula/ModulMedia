<?php
  $title = 'Kontakt';
  $keywords = 'Kontakt';
  $description = 'Kontakt';
  include '../include/header.php';
?>

<div class="row white relative ptbk">
  <div class="pageskew"></div>
  <div class="wrapper">

    <div class="content fw">

      <div class="bread-crumbs fw">
        <ul class="fw">
          <li><a href="home.php">Početna</a></li>
          <li>Kontakt</li>
        </ul>
      </div><!-- end .bread-crumbs -->

      <div class="clearfix"></div>

      <h1>Kontakt</h1>

      <div class="section group">
        <div class="w5 kinfo pl50 fright">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
             Earum quae saepe aliquid quidem placeat totam asperiores doloremque fugit velit maxime.</p>
          <p><strong>Modul Media j.d.o.o.</strong><br>
             <a data-rel="external" href="tel:+385953964395">+385 95 3964 395</a><br>
             <a href="mailto:info@modulmedia.hr">info@modulmedia.hr</a></p>
        </div><!-- end .kinfo -->
        <div class="w5 kforma pr50 fleft">
          <div id="kontakt-forma" class="fw">

            <form id="forma" name="forma" method="post" action="">

              <label for="ime_i_prezime">Ime i prezime *</label>
              <input name="ime_i_prezime" type="text" class="" id="ime_i_prezime" value=""/>

              <label for="email">Email *</label>
              <input name="email" type="text" class="" id="email" value=""/>

              <label for="poruka">Poruka</label>
              <textarea name="poruka" class="" id="poruka" cols="" rows="5"></textarea>

              <label for="capture">Zbrojite 7+5 *</label>
              <input name="kod" type="text"  class="" id="kod" />

              <input type="submit" class="btn send" name="posalji_upit" value="Pošaljite poruku" />
            </form>

          </div><!-- end of #kontakt-forma -->
        </div><!-- end .kforma -->
      </div><!-- end .section.group -->

    </div><!-- end .content -->

  </div><!-- end .wrapper -->
</div><!-- end .row -->

<div class="row lokacije">
  <div class="mapskew"></div>
  <div id="map1" class="map fw"></div>
</div><!-- end .lokacije -->

<?php include '../include/footer.php';?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(45.773011,15.944749),
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        };
        var mapElement = document.getElementById('map1');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(45.773011,15.944749),
            map: map,
            icon: '../images/pin.png',
            title: 'Modul Media j.d.o.o.'
        });
    }
</script>
