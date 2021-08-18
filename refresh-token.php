<?php

/** 
 * Generate Refresh Token 
 */
function generate_refresh_token(){
    $post = [
        'code' => '1000.8223b7ede4813b07017abae80a30f9e1.1ee9854cd3096dda1646771527673ef0',
        // 'code' => '1000.f1db3815df0ad132b863e0f9a4dcb30a.3c97c990eb2bf76de34326d742a34cc8', hacker0prime@gmail.com
        'redirect_uri' => 'https://redesign.bluedotinsights.com/',
        'client_id' => '1000.COLQKHAPVIUQUYOL46OFSPTWDERMXE',  
        'client_secret' => 'fe1c55421bdcf76c19cc133d48eb9ead7a7a4c50ca', 
        // 'client_id' => '1000.L8KI7KYJ4IFL01S4NLZ0A0X99KU7MB',   hacker0prime@gmail.com
        // 'client_secret' => 'f99dc62ce0be1e791aef69c8273e676112ad601c50',  hacker0prime@gmail.com
        'grant_type' => 'authorization_code'
    ];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://accounts.zoho.com/oauth/v2/token');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

$response = curl_exec( $ch );
$response = json_encode($response);
echo '<pre>';
print_r($response);

}
generate_refresh_token();

?>