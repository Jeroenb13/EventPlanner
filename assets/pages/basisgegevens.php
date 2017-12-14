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

      <div class="spacer-100"></div>

      <form id="basisgegevensForm" method="POST" action="?page=onderdelen">
        <br/><hr>
        <p>Naam:</p>
        <input class="formInput" type="text">
        <br/><hr>
        <p>Blae:</p>
        <input class="formInput" type="text">
        <br/><hr>
        <button type="submit">Verder</button>
      </form>

    </div>
  </div>
</div>
