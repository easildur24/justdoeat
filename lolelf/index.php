<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/lolelf/util/image.php');
?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/main.js"></script>
    <title>lolelf - Black Market Brawlers Edition</title>
</head>

<body>
    <div class="background">
        <div class="dot"></div>
    </div>
    <div class="header">
        <h2>lolelf</h2>
        <h3>Black Market Brawlers Edition</h3>
    </div>
    <div class="main">
        <div class="champions">
            <?php
                print_champion_icons();
            ?>
        </div> 
        <img class="champion_slot" id="champion_slot0" src="img/champion_slot.png" />
        <div id="champion_stats">
            <div class="champion_stats_info">
                <h2 class="champion_stats_name">Olaf</h2>
                <h4 class="champion_stats_title">the Berserker</h4>
            </div>
            <div class="champion_game_stats">
                <li class="champion_game_stats_item">Win rate: 54.5% (2/127)</li>
                <li class="champion_game_stats_item">Average KDA: 2.8 (29/127)</li>
                <li class="champion_game_stats_item">Ban rate: 15%</li>
                <li class="champion_game_stats_item">Popularity: 14.4%</li>
                <li class="champion_game_stats_item">Meta: Top</li>
            </div>
            <div class="top_partners">
                <span class="top_partners_title">Top partners</span>
                <br>
                <img src="http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png" class="champion_stats_image" />
                <img src="http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png" class="champion_stats_image" />
                <img src="http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png" class="champion_stats_image" />
            </div>
            <div class="top_enemies">
                <span class="top_enemies_title">Top enemies</span>
                <br>
                <img src="http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png" class="champion_stats_image" />
                <img src="http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png" class="champion_stats_image" />
                <img src="http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png" class="champion_stats_image" />
            </div>
            <canvas id="role_chart" width="100" height="100"></canvas>
        </div>
        <img class="champion_slot" id="champion_slot1" src="img/champion_slot.png" />
        <img class="champion_slot" id="champion_slot2" src="img/champion_slot.png" />
        <img class="champion_slot" id="champion_slot3" src="img/champion_slot.png" />
        <img class="champion_slot" id="champion_slot4" src="img/champion_slot.png" />
        <img class="champion_slot" id="champion_slot5" src="img/champion_slot.png" />
        <img class="champion_slot" id="champion_slot6" src="img/champion_slot.png" />
        <img class="champion_slot" id="champion_slot7" src="img/champion_slot.png" />
        <img class="champion_slot" id="champion_slot8" src="img/champion_slot.png" />
        <img class="champion_slot" id="champion_slot9" src="img/champion_slot.png" />
        <img src="img/map.png" class="main_img"/>              
    </div>
    


</body>
</html>
