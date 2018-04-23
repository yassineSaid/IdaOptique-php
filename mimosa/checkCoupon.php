<?php
include_once '../core/couponC.php'; 
	if (isset($_POST['coupon']))
	{
		$code = new couponC();
		$pourcentage=0;
		$_SESSION['coupon']=$_POST['coupon'];
		$liste=$code->verifierCoupon($_SESSION['coupon']);
		foreach($liste as $val)
		{
	        $code=$val['codePromo'] ;
			$pourcentage=$val['pourcentage'];
			$validite=$val['validite'];
			if ($validite==1)
			{
				$pourcentage=$val['pourcentage'];
				$_SESSION['pourcentage']=$val['pourcentage'];
			}
			else
			{
				$pourcentage=0;
			}
        }
        echo $pourcentage;
	}
	else echo "0";
?>