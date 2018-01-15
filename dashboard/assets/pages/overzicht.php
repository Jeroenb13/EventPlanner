        <p class="p-margin-top">Hier ziet u een overzicht van alle aankomende evenementen.</p>

        <div id="dashboardTable-OverflowFix">
            <table id="dashboardTable">
                <tr>
                    <th></th>
                    <th>Naam evenement</th>
                    <th>Datum</th>
                    <th>Status</th>
                    <th style="text-align:right;">
                        <?php
                        if($_SESSION["CLevel"] == 1) {
                            echo "<a href=\"?page=newEvent\" style=\"color:white;font-weight:bold;\">Nieuw Evenement</a>";
                        }
                        ?>
                    </th>
                </tr>
                <?php
                if($_SESSION["CLevel"] == 1) {
                    $stmt = $db->prepare("SELECT Event.Naam, Event.Status, DatumTabel.BeginDatum FROM Event INNER JOIN DatumTabel ON Event.EventID=DatumTabel.EventID WHERE Event.UserID=?;");
                    $stmt->execute(array($_SESSION["UID"]));
                }else{
                    $stmt = $db->prepare("SELECT Event.Naam, Event.Status, DatumTabel.BeginDatum FROM Event INNER JOIN DatumTabel ON Event.EventID=DatumTabel.EventID;");
                    $stmt->execute(array($_SESSION["UID"]));
                }

                while ($row = $stmt->fetch()) {
                    $naam = $row["Naam"];
                    $stat = "status-" . $row["Status"];
                    $date = $row["BeginDatum"];
                    echo "<tr>"
                        . "<td><div class=$stat></div></td>"
                        . "<td>$naam</td>"
                        . "<td>$date</td>"
                        . "<td><a href='#'>Bekijken</a>";
                    if($_SESSION["CLevel"] == 2){
                        echo " | <a href='#'>Wijzigen</a> | <a href='#'>Verwijderen</a>";
                    }

                    echo    "</td>"
                        . "</tr>";
                }

                ?>
                <tr>
                    <td><div class="status-nieuw"></div></td>
                    <td>Bierpop</td>
                    <td>22-04-2018</td>
                    <td>Nieuw</td>
                    <td><a href="#">Wijzigen</a> | <a href="#">Bekijken</a> | <a href="#">Verwijderen</a></td>
                </tr>
                <tr>
                    <td><div class="status-geaccepteerd"></div></td>
                    <td>Kerstmarkt</td>
                    <td>24-12-2017</td>
                    <td>Geaccepteerd</td>
                    <td><a href="#">Wijzigen</a> | <a href="#">Bekijken</a> | <a href="#">Verwijderen</a></td>
                </tr>
                <tr>
                    <td><div class="status-geweigerd"></div></td>
                    <td>Sit amet</td>
                    <td>05-12-2017</td>
                    <td>Geweigerd</td>
                    <td><a href="#">Wijzigen</a> | <a href="#">Bekijken</a> | <a href="#">Verwijderen</a></td>
                </tr>
            </table>
        </div>
