<?php

//SALES INSERT
function sales_insert($url, $sales){
    $cht = curl_init(); 
    curl_setopt($cht, CURLOPT_URL, $url);
    curl_setopt($cht, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($cht, CURLOPT_POSTFIELDS, $sales);
    curl_setopt($cht, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($cht); 
    curl_close($cht);      
    return $output;
}

// Data sales yang Dikirim oleh cURL
$sales =array("signature_key"=>"a1d8c6714905470b338635050e21c12f",
		"payment_type"=>"ECHANNEL",
		"gross_amount"=>1500,
		"currency"=>"IDR",
		"items"=>array("item_id"=>"Fixadura",
				  		"qty"=>2,
				  		"price"=>150000,
				  		"total"=>300000)
		);
$send = sales_insert("https://recruitment.jujura.id/api/sales/insert",json_encode($sales));

$sales=  json_encode(array('respon'=>$send),JSON_UNESCAPED_SLASHES);

echo "<pre>";
print_r($sales);
echo "</pre>"; 
?>