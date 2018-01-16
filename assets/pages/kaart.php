<!-- MAP page-->
<div id="container-plus">
    <div id="upperbar"></div>

    <!-- Navigation -->
    <div id="nav">
        <ul>
          <li><a onclick="showNav()">☰</a></li>
          <li><a id="loginDropdown-click" href="#" onclick="showLoginInfo()"><i class="icon-user nav-user-icon"></i></a>
            <div id="loginDropdown"> <p id="IngelogdNaam">Jan Jansman</p>
            <a class="login-dropdown-a">Profiel<i class="icon-pencil"></i></a> <a class="login-dropdown-a">Uitloggen<i class="icon-logout"></i></a> </div>
          </li>
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
        <div class="nav-divider"></div>

        <li class="nav-overlay-user-li">
          <i class="icon-user nav-overlay-icon-user"></i><p id="nav-overlay-ingelogdNaam">Jan Jansman</p>
          <a class="nav-overlay-login-a">Profiel<i class="icon-pencil"></i></a>
          <a class="nav-overlay-login-a">Uitloggen<i class="icon-logout"></i></a>
        </li>

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

        <div id="js-map" class="map"></div>
        <div class="pane">
            <div id="themalagen-pane" class="pane">
                <p>Themalagen</p>
                <ul id="js-themalagen" class="layers"></ul>
            </div>
            <div id="basislagen-pane" class="pane">
                <p>Basislagen</p>
                <ul id="js-basislagen" class="layers">
                </ul>
            </div>
            <div id="js-feature-info" class="feature-info"></div>
        </div>
                <script src="https://openlayers.org/en/v4.6.4/build/ol.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                <script src="assets/scripts/Evenementenvergunning.js"></script>

    </div>
