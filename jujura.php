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
$datas = array("user_name"=>"HandikaDwi",
			  "user_email"=>"Handika@tester.com");
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
// $url = 'https://recruitment.jujura.id/api/product';

// echo httpGet($url);

// //print_r(httpGet($url));

// function httpGet($url)
// {
//     $ch = curl_init();  
 
//     curl_setopt($ch,CURLOPT_URL,$url);
//     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// //  curl_setopt($ch,CURLOPT_HEADER, false); 
 
//     $output=curl_exec($ch);
 
//     curl_close($ch);
//     return $output;
//     $profile = json_decode($url,true);
// echo "<pre>";
// print_r($profile);
// echo "</pre>";
// }


// //SALES INSERT
// function curll($url, $data){
//     $cht = curl_init(); 
//     curl_setopt($cht, CURLOPT_URL, $url);
//     curl_setopt($cht, CURLOPT_CUSTOMREQUEST, "POST");
//     curl_setopt($cht, CURLOPT_POSTFIELDS, $data);
//     curl_setopt($cht, CURLOPT_RETURNTRANSFER, 1); 
//     $output = curl_exec($cht); 
//     curl_close($cht);      
//     return $output;
// }

// // Data Parameter yang Dikirim oleh cURL
// $data =array("signature_key "=>"dec1f9a360de6fc4e1dc61b96e173f49",
// 		"payment_type "=>"ECHANNEL",
// 		"gross_amount"=>1500,
// 		"currency "=>"IDR",
// 		"items"=>array("item_id"=>"ABC",
// 				  "qty"=>2,
// 				  "price"=>"1500",
// 				  "total"=>'3000')
// 		);
// $send = curl("https://recruitment.jujura.id/api/sales/insert",json_encode($data));

// echo json_encode(array('respon'=>$send),JSON_UNESCAPED_SLASHES);


// //extract data from the post
// extract($_POST);

?>