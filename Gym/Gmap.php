<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>Simple Map</title>-->
<!--    <meta name="viewport" content="initial-scale=1.0">-->
<!--    <meta charset="utf-8">-->
<!--    <style>-->
<!--        /* Always set the map height explicitly to define the size of the div-->
<!--         * element that contains the map. */-->
<!--        #map {-->
<!--            height: 100%;-->
<!--        }-->
<!--        /* Optional: Makes the sample page fill the window. */-->
<!--        html, body {-->
<!--            height: 100%;-->
<!--            margin: 0;-->
<!--            padding: 0;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<div id="map"></div>-->
<!--<script>-->
<!--    var map;-->
<!--    function initMap() {-->
<!--        map = new google.maps.Map(document.getElementById('map'), {-->
<!--            center: {lat: -34.397, lng: 150.644},-->
<!--            zoom: 8-->
<!--        });-->
<!--    }-->
<!--</script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"-->
<!--        async defer></script>-->
<!--</body>-->
<!--</html>-->

<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $myip = $_SERVER['HTTP_CLIENT_IP'];
}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $myip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
    $myip= $_SERVER['REMOTE_ADDR'];
}
echo $myip;

//$json = file_get_contents("http://www.geoplugin.net/json.gp?{$myip}");
//$res = $json_decode($json);
//var_dump($res);
?>

<html>
<a href="http://www.geoplugin.net/json.gp?<?php $myip ?>">click me</a>
</html>