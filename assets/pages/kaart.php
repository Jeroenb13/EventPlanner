<!-- MAP page-->
<div id="container-plus">
    <div id="upperbar"></div>

    <!-- Navigation -->
    <div id="nav">
        <ul>
          <li><a onclick="showNav()">☰</a></li>
          <li><a href="?page=kaart">Kaart</a></li>
          <li><a href="?page=onderdelen">Onderdelen</a></li>
          <li><a href="?page=basisgegevens">Basisgegevens</a></li>
        </ul>
    </div>
    <div id="nav-overlay">
      <ul>
        <li><a href="?page=basisgegevens">Basisgegevens</a></li>
        <div class="nav-divider"></div>
        <li><a href="?page=onderdelen">Onderdelen</a></li>
        <div class="nav-divider"></div>
        <li><a href="?page=kaart">Kaart</a></li>
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
            <style>
                .embed-container
                {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;}
                .embed-container iframe, .embed-container object, .embed-container
                iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;}
                small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}
            </style>
            <div class="embed-container">
                <script src="https://openlayers.org/en/v4.6.4/build/ol.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                <script src="assets/scripts/Evenementenvergunning.js"></script>
            </div>
        <script>
            //AIzaSyBZHKVcs3VGPaxnuiQNFjOKL741xKu_vag api sleutel voor googlemaps
        </script>
        </div>
    </div>




