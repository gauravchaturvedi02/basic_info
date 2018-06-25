<?php


if(isset($_POST['submitQuery'])){
$query=$_POST['query'];

$urlValue =urlencode($query);

$handle =curl_init();
//$urlResults=;
curl_setopt_array($handle, array(
                  CURLOPT_URL=>"http://www.google.com/search?q=".$urlValue,
                  CURLOPT_POST=>false,
                  // CURLOPT_POSTFIELDS =>"",
                  CURLOPT_RETURNTRANSFER =>true
                    ));

$response =curl_exec($handle);
echo $response;
curl_close($handle);
//$xml = new SimpleXMLElement($response);

//

//print_r($xml);
}



//clientId=92344331108-j56l3ri82128pj8psgq3gl6vef8skh71.apps.googleusercontent.com
//clientsecret=ps-YxRN2tEzCD47Fty-GlWvA