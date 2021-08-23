<?php

function registerURL()
{

	$url='https://sandbox.safaricom.co.ke/mpesa/c2b/v1/regesterurl';
	$curl=curl_init();
	curl_setopt($curl, CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_HTTPHEADER,array('content.Tyoe:application/json','Authorization:Bearer ACCESS_TOKEN'.'NwAWk4PlLq7SmpxB3Kl21uXc2kDK'));

	$curl_post_data=array(
		'shortcode'=>'600000',
		'responseType'=>'completed',
		'ConfirmationURL'=>' https://419a92f310d8.ngrok.io/codes/Confirmation',
		'ValidationURL'=>'https://419a92f310d8.ngrok.io/codes/Validation'

	);
	$data_string=json_encode($curl_post_data);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_POST,true);
	curl_setopt($curl,CURLOPT_POSTFIELDS,$data_string);
	$curl_response=curl_exec($curl);
	print_r($curl_response);
	return $curl_response;

	}
 ?>