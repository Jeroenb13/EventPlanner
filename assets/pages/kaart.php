<!-- MAP page-->

    <h1>Event Planner</h1>
    <h2>Kaart</h2>

    <div class="spacer-100"></div>

  <!--  <div id="moveBoxes">
        <div id="boxesContainer">
            <div id="konvaContainer"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464.76395445674024!2d14.505729650453198!3d46.051417003724126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47652d624cb9da29%3A0x1a51289879c2454!2sStritarjeva+ulica%2C+1000+Ljubljana%2C+Sloveni%C3%AB!5e1!3m2!1snl!2snl!4v1516017388589" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <button id="rotateL">RotateLeft</button>
        <button id="rotateR">RotateRight</button>
        <button id="deselect">Deselect</button>
            <script src="./assets/scripts/Kaart.js"></script>
    </div>-->

    <div id="mapAndObjectsContainer">

        <div id="mapObjects">
            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay1">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Mainstage</p>
                    <p class="mapObjectCategory">Podia</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay2">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Harry's hap</p>
                    <p class="mapObjectCategory">Eet- en drankkramen</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay3">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">EHBO1</p>
                    <p class="mapObjectCategory">EHBO stands</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay4">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Techniek1</p>
                    <p class="mapObjectCategory">Technieksecties</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay5">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Toiletten1</p>
                    <p class="mapObjectCategory">Toiletten</p>
                </div>
            </div>

            <div class="mapObjectListItem">
                <div class="mapObjectDisplayBox">
                    <div class="objectDisplay6">
                    </div>
                </div>
                <div class="mapObjectDescription">
                    <p class="mapObjectTitle">Draaimolen1 </p>
                    <p class="mapObjectCategory">Attracties</p>
                </div>
            </div>

        </div>

        <div id="map">
          <div id="konvaContainer"></div>
          <div id="js-map" class="olMap"></div>
        </div>

    </div>

    <div id="optionsAndControlsContainer">
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

      <div id="objectControls">
        <button id="rotateL"><i class="icon-ccw"></i></button>
        <button id="rotateR"><i class="icon-cw"></i></button>
        <button id="deselect">Deselecteer</button>
      </div>
    </div>

      <script src="assets/scripts/Kaart.js"></script>
      <script src="https://openlayers.org/en/v4.6.4/build/ol.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="assets/scripts/Evenementenvergunning.js"></script>
      <script>
        fitStageIntoParentContainer();
        // adapt the stage on any window resize
        window.addEventListener('resize', fitStageIntoParentContainer);
      </script>
</div>
