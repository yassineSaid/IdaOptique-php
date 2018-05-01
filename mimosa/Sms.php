
<?php
	// Authorisation details.
include_once 'connect.php';
if(isset($_POST) & !empty($_POST)){
	$telephone = mysqli_real_escape_string($connection, $_POST['telephone']);
	$sql = "SELECT * FROM `client` WHERE telephone = '$telephone'";
	$res = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($res);
	
	if($count == 1){
    $r= mysqli_fetch_assoc($res);
    $password =$r['MotDePasse'];
	$username ="leehowon08@gmail.com";
	$hash ="19c5a16fe922a0357ebd51df938a581b09edb96e83ddac69c79e323ff9753ab1";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender ="idaoptique"; // This is who the message appears to be from.
	$numbers =$r['telephone'];  // A single number or a comma-seperated list of numbers
	$message = "Veuillez connecter avec ce mot de passe :" . $password;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo "vérifiez votre boite de messagerie";
	//echo $result;
}
}
?>


