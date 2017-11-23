<div id="legend">
    <h3>Legend</h3>
</div>

<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 640px;
        width: 640px;

    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        margin: 0;
        padding: 0;
    }
</style>
<div id="map"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 52.783001, lng: 6.892503},
            zoom: 16
        });
        var iconBase = 'src/img/iconMap/';
        var icons = {
            energy: {
                name: 'Energy',
                icon: iconBase + 'bolt.png'
            },
            water: {
                name: 'Water',
                icon: iconBase + 'faucet.png'
            }
        };

        var features = [
            {
                position: new google.maps.LatLng(52.783001, 6.892503),
                type: 'energy'
            }
        ];

        features.forEach(function (feature) {
            var marker = new google.maps.Marker({
                position: feature.position,
                icon : icons[feature.type].icon,
                map: map
            });
        });

        var legend = document.getElementById('legend');
        for (var key in icons) {
            var type = icons[key];
            var name = type.name;
            var icon = type.icon;
            var div = document.createElement('div');
            div.innerHTML = '<img src="' + icon + '"> ' + name;
            legend.appendChild(div);
        }



    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZHKVcs3VGPaxnuiQNFjOKL741xKu_vag&callback=initMap"
        async defer></script>

<script>
    //AIzaSyBZHKVcs3VGPaxnuiQNFjOKL741xKu_vag api sleutel voor googlemaps
</script>
