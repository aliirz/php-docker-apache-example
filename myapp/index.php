<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// set response code - 200 OK
http_response_code(200);

    // show products data in json format
// echo json_encode($result);


// init curl
$ch = curl_init();

//Set the URL that you want to GET by using the CURLOPT_URL option.
curl_setopt($ch, CURLOPT_URL, 'https://kobocat.unhcr.org/api/v1/data/23530');

//Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// set http basic auth
curl_setopt($ch, CURLOPT_USERPWD, 'irumjamshed:Irum123');
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

//Execute the request.
$data = curl_exec($ch);

//Close the cURL handle.
curl_close($ch);

//Print the data out onto the page.
echo $data;

?>