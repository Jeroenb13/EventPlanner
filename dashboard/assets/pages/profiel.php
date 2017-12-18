<div id="container-plus">
    <div id="upperbar"></div>

    <!-- Navigation -->
    <div id="nav">
        <ul>
          <li><a onclick="showNav()">☰</a></li>
          <li><a href="?page=profiel">Profiel</a></li>
          <li><a href="?page=accounts">Accounts</a></li>
          <li><a href="?page=overzicht">Overzicht</a></li>
        </ul>
    </div>
    <div id="nav-overlay">
      <ul>
        <li><a href="?page=profiel">Profiel</a></li>
        <div class="nav-divider"></div>
        <li><a href="?page=accounts">Accounts</a></li>
        <div class="nav-divider"></div>
        <li><a href="?page=overzicht">Overzicht</a></li>
      </ul>
    </div>

    <div id="page-container">

        <h1>Dashboard</h1>
        <h2>Profiel</h2>

        <p class="p-margin-top">Op deze pagina kunt u uw eigen profiel wijzigen.</p>

        <form method="post" action="#">
          <hr>
          <p>Wachtwoord</p>
          <div class="inputGroup"><p>Nieuw wachtwoord:</p><input class="formInput" type="password"></div>
          <div class="inputGroup"><p>Nieuw wachtwoord (nogmaals)</p><input class="formInput" type="password"></div>
          <hr>
          <p></p>
          <input class="formInput" type="text">
          <hr>
          <input class="button" type="submit">

        </form>


    </div>

</div>