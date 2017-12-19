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
        <p class="basisgegevens-p">hier moet nog data toegevoegd kunnen worden</p>
        <br/><hr>
        <button type="submit">Verder</button>
      </form>

    </div>
  </div>
</div>
