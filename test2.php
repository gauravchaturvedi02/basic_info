<?php


if(isset($_POST['submitQuery'])){
$query=$_POST['query'];
$urlValue =urlencode($query);
$handle =curl_init();
//$urlResults=;
curl_setopt_array($handle, array(
                  CURLOPT_URL=>"http://in.search.yahoo.com/search?p=".$urlValue,
                  CURLOPT_POST=>false,
                  // CURLOPT_POSTFIELDS =>"",
                  CURLOPT_RETURNTRANSFER =>true
                    ));

$response =curl_exec($handle);
echo $response;
curl_close($handle);
//$xml = new SimpleXMLElement($response);
//print_r($xml);
}
//clientId=92344331108-j56l3ri82128pj8psgq3gl6vef8skh71.apps.googleusercontent.com
//clientsecret=ps-YxRN2tEzCD47Fty-GlWvA
?>
<html>
<head>
<title>Location</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p style="text-align:left;font-size:20px">
  		<a href="index.php" style="text-decoration: none;color:red;"><strong>Home</strong></a>
  	</p>
 <h3>
 Tell me what u want to search and i will show u magic
</h3>

<form method="post" action="test2.php">
   <div class="input-group">
    What u want to search:<input type="Text" name="query"><br></div>
    <input type="Submit" name="submitQuery" value="Click to see magic!!">
 </form>
</body>
</html>
