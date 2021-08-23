
<?
$ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer u4OvGzve0TX66ucQ46EsDbnfuArC',
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, {
    "ShortCode": 600986,
    "ResponseType": "Completed",
    "ConfirmationURL": "  https://921c609deee0.ngrok.io/indexstk.php/",
    "ValidationURL": "https://mydomain.com/validation",
  });
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response     = curl_exec($ch);
curl_close($ch);
echo $response;