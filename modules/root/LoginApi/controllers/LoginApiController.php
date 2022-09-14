<?php

class LoginApiController extends CController
{
	protected function _init()
	{
			parent::_init();
	}

	public function actionIndex()
	{
			$url = "https://magento2.futurismdemo.com/index.php/";

		    $userData = array("username" => "futurism1", "password" => "Futurism@123");
		    $ch = curl_init($url."rest/V1/integration/admin/token");
		    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($userData));
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-Lenght: " . strlen(json_encode($userData))));

		    $token = curl_exec($ch); 

		    $id = "1"; // Magento CUSTOMER_ID
			$ch = curl_init($url."rest/all/V1/customers/".$id);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer " . json_decode($token)));

			$Customer = curl_exec($ch);
			$Customer = json_decode($Customer, 1);

			echo "<pre>"; print_r($Customer);

			



		 /*   //$token = curl_exec($ch); 
		    echo $token;
		     $ch = curl_init("https://magento2.futurismdemo.com/index.php/rest/V1/customers/".
		        "yogeshv@futurismtechnologies.com". //username/email
		        "/".
		        "Admin@123" //password
		        );
		    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer " . json_decode($token)));

		    $result = curl_exec($ch);

		    echo($result);*/


	}

	public function actionLogins()
	{		  
			echo "you must first login as super admin";		 

	}
}
