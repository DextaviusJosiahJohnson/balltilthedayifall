<?php

date_default_timezone_set('Asia/Manila');
$date = new DateTime();
$bate = new DateTime("now", new DateTimeZone('Europe/London'));
$uate = new DateTime("now", new DateTimeZone('Europe/Kiev'));
$guamate = new DateTime("now", new DateTimeZone('Pacific/Guam'));
$madagascate = new DateTime("now", new DateTimeZone('Indian/Antananarivo'));
$iceate = new DateTime("now", new DateTimeZone('Atlantic/Reykjavik'));
$date->add(new DateInterval('P67D'));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Gaming</title>
<style> <?php include 'css/styles.css' ?></style>
</head>
<body>
    <h1> The Flying Bisaya </h1>
    <h2> Domestic </h2>
    <div class="parent">
        <div class="div1"> 
            <table>       
                <tr>
                    <td>TO</td>
                </tr>
                <tr>
                    <th>
                        <img src="https://cdn.earthroulette.com/ER/bg/Malolos-bg.jpg?w=1920&scale.option=noup" width="350" height="350">
                    </th>
                </tr>
                <tr>
                    <td>Doon</td>
                </tr>
                <tr>
                    <th><?php 
                    $date->add(new DateInterval('PT3H'));
                    echo "ARRIVAL TIME ", $date->format('g:i A');
                    ?></th>
                </tr>
            </table>
        </div>
        <div class="div2">
                        <table>       
                <tr>
                    <td>FROM</td>
                </tr>
                <tr>
                    <th>
                        <img src="https://cdn.earthroulette.com/ER/bg/Pasig-bg.jpg?w=1920&scale.option=noup" width="350" height="350">
                    </th>
                </tr>
                <tr>
                    <td>Dito</td>
                </tr>
                <tr>
                    <th><?php 
                    $date->sub(new DateInterval('PT3H'));
                    echo "Current Time ", $date->format('g:i A');
                    ?></th>
                </tr>
            </table>
        </div>
        <div class="div3"> 
                <table>       
                <tr>
                    <td>FROM</td>
                </tr>
                <tr>
                    <th>
                        <img src="https://cdn.earthroulette.com/ER/bg/Puerto_Galera-bg.jpg?w=1920&scale.option=noup" width="350" height="350">
                    </th>
                </tr>
                <tr>
                    <td>Sa Aquarium Namen</td>
                </tr>
                <tr>
                    <th><?php
                    echo "Current Time ", $date->format('g:i A');
                    ?></th>
                </tr>
            </table>
        </div>
        <div class="div4">
            <table>       
                <tr>
                    <td>TO</td>
                </tr>
                <tr>
                    <th>
                        <img src="https://cdn.earthroulette.com/ER/bg/Moalboal2C_Cebu-bg.jpg?w=1920&scale.option=noup" width="350" height="350">
                    </th>
                </tr>
                <tr>
                    <td>Sa Kanto</td>
                </tr>
                <tr>
                    <th> <?php 
                    $date->add(new DateInterval('PT4H'));
                    echo "Arrival Time ", $date->format('g:i A');
                    ?></th>
                </tr>
            </table>
        </div>
    </div>     
        <h2> International </h2>
    <div class="parent">
        <div class="div1"> 
            <table>       
                <tr>
                    <td>TO</td>
                </tr>
                <tr>
                    <th>
                        <img src="https://cdn.mos.cms.futurecdn.net/fYxc6sKJNxyiYxRatdapDB-1920-80.jpg" width="350" height="350">
                    </th>
                </tr>
                <tr>
                    <td>London</td>
                </tr>
                <tr>
                    <th><?php 
                    $bate->add(new DateInterval('P56Y0DT8H'));
                    echo "Arrival Time ", $bate->format('Y-m-d g:i A'), " London Time";
                    ?></th>
                </tr>
                <tr><th> The Flying Bisaya now Supports<p style="color:red">TIME TRAVEL</p></th></tr>
            </table>
        </div>
        <div class="div2">
                        <table>       
                <tr>
                    <td>FROM</td>
                </tr>
                <tr>
                    <th>
                        <img src="https://cdn.earthroulette.com/ER/bg/Baguio-bg.jpg?w=1920&scale.option=noup" width="350" height="350">
                    </th>
                </tr>
                <tr>
                    <td>Bahay Namen</td>
                </tr>
                <tr>
                    <th> <?php 
                    $date->sub(new DateInterval('PT4H'));
                    echo "Current Time ", $date->format('g:i A'), " Philippines Time";
                    ?></th>
                </tr>
            </table>
        </div>
        <div class="div3"> 
                <table>       
                <tr>
                    <td>FROM</td>
                </tr>
                <tr>
                    <th>
                        <img src="https://cdn.earthroulette.com/ER/bg/Alona_Beach-bg.jpg?w=1920&scale.option=noup" width="350" height="350">
                    </th>
                </tr>
                <tr>
                    <td>Sa mga bangka namen</td>
                </tr>
                <tr>
                    <th><?php 
                    echo "Current Time ", $date->format('g:i A'), " Philippines Time";
                    ?></th>
                </tr>
            </table>
        </div>
        <div class="div4">
            <table>       
                <tr>
                    <td>TO</td>
                </tr>
                <tr>
                    <th>
                        <img src="https://images4.alphacoders.com/178/178134.jpg" width="350" height="350">
                    </th>
                </tr>
                <tr>
                    <td>Chernobyl Exclusion Zone</td>
                </tr>
                <tr>
                    <th> <?php 
                    $uate->add(new DateInterval('P1DT9H'));
                    echo "Arrival Time ", $uate->format('Y-m-d g:i A'), " Ukraine Time";
                    ?></th>
                </tr>
                <tr>
                    <th>Tour Guide Included: <p style="color:yellow;">Alexandrovisch Degtyarev</p></th>
                </tr>
            </table>
        </div>
    </div>     

    <div class="fawn">
        <table>
            <tr>
                <th><?= "Current Time ", $guamate->format('Y-m-d g:i A'), " Guam Time";?></th>
                <th><?= "Current Time ", $madagascate->format('Y-m-d g:i A'), " Madagascar Time";?></th>
                <th><?= "Current Time ", $iceate->format('Y-m-d g:i A'), " Iceland Time";?></th>
            </tr>
        </table>
    </div>
<footer>&copy; <?php echo date('Y'), " Renzo D. Nengasca | WD-201 "?></footer>
</body>
</html>