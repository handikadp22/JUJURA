<?php

//LIST SALES
function list_sales($url, $lists){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $lists);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}
$lists =array("signature_key"=>"a1d8c6714905470b338635050e21c12f");

$send = list_sales("https://recruitment.jujura.id/api/sales",json_encode($lists));

// mengubah JSON menjadi array
$lists = json_decode($send, TRUE);

echo "<pre>";
print_r($lists);
echo "</pre>";

?>