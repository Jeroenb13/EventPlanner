<!-- MAP page-->
<div id="container-plus">
    <div id="upperbar"></div>

    <!-- Navigation -->
    <div id="nav">
        <ul>
            <li><a href="?page=kaart">Kaart</a></li>
            <li><a href="?page=onderdelen">Onderdelen</a></li>
        </ul>
    </div>

    <h1>Event Planner</h1>
    <h2>Kaart</h2>

    <div class="spacer-100"></div>

    <div id="mapAndObjectsContainer">
        <div id="mapObjects">

            <!-- Object in the list of objects next to the map -->
            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Podium1</p>
                    <p class="mapObjectCategory">Podia</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Harry's hap</p>
                    <p class="mapObjectCategory">Eet- en drankkramen</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Podium1</p>
                    <p class="mapObjectCategory">Podia</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Harry's hap</p>
                    <p class="mapObjectCategory">Eet- en drankkramen</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Podium1</p>
                    <p class="mapObjectCategory">Podia</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Harry's hap</p>
                    <p class="mapObjectCategory">Eet- en drankkramen</p>
                </div>
            </div>

        </div>

        <div id="map">
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 52.783001, lng: 6.892503},
                    zoom: 17
                });

                var imageBounds = {
                    north: 52.864812,
                    west: 6.812500,
                    south: 52.627515,
                    east: 7.078402
                };


                /*
                EmmenOverlay = new google.maps.GroundOverlay(
                    'https://www.lib.utexas.edu/maps/historical/newark_nj_1922.jpg', imageBounds);
                EmmenOverlay.setMap(map);
                EmmenOverlay.setOpacity(0.5);
                */




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
    </div>
