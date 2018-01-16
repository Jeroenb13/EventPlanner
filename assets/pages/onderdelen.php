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

    <div id="page-container">

        <h1>Event Planner</h1>
        <h2>Onderdelen</h2>

        <a href="?page=formulier"><button class="buttonOnderdeelToevoegen">+ Nieuw Object</button></a>

        <div id="onderdelenTabel-OverflowFix">
            <table id="onderdelenTabel">
                <tr>
                    <th></th>
                    <th>Naam</th>
                    <th>Categorie</th>
                    <th></th>
                </tr>
                <tr>
                    <td><div class="onderdelenKleur" style="background-color: #82ca9c;"></div></td>
                    <td>Podium1</td>
                    <td>Podia</td>
                    <td><a href="#">Wijzigen</a> | <a href="#">Bekijken</a> | <a href="#">Verwijderen</a></td>
                </tr>
                <tr>
                    <td><div class="onderdelenKleur" style="background-color: #82ca9c;"></div></td>
                    <td>Mainstage</td>
                    <td>Podia</td>
                    <td><a href="#">Wijzigen</a> | <a href="#">Bekijken</a> | <a href="#">Verwijderen</a></td>
                </tr>
                <tr>
                    <td><div class="onderdelenKleur" style="background-color: #b20000;"></div></td>
                    <td>Harry's Hap</td>
                    <td>Eet- en drankkramen</td>
                    <td><a href="#">Wijzigen</a> | <a href="#">Bekijken</a> | <a href="#">Verwijderen</a></td>
                </tr>
                <tr>
                    <td><div class="onderdelenKleur" style="background-color: #d65b00;"></div></td>
                    <td>Technieksectie1</td>
                    <td>Technieksectie</td>
                    <td><a href="#">Wijzigen</a> | <a href="#">Bekijken</a> | <a href="#">Verwijderen</a></td>
                </tr>
            </table>
        </div>

    </div>
