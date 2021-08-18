<?php

/** 
 * Generate Refresh Token 
 */
function generate_access_token(){
    // session_start();

    $post = [
        'refresh_token' => '1000.6072bfd5fe071456ab986e137a67894b.9f81dc8827a5627deb32a55bbd9ba614',
        // 'refresh_token' => '1000.3653697c015bc958ac2f1defeb144ed4.7313af0aa301cd16b7ae3de45e254495', hacker0prime@gmail.com
        'redirect_uri' => 'https://redesign.bluedotinsights.com/',
        'client_id' => '1000.COLQKHAPVIUQUYOL46OFSPTWDERMXE', 
        'client_secret' => 'fe1c55421bdcf76c19cc133d48eb9ead7a7a4c50ca',
        // 'client_id' => '1000.L8KI7KYJ4IFL01S4NLZ0A0X99KU7MB', hacker0prime@gmail.com
        // 'client_secret' => 'f99dc62ce0be1e791aef69c8273e676112ad601c50', hacker0prime@gmail.com
        'grant_type' => 'refresh_token'
    ];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://accounts.zoho.com/oauth/v2/token');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

$response = curl_exec( $ch );
$response = json_decode($response);
// echo '<pre>';print_r($response);
// echo $response[0];   Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in C:\xampp\htdocs\bluedot\access-token.php:27
// https://stackoverflow.com/questions/6815520/cannot-use-object-of-type-stdclass-as-array
// echo $response->access_token;
 $_SESSION['access_token2'] = $response->access_token;

}
generate_access_token();

?>