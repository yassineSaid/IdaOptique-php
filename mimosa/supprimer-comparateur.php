<?php
include ('comparateur.php');
$ids=$_GET['suppid'];
 unset($_SESSION['comparateur']['id_produit'][$ids]);

echo "<meta http-equiv='refresh' content='0;url=comparer.php'>";

?>