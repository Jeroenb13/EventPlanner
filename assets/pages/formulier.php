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
        <h2>Kaart</h2><br>

        <p>Vul hier de juiste gegevens in</p>

        <div id="inputForm">
            <form method="post" action="">
            <p>Categorie:</p>
            <select name="inputCat" id="inputCat">
                <option value="bierpompen">Bierpompen</option>
                <option value="eetkramen">eet- en drankkramen</option>
                <option value="toiletten">Toiletten</option>
                <option value="muntjesVerkoop">muntjes verkoopkramen</option>
                <option value="Springkussens">Springkussens</option>
                <option value="attracties">Attracties</option>
                <option value="muzikant">muzikant(single, duo, band)</option>
                <option value="EHBO">EHBO stand</option>
                <option value="techniekSectie">Techniek sectie</option>

                <option value="podia" id="podiaMain">Podia</option>
                <option value="tenten" id="tentenMain">Tenten</option>
                <option value="barricades" id="barricadesMain">Barricades</option>
            </select>

                <hr>
            <p>Naam:</p>
            <input type="text" name="nameInput">
            <br/><hr>

            <script>
                $(document).ready(function () {
                    var $podia = $(".podia");
                    var $tenten = $(".tenten");
                    var $barricades = $(".barricades");
                    var $faciliteiten = $(".faciliteiten");

                    $(document).ready(function() {
                        $podia.hide();
                        $tenten.hide();
                        $barricades.hide();
                        $faciliteiten.hide();
                    });

                    $("#inputCat").change(function () {
                        var value = $( "#inputCat" ).val();
                        if(value == "podia"){
                            $faciliteiten.hide();
                            $tenten.hide();
                            $barricades.hide();
                            console.log(value);
                            $podia.show();
                        }else if(value == "tenten"){
                            $faciliteiten.hide();
                            $podia.hide();
                            $barricades.hide();
                            console.log(value);
                            $tenten.show();
                        }else if(value == "barricades") {
                            $faciliteiten.hide();
                            $podia.hide();
                            $tenten.hide();
                            console.log(value);
                            $barricades.show();
                         }else{
                            $podia.hide();
                            $tenten.hide();
                            $barricades.hide();
                            console.log(value);
                            $faciliteiten.show();
                        }
                    });

                    var $hogeHekken = $(".hogeHekken");
                    var $lageHekken = $(".lageHekken");

                    $(document).ready(function() {
                        $hogeHekken.hide();
                        $lageHekken.hide();
                    });

                    $("#barrSoort").change(function () {
                        var value = $( "#barrSoort" ).val();
                        if(value == "hogeHekken"){
                            $lageHekken.hide();
                            $hogeHekken.show();
                            console.log(value);
                        }else if(value == "lageHekken"){
                            $hogeHekken.hide();
                            $lageHekken.show();
                            console.log(value);
                        }else{
                            $lageHekken.hide();
                            $hogeHekken.hide();
                        }
                    });
                });

            </script>

            <!--Voor de eerste 9 faciliteiten-->
            <div class="faciliteiten">
            <p>Soort:</p>
            <input type="text" name="soort">
            <br/><hr>

            <p>Oppervlakte:</p>
            <input type="radio" name="facOppervlakte" value="facCirkel"> Circel
            <input type="radio" name="facOppervlakte" value="facVierkant"> Vierkant
            <br/><hr>
            <p>Lengte:</p>
            <input type="text" name="facLengte"> cm
            <br/><hr>
            <p>Breedte:</p>
            <input type="text" name="facBreedte"> cm
            <br/><hr>
            <p>Diameter:</p>
            <input type="text" name="facDiameter">
            <br/><hr>

            <p>Hoogte:</p>
            <input type="text" name="facHoogte">
            <br/><hr>

            <p>Gewicht:</p>
            <input type="text" name="facGewicht">
            <br/><hr>

            <p>Extra oppervlakte:</p>
            <p>Hoogte:</p>
            <input type="text" name="extraHoogte">
            <br/><hr>
            <p>Breedte:</p>
            <input type="text" name="extraBreedte">
            <br/><hr>

            <p>Elektriciteit:</p>
            <input type="radio" name="facElektriciteit" value="ja"> Ja
            <input type="radio" name="facElektriciteit" value="nee"> Nee
            <br/><hr>

            <p>Gas:</p>
            <input type="radio" name="facGas" value="ja"> Ja
            <input type="radio" name="facGas" value="nee"> Nee
            <br/><hr>

            <p>Water:</p>
            <input type="radio" name="facWater" value="ja"> Ja
            <input type="radio" name="facWater" value="nee"> Nee
            <br/><hr>

            <p>Open vuur:</p>
            <input type="radio" name="facVuur" value="ja"> Ja
            <input type="radio" name="facVuur" value="nee"> Nee
            <br/><hr>

            <p>Extra bijzonderheden:</p>
            <input type="text" name="facBijzonderheden">
            <br/>
            </div>

            <!--Voor het podia-->
            <div class="podia">
            <p>Beschikbare podia</p>
            <select name="beschikbarePodia">
                <option value="podiumEen">Bierpompen</option>
                <option value="podiumTwee">eet- en drankkramen</option>
                <option value="podiumDrie">Toiletten</option>
            </select><hr>

            <p>Soort:</p>
            <input type="text" name="podiaSoort">
            <br/><hr>

            <p>Oppervlakte:</p>
            <input type="radio" name="podiaOppervlakte" value="podiaCirkel"> Circel
            <input type="radio" name="podiaOppervlakte" value="podiaVierkant"> Vierkant
            <br/><hr>
            <p>Lengte:</p>
            <input type="text" name="podiaLengte"> cm
            <br/><hr>
            <p>Breedte:</p>
            <input type="text" name="podiaBreedte"> cm
            <br/><hr>
            <p>Diameter:</p>
            <input type="text" name="podiaDiameter">
            <br/><hr>

            <p>Hoogte:</p>
            <input type="text" name="podiaHoogte">
            <br/><hr>

            <p>Gewicht:</p>
            <input type="text" name="podiaGewicht">
            <br/><hr>

            <p>Naam bedrijf:</p>
            <input type="text" name="podiaBedrijfsnaam">
            <br/><hr>

            <p>Bouwteking uploaden:</p>
            <input type="file" name="podiaBouwtekening" id="podiaBouwtekening">
            <br/><hr>

            <p>Certificaat uploaden:</p>
            <input type="file" name="podiaCertificaat" id="podiaCertificaat">
            <br/>
            </div>

            <!--Voor de tenten-->
            <div class="tenten">
            <p>Beschikbare tenten</p>
            <select name="beschikbarePodia">
                <option value="tentEen">Bierpompen</option>
                <option value="tentTwee">eet- en drankkramen</option>
                <option value="tentDrie">Toiletten</option>
            </select><hr>

            <p>Soort:</p>
            <input type="text" name="tentSoort">
            <br/><hr>

            <p>Oppervlakte:</p>
            <input type="radio" name="tentOppervlakte" value="tentCirkel"> Circel
            <input type="radio" name="tentOppervlakte" value="tentVierkant"> Vierkant
            <br/><hr>
            <p>Lengte:</p>
            <input type="text" name="tentLengte"> cm
            <br/><hr>
            <p>Breedte:</p>
            <input type="text" name="tentBreedte"> cm
            <br/><hr>
            <p>Diameter:</p>
            <input type="text" name="tentDiameter">
            <br/><hr>

            <p>Hoogte:</p>
            <input type="text" name="tentHoogte">
            <br/><hr>

            <p>Gewicht:</p>
            <input type="text" name="tentGewicht">
            <br/><hr>

            <p>Naam bedrijf:</p>
            <input type="text" name="tentBedrijfsnaam">
            <br/><hr>

            <p>Bouwteking uploaden:</p>
            <input type="file" name="tentBouwtekening" id="tentBouwtekening">
            <br/><hr>

            <p>Certificaat uploaden:</p>
            <input type="file" name="tentCertificaat" id="tentCertificaat">
            <br/>
            </div>

            <!--Voor de barricades-->
            <div class="barricades">
            <p>Soort:</p>
            <select name="barrSoort" id="barrSoort">
                <option value="hogeHekken" id="hogeHekken">Hoge hekken</option>
                <option value="lageHekken" id="lageHekken">Lage hekken</option>
                <option value="mojoBarr" id="mojoBarr">Mojo barriers</option>
            </select>
            <br/><hr>

            <p>Hoeveelheid:</p>
            <input type="text" name="barrOppervlakte">
            <br/><hr>

            <!--Als hoge hekken worden gekozen-->
                <div class="hogeHekken">
            <p>Geblindeerd hekwerk:</p>
            <input type="radio" name="blinderen" value="blindJa"> Ja
            <input type="radio" name="blinderen" value="blindNee"> Nee
            <br/><hr>

            <p>Hoogte:</p>
            <input type="text" name="hogeHekHoogte">
            <br/><hr>

            <p>Lengte:</p>
            <input type="text" name="hogeHekLengte">
            <br/>
            </div>

            <!--Als lage hekken worden gekozen-->
            <div class="lageHekken">
            <p>Hoogte:</p>
            <input type="text" name="lageHekHoogte">
            <br/><hr>

            <p>Lengte:</p>
            <input type="text" name="lageHekLengte">
            <br/>
            </div>
        </div>
        </form>

    </div>
    </div>
