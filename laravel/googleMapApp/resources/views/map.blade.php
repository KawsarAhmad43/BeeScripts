<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Map</title>
    <style>
        #map{
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>




    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        function initMap(){
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 40.712776, ing: -74.005974},
                zoom: 10
            });
        }
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</body>
</html>