<?php
if(isset($_POST['checkout'])){
	date_default_timezone_set('Africa/Nairobi');
	$consumerkey='dKBYkQqFQZKhhn77PXoiyhfXi38sFXNW';
	$consumerSecret='BrCMdjg5akHHVKM2';
	#defining variables;
	$amount=$_POST['amount'];
	$BusinessShortCode='174379';
	$Passkey='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
	$PartyA=$_POST['phone'];//number to be used
	$PartyA=600990;
	$PartyB=600000;
	$AccountReference=$_POST['username'];
	$TransactionDesc='';//app
	$Timestamp=date('YmdHis');
	$password=base64_encode($BusinessShortCode.$Passkey.$Timestamp);
	//header to access tokens
	//$header=['Content-Type:application/json; charset=utf8'];
	// mpesa urls
	$acess_token_url='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
	$initiate_url='';
	//callback
	$CallBackURL=' https://d4852c29a1f8.ngrok.io/indexstk.php';
	$curl=curl_init($acess_token_url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, 'Authorization: Bearer cFJZcjZ6anEwaThMMXp6d1FETUxwWkIzeVBDa2hNc2M6UmYyMkJmWm9nMHFRR2xWOQ==');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HEADER, FALSE);
	curl_setopt($curl, CURLOPT_USERPWD, $consumerkey.':'.$consumerSecret);
	$result=curl_exec($curl);
	$status=curl_getinfo($curl,CURLINFO_HTTP_CODE);
	$result=json_decode($result);
	$access_token=$result->access_token;
	curl_close($curl);

	//stkpush now
	$stkheader='';
	$curl=curl_init();
	curl_setopt($curl,CURLOPT_URL,$initiate_url);
	curl_setopt($curl,CURLOPT_HTTPHEADER,$stkheader);
	$curl_post_data=array(
		'BusinessShortCode'=>$BusinessShortCode,
		'Passowrd'=>$Password,
		'Timestamp'=>$Timestamp,
		'TransactionType'=>'customerpaybillonline',
		'amount'=>$amount,
		'PartyA'=>$PartyA,

	)
?>