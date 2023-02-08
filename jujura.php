<?Php

//REGISTER
function curl($url, $datas){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}

// Data Parameter yang Dikirim oleh cURL
$datas = array("user_name"=>"Arif",
			  "user_email"=>"Arif@tester.com");
$send = curl("https://recruitment.jujura.id/api/register",json_encode($datas));


// mengubah JSON menjadi array
$datas = json_decode($send, TRUE);

echo "<pre>";
print_r($datas);
echo "</pre>";



//PRODUK
function curly($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}

$send = curly("https://recruitment.jujura.id/api/product");

// mengubah JSON menjadi array
$data = json_decode($send, TRUE);

echo "<pre>";
print_r($data);
echo "</pre>";


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

//LIST SALES
function sales($url, $lists){
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

$send = sales("https://recruitment.jujura.id/api/sales",json_encode($lists));

// mengubah JSON menjadi array
$lists = json_decode($send, TRUE);

echo "<pre>";
print_r($lists);
echo "</pre>";

?>