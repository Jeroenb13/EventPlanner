<!-- MAP page-->
<div id="container-plus">
    <div id="upperbar"></div>

    <!-- Navigation -->
    <div id="nav">
        <ul>
          <li><a onclick="showNav()">☰</a></li>
          <li><a id="loginDropdown-click" href="#" onclick="showLoginInfo()"><i class="icon-user nav-user-icon"></i></a>
              <div id="loginDropdown"><p id="ingelogdAls">Ingelogd als:</p> <p id="IngelogdNaam">Jan Jansman</p></div>
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

        <div id="nav-overlay-loginDropdown">
          <p id="ingelogdAls">Ingelogd als:</p>
          <p id="IngelogdNaam">Jan Jansman</p>
        </div>

      </ul>
    </div>

    <div id="page-container">

      <h1>Event Planner</h1>
      <h2>Basisgegevens</h2>

      <p class="p-margin-top">Vul hier algemene informatie in voor het evenement.</p>

      <form id="basisgegevensForm" method="POST" action="?page=onderdelen">
        <br/><hr>
        <h2>Persoonlijke gegevens</h2>
        <p class="basisgegevens-p">Voornaam*:</p>
        <input class="formInput" type="text">
        <p class="basisgegevens-p">Achternaam*:</p>
        <input class="formInput" type="text">
        <p class="basisgegevens-p">Email*:</p>
        <input class="formInput" type="text">
        <p class="basisgegevens-p">Telefoonnummer:</p>
        <input class="formInput" type="text">
        <p class="basisgegevens-p">Organisatie:</p>
        <input class="formInput" type="text">

        <br/><hr>
        <h2>Evenement gegevens</h2>
        <p class="basisgegevens-p">Naam evenement*:</p>
        <input class="formInput" type="text">
        <p class="basisgegevens-p">Datum/data evenement:</p>
        <input type="date" class="formInput"><a class="formAddButton" onclick="addDate">+</a>
        <p class="formAddDate"></p>
        <br/><hr>
        <button type="submit">Verder</button>
      </form>

      <script>
        function addDate(){
          $(".formAddDate:last").after("<input type='date' class='formInput formAddDate'>");
        }
        /* Display login info on click, for mobile users*/
        function showLoginInfo(){
          if($("#loginDropdown").is(":visible")){
            $("#loginDropdown").css("display","none");
          }else{
            $("#loginDropdown").css("display","block");
          }
        }
      </script>

    </div>
  </div>
</div>
