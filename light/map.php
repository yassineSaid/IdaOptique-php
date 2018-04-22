
<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Tracking</h3>
    <div id="map"></div>
    <form method="POST" action="ajouter-position.php">
    <div id="current">Nothing yet...</div>
    <input type="hidden" name="lat" id="lat">
    <input type="hidden" name="lng" id="lng">
    <input type="submit" id="valider" name="Valider" disabled="disabled">
    <select name='id' >
      <?php 
      require_once '../core/livraisonC.php';
      $livre=new LivraisonManage();
      $liste=$livre->afficher_livraisons();
      foreach ($liste as $row) {?>

    <option value='<?php echo $row['id_commande'] ?>'><?php echo $row['id_commande'] ?></option>
    <?php } ?>
    </select>
    </form>
    <script>
      function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 1,
    center: new google.maps.LatLng(35.137879, -82.836914),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var myMarker = new google.maps.Marker({
    position: new google.maps.LatLng(47.651968, 9.478485),
    draggable: true
});

google.maps.event.addListener(myMarker, 'dragend', function (evt) {
    document.getElementById('lat').value=evt.latLng.lat().toFixed(3);
    document.getElementById('lng').value=evt.latLng.lng().toFixed(3);
    document.getElementById('valider').disabled=false;
    
});

google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
    document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
});

map.setCenter(myMarker.position);
myMarker.setMap(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOQc0JR-lIo77HhJ-xaOGUsq7kqEe_I_M&callback=initMap">
    </script>
  </body>
</html>