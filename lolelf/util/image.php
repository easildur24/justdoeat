<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/lolelf/database/connection.php');
    
    function print_champion_icons(){
        $db = new db_base();
        $query = "select * from static_ImageDto where reference_type=3";
        $result = $db->query($query);
        $img_class = "champion_img";
        while ($row = mysqli_fetch_assoc($result)) {
            $img_url = "http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/" . $row['full'];
            echo "<img src=\"{$img_url}\" class=\"{$img_class}\">";
        }
    }
?>