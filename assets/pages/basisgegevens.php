<!-- MAP page-->

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
      </script>

    </div>
  </div>
</div>
