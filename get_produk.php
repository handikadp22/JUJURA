<?php
//PRODUK
function get_produk($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}

$send = get_produk("https://recruitment.jujura.id/api/product");

// mengubah JSON menjadi array
$data = json_decode($send, TRUE);

echo "<pre>";
print_r($data);
echo "</pre>";
?>