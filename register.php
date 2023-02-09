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

?>