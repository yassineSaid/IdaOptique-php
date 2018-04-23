
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
    <h3>Suivi de votre livraison</h3>
    <div id="map"></div>
      <?php 
      include_once '../core/TrackingC.php';
      $position=new PositionManage();
      $liste=$position->afficher_Position($_GET['id_commande']);
      $nbr=0;
      foreach ($liste as $row) { 
        $nbr++;?>
        <form method="POST" action="ajouter-position.php" name="form">

      <input type="hidden" name="lat" id="<?php echo 'lat'.$nbr ?>" value='<?php echo $row['lat'] ?>'>
      <input type="hidden" name="lng" id="<?php echo 'lng'.$nbr ?>" value='<?php echo $row['lng'] ?>'>
    </form>
      <?php }?>

      <input type="hidden" name="nbr" id="nbr" value='<?php echo $nbr ?>'>
    <script>
      function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: new google.maps.LatLng(36.862, 10.165),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});
       var condition=document.getElementById('nbr').value;
       var myMarker=[];
       
  //console.log(document.form.getElementById('lat0').value);
       var i=0;
       for(i=1;i<=condition;i++)
{
  myMarker[i] = new google.maps.Marker({
    position: new google.maps.LatLng(document.getElementById('lat'+i.toString()).value, document.getElementById('lng'+i.toString()).value),
    draggable: true
    });
  map.setCenter(myMarker[i].position);
myMarker[i].setMap(map);
}
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOQc0JR-lIo77HhJ-xaOGUsq7kqEe_I_M&callback=initMap">
    </script>
  </body>
</html>