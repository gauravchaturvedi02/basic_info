<?php
if (!empty($_POST['location'])) {
    $maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($_POST['location']);
    $maps_json = file_get_contents($maps_url);
    $maps_array = json_decode($maps_json, true);
    $lat = $maps_array['results'][0]['geometry']['location']['lat'];
    $lng = $maps_array['results'][0]['geometry']['location']['lng'];
    ?>
<div class="error success" >
     <p>Geographical Latitude =<?php echo $lat;?></p>
     <p>Geographical Longitude=<?php echo $lng;?></p>
    </div>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Location Info</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<p style="text-align:left;font-size:20px">
        <a href="index.php" style="text-decoration: none;color:red;"><strong>Home</strong></a>
    </p>
 <h3 class="main_heading">
 Lets Find Latitude and Longitude of some places
</h3>

<form method="post" action="location.php">
<div class="input-group">
Which place u want to visit virtually:<input type="Text" name="location"><br>
<input type="Submit" name="submitLocation" value="Click to get the location!">
</div>
</form>

</body>
</html>
