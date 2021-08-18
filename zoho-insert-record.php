<?php

include('access-token.php');

$age = array("email"=> $_SESSION['email'], "lastName"=> $_SESSION['lastname'], "firstName"=> $_SESSION['firstname'] );
$age2 = json_encode($age); 

// https://www.youtube.com/watch?v=ToCP_MwORAw (Zoho CRM How to create records with API V2 using cURL & PHP)
// https://help.zoho.com/portal/en/community/topic/php-code-to-insert-ticket-automatically-22-4-2021
// https://stackoverflow.com/questions/54741436/zoho-desk-invalid-oauth 
$oauth_token = $_SESSION['access_token2'];
// $org_id=757120317; hacker0prime@gmail.com
$org_id=757211624;	
$ticket_data=array(
// "departmentId"=>"630852000000006907", hacker0prime@gmail.com
"departmentId"=>"631097000000006907", 
"contact"=>$age2,
"subject"=>"Ticket From Contact Form",
"phone"=>$_SESSION['phone'], 
"description"=>$_SESSION['message']
);
$headers=array(
"Authorization:Zoho-oauthtoken ". $oauth_token,
"orgId: $org_id",
"contentType: application/json; charset=utf-8",
);
$url="https://desk.zoho.com/api/v1/tickets";
$ticket_data = (gettype($ticket_data)==="array")? json_encode($ticket_data):$ticket_data;
$ch= curl_init($url);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS,$ticket_data); //convert ticket data array to json

$response= curl_exec($ch);
$info= curl_getinfo($ch);
if($info['http_code']==200){
// echo "<h2>Request Successful, Response:</h2> <br>";
// echo $response;
}
else{
// echo "Request not successful. Response code : ".$info['http_code']." <br>";
// echo "Response : $response";
}
curl_close($ch);


?>