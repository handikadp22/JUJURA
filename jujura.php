<?Php

//REGISTER
function curl($url, $data){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}

// Data Parameter yang Dikirim oleh cURL
$data = array("user_name"=>"HandikaDwi",
			  "user_email"=>"Handika@tester.com");
$send = curl("https://recruitment.jujura.id/api/register",json_encode($data));

echo json_encode(array('respon'=>$send),JSON_UNESCAPED_SLASHES);


//PRODUK
$url = 'https://recruitment.jujura.id/api/product';

echo httpGet($url);

//print_r(httpGet($url));

function httpGet($url)
{
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}

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



//set POST variables
$url = 'https://recruitment.jujura.id/api/sales/insert';
$fields = array("signature_key "=>"dec1f9a360de6fc4e1dc61b96e173f49",
		"payment_type "=>"ECHANNEL",
		"gross_amount"=>1500,
		"currency "=>"IDR",
		"items"=>array("item_id"=>"ABC",
				  "qty"=>2,
				  "price"=>"1500",
				  "total"=>'3000')
		);
$fields_string = http_build_query($fields);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);
echo $result;

//close connection
curl_close($ch);
?>