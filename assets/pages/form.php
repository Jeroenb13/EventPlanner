<!--
Inhoud:
    voor elke faciliteit een form in te vullen,
    na het invoeren van een nieuwe faciliteit wordt deze toegevoegd aan een overzichtelijke lijst
        - Vragen/Mogelijkheden
        - Submit per vraag/mogelijkheid
-->
<!--
Inhoud:
    - Titel
    - Uitleg
-->
<div id="container-plus">
    <div id="upperbar"></div>

    <h1>Event Planner</h1>

    <div class="paragraph">
        <p>Voeg hier dingen toe</p>

        <form id="inputForm" method="post" action="">
            <p>Naam:</p>
            <input type="text" name="nameInput">
            <br/>
            <p>Categorie</p>
            <select name="inputCat">
                <option value="Bierpompen">Bierpompen</option>
                <option value="eetkramen">eet- en drankkramen</option>
                <option value="Toiletten">Toiletten</option>
                <option value="muntjesVerkoop">muntjes verkoopkramen</option>
                <option value="Springkussens">Springkussens</option>
                <option value="Attracties">Attracties</option>
                <option value="muzikant">muzikant(single, duo, band)</option>
                <option value="EHBO">EHBO stand</option>
                <option value="techniek sectie">Techniek sectie</option>
            </select>
            <input type="submit" value="Toevoegen" name="submit">
        </form>

    </div>



    <div class="buttons">
        <a href="?page=form"><button>Start</button></a>
    </div>

    <div class="buttons">
        <a href="?page=login"><button>Login</button></a>
    </div>