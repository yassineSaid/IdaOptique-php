
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
    <div id="panel"></div>
      <?php 
      include_once '../core/livraisonC.php';
      $livraison= new LivraisonManage();
      $liste2=$livraison->afficher_livraison_id_commande($_GET['id_commande']);
      foreach ($liste2 as $row) { ?>
      <input type="hidden" name="address" id="<?php echo "adresse" ?>" value='<?php echo $row['adresse1']." ".$row['ville']." ".$row['pays'] ?>'>
      <?php }?>
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
    zoom: 15,
    center: new google.maps.LatLng(36.862, 10.165),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});
       var condition=document.getElementById('nbr').value;
       var myMarker=[];
     /* var  myMarkerDepart = new google.maps.Marker({
    position: new google.maps.LatLng(36.862, 10.165),
    draggable: false
    });
  //map.setCenter(myMarkerDepart.position);
myMarkerDepart.setMap(map);*/
       
  //console.log(document.form.getElementById('lat0').value);
       var i=0;
       for(i=1;i<=condition;i++)
{
  myMarker[i] = new google.maps.Marker({
    position: new google.maps.LatLng(document.getElementById('lat'+i.toString()).value, document.getElementById('lng'+i.toString()).value),
    animation:google.maps.Animation.BOUNCE,
        icon: 'img/map.png',
    draggable: false
    });
  
  map.setCenter(myMarker[i].position);
myMarker[i].setMap(map);
}




/*var geocoder;
geocoder = new google.maps.Geocoder();
var adresse = document.getElementById('adresse').value;
geocoder.geocode( { 'address': adresse}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      // Récupération des coordonnées GPS du lieu tapé dans le formulaire
      var strposition = results[0].geometry.location+"";
      strposition=strposition.replace('(', '');
      strposition=strposition.replace(')', '');
      // Affichage des coordonnées dans le <span>
      //document.getElementById('text_latlng').innerHTML='Coordonnées : '+strposition;
      // Création du marqueur du lieu (épingle)
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Adresse introuvable: ' + status);
    }
  });*/



var panel;
var direction;
direction = new google.maps.DirectionsRenderer({
    map   : map, 
    panel : panel 
});
var adresse = document.getElementById('adresse').value;
var request = {
            origin      : "la coupole ennasr ",
            destination : adresse,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Type de transport
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
        directionsService.route(request, function(response, status){ // Envoie de la requête pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
            }
        });
    }
      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOQc0JR-lIo77HhJ-xaOGUsq7kqEe_I_M&callback=initMap">
    </script>
  </body>
</html>