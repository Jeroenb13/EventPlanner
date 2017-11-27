<!-- MAP page-->
<div id="container">
    <div id="upperbar"></div>

    <h1>Event Planner</h1>

    <div class="paragraph">
        <p>Maak een plattegrond voor het evenement dat
            georganiseerd gaat worden door op

    </div>

    <div id="legend">
        <h3>Legend</h3>
    </div>

    <div id="map">
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 52.783001, lng: 6.892503},
                zoom: 16
            });
            var iconBase = 'assets/images/iconMap/';
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
                    position: new google.maps.LatLng(52.783162, 6.891798),
                    type: 'energy'
                }, {
                    position: new google.maps.LatLng(52.783142, 6.891870),
                    type: 'energy'
                }, {
                    position: new google.maps.LatLng(52.781969, 6.892700),
                    type: 'energy'
                }, {
                    position: new google.maps.LatLng(52.784146, 6.892832),
                    type: 'energy'
                }, {
                    position: new google.maps.LatLng(52.783102, 6.892630),
                    type: 'energy'
                }, {
                    position: new google.maps.LatLng(52.783000, 6.892600),
                    type: 'water'
                }, {
                    position: new google.maps.LatLng(-33.91682, 151.23149),
                    type: 'energy'
                }, {
                    position: new google.maps.LatLng(-33.91790, 151.23463),
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
    </div>



