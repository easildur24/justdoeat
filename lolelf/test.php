<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/lolelf/util/image.php');
?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/test.css" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/Chart.min.js"></script>    
    <script src="js/main.js"></script>
    <title>lolelf - Black Market Brawlers Edition</title>
</head>

<body>
    <div class=header></div>
    <div class="main">
        <span class="champion_slot" id="champion_slot0"></span>
            <div class="champion_stats" id="champion_stats0">
            <div class="champion_stats_info">
                <h2 class="champion_stats_name">Olaf</h2>
                <h4 class="champion_stats_title">the Berserker</h4>
            </div>
            <div class="champion_game_stats">
                <li class="champion_game_stats_item">Win rate: 54.5% (2/127)</li>
                <li class="champion_game_stats_item">Average KDA: 2.8 (29/127)</li>
                <li class="champion_game_stats_item">Ban rate: 15%</li>
                <li class="champion_game_stats_item">Popularity: 14.4%</li>
            </div>
            <div class="top_partners">
                Top partners:
                
            </div>
            <div class="top_enemies">
                Top enemies:
                
            </div>
            <canvas id="role_chart" width="100" height="100"></canvas>
        </div>
    </div>
    


</body>
</html>
